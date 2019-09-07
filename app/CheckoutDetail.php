<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckoutDetail extends Model
{
    //
    public function check(){
      return $this->hasMany(Checkout::class,'served_by');

    }
}
