<?php

namespace App\Http\Controllers;
use App\Http\Resources\PaymentTypeCollection;
use App\PaymentType;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return new PaymentTypeCollection(PaymentType::all());
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
          'payment_type' => 'required|alpha',


        ]);


        $prop = new PaymentType();
        $prop->payment_type = $request->payment_type;



        $prop->save();

        return response()->json('success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $prop = PaymentType::find($id);

        return response()->json($prop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $prop = PaymentType::find($id);
        $prop->payment_type = $request->payment_type;



        $prop->save();

        return redirect('/payment_type')->with('success', 'PaymentType  has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prop = PaymentType::find($id);
        $prop->delete();
        return response()->json("Succesfully deleted");
    }
}
