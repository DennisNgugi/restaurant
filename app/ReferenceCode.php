<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferenceCode extends Model
{
    //
    public function checko(){
      return $this->hasMany(Checkout::class,'reference_id');
    }

    public function serve(){
      return $this->belongsTo(Waiter::class,'served_by');

    }
}


// ReferenceCode::with(['checko' => function($query){
//    $query->select(DB::raw('sum(total)'));
// }])->get();
