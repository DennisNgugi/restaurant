<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    public function reference(){

      return $this->belongsTo(ReferenceCode::class,'reference_id');
    }
    public function wait(){
      return $this->belongsTo(Waiter::class,'served_by');

    }
}
