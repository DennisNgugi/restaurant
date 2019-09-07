<?php

namespace App\Http\Controllers;

use App\Checkout;
use App\CheckoutDetail;
use App\ReferenceCode;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $prop = DB::table('checkouts')
    // ->join('reference_codes', 'reference_codes.id', '=', 'checkouts.reference_id')
    // ->join('checkout_details', 'checkout_details.id', '=', 'checkouts.served_by')
    // ->join('waiters','waiters.id','=','checkout_details.waiter_id')
    // ->select('reference_codes.reference_code','waiters.waiters_name','checkouts.quantity','checkouts.price')
    // ->get();

    $prop = DB::table('reference_codes')
    ->join('payment_types', 'payment_types.id', '=', 'reference_codes.payment_type')
    ->join('waiters', 'waiters.id', '=', 'reference_codes.served_by')
    ->select('reference_codes.id','reference_codes.reference_code','reference_codes.grand_total','reference_codes.total_quantity','reference_codes.due','reference_codes.amount_recieved','reference_codes.created_at','payment_types.payment_type','waiters.waiters_name')
    ->get();
      return response()->json($prop);
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
        $carts = json_decode($request->getContent('data','details'),true);
         $dt = Carbon::now();
        //$waiter = $carts['client'];
        $pro_info = $carts['data'];
        $client = $carts['details'];
        //$total = $carts['total'];
      //  $quantity = $carts['quantity'];

        foreach($client as $k){

            print_r($k);

        }

        // Add reference code to reciept/order
        // $ref = new ReferenceCode;
        // $ref->reference_code = str_random(5).time();
        // $ref->grand_total = $total;
        // $ref->total_quantity = $quantity;
        // $ref->served_by = $client;
        // $ref->save();

        foreach($client as $t){

              $ref = new ReferenceCode;
              $ref->reference_code = str_random(5).time();
              $ref->total_quantity = $t['quantity'];
              $ref->grand_total = $t['total'];
              $ref->amount_recieved = $t['amount'];
              $ref->due = $t['due'];
              $ref->served_by = $t['waiter'];
              $ref->payment_type = $t['pay_type'];
              $ref->created_at = $dt->toDateString();
              $ref->updated_at = $dt->toDateString();
              $ref->save();

        }

        // //Add waiter name
        // foreach ($client as $f) {
        //   $serv = new CheckoutDetail;
        //   $serv->waiter_id = $f['waiter'];
        //   $serv->save();
        // //  print_r($f);
        // }

      //  $server_id = DB::getPdo()->lastInsertId();
      //add products sold
        foreach($pro_info as $w){
           foreach ($w as $k) {
             foreach ($client as $f) {


          $prop = new Checkout;
          $prop->reference_id = $ref->id;
          $prop->served_by =  $f['waiter'];
          $prop->product_id = $k['product']['id'];
          $prop->quantity = $k['quantity'];
          $prop->price = $k['product']['price'];
          $prop->total =  $k['product']['price'] * $k['quantity'];
          $prop->created_at = $dt->toDateString();
          $prop->updated_at = $dt->toDateString();

          $prop->save();
        }
        }

         //$prop->total = $k['price'] * $k['quantity'];

        }


  return response()->json(['success' => 'Product Added'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
