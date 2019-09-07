<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProductCollection;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Image;
use Storage;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $prop = DB::table('products')
      ->join('product_categories', 'product_categories.id', '=', 'products.category_id')->

      select('products.product_name','products.price','products.quantity','products.image','product_categories.category','products.id')
      ->get();
        return response()->json($prop);

    }

    public function search(){
      $search = $request->get('q');
      return DB::table('products')
    ->join('product_categories', 'product_categories.id', '=', 'products.category_id')->

    select('products.product_name','products.price','products.image','product_categories.category','products.id')
    ->where('products.product_name','like','%'.$search.'%')
    ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'product_name' => 'required',
          'category' => 'required',
          'price' => 'required',
          'quantity' => 'required|integer'

        ]);
        if($request->get('image'))
       {
          $image = $request->get('image');
          $name = time().str_random(5).'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('image'))->resize(250, 250)->save(public_path('images/').$name);
        }

        $prop = new Product();
        $prop->product_name = $request->product_name;

        $prop->quantity = $request->quantity;

        $prop->category_id = $request->category;

        $prop->image = $name;

        $prop->price = $request->price;

        $prop->save();

        return response()->json(['success' => 'Product Added'], 200);
          }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $prop = Product::find($id);
        $cat = ProductCategory::all();
        return view('products.edit',compact('prop','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $prop = Product::find($id);
      $prop->product_name = $request->product_name;
      $prop->quantity = $request->quantity;

      $prop->category_id = $request->category;

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time().'-'.$image->getClientOriginalName();
        $location = public_path('images/'.$filename);
        Image::make($image)->resize(250, 250)->save($location);
        $oldfile = $prop->image;
        //update the database
        $prop->image = $filename;
        Storage::delete($oldfile);
  }

      $prop->price = $request->price;

      $prop->save();

return response()->json(['success' => 'Product updated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prop = Product::find($id);
        $prop->delete();

                return response()->json(['success' => 'Product Deleted'], 200);

        //

    }
}
