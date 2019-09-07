<?php

namespace App\Http\Controllers;
use App\Http\Resources\WaiterCollection;

use App\Waiter;
use Illuminate\Http\Request;
use Image;
use Storage;

class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new WaiterCollection(Waiter::all());

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
          'name' => 'required',
          'phone' => 'required',


        ]);


        $prop = new Waiter();
        $prop->waiters_name = $request->name;

        $prop->phone_number = $request->phone;

          $prop->email = $request->email;



        $prop->save();

        return response()->json('success');
          }

    /**
     * Display the specified resource.
     *
     * @param  \App\Waiter  $Waiter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Waiter  $Waiter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $prop = Waiter::find($id);

        return response()->json($prop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Waiter  $Waiter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


              $prop = Waiter::find($id);
              $prop->waiters_name = $request->name;

              $prop->phone_number = $request->phone;

                $prop->email = $request->email;



              $prop->save();

              return redirect('/waiter')->with('success', 'Waiter  has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Waiter  $Waiter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prop = Waiter::find($id);
        $prop->delete();
        return response()->json("Succesfully deleted");

        //

    }
}
