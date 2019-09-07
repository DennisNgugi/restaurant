<?php

namespace App\Http\Controllers;
use App\Http\Resources\AdminCollection;
use App\Admin;
use App\Product;
use App\Checkout;
use App\ReferenceCode;
use App\Waiter;
use App\CheckoutDetail;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function products(){

  //    $sum = DB::table('products')->where('member_no','=',$id)->sum('amount');
      $count = DB::table('products')->count();
        return response()->json($count);

    }
    public function reciepts(){

  //    $sum = DB::table('products')->where('member_no','=',$id)->sum('amount');
      $rep = DB::table('reference_codes')->get();
        return response()->json($rep);

    }
    public function graph(){
      $prop = ReferenceCode::all();
        return response()->json($prop);
    }
    public function monthly(){
        $currentYear = date('Y');
          $prop = DB::table('reference_codes')
      ->whereRaw('YEAR(created_at) = ?',[$currentYear])
      ->select(DB::raw('SUM(grand_total) as total_amount,SUM(total_quantity) as total_quantity, MONTHNAME( created_at ) as month'))
    //  ->orderBy(DB::raw('MONTHNAME(created_at) ASC'))
      ->groupBy(DB::raw('MONTHNAME(created_at) ASC'))->get();

      return response()->json($prop);

    }

      public function reciept_detail($id){

        $post = DB::table('checkouts')
        ->join('reference_codes', 'reference_codes.id', '=', 'checkouts.reference_id')
        ->join('products', 'products.id', '=', 'checkouts.product_id')
        ->select('products.product_name','checkouts.created_at','checkouts.total','checkouts.quantity','checkouts.price')
        ->where('reference_id','=',$id)->get();

          return response()->json($post);

      }

    public function today(){
      $dt = Carbon::now();

        $today = DB::table('checkouts')->where('created_at' ,'=', $dt->toDateString())->sum('total');
         return response()->json($today);
    }
    public function month(){
      $currentMonth = date('m');

        $data = DB::table("reference_codes")
          ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
          ->sum('grand_total');
          return response()->json($data);


    }
    public function report(Request $request){
        $start = $request->get('start');
        $end = $request->get('end');
      $prop = DB::table('reference_codes')
      ->join('waiters', 'waiters.id', '=', 'reference_codes.served_by')
      ->select('reference_codes.*','waiters.*')
      ->whereBetween('created_at',[$start, $end])
      ->groupBy('reference_codes.id')
      ->get();

        return response()->json($prop);

    }

    public function waiter(){
      //$dt = Carbon::now();
    $prop =  Waiter::with('ref')->withCount('ref')->orderBy('ref_count','DESC')->get();
    return response()->json($prop);


    }
    public function amount(){
       $sum = DB::table('checkouts')->sum('total');
       return response()->json($sum);
    }
    public function quantity(){
       $quan = DB::table('checkouts')->sum('quantity');
       return response()->json($quan);
    }

    public function checkout(){

    }


}
