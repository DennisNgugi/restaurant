<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waiter extends Model
{
    //
    public function ref(){
      return $this->hasMany(ReferenceCode::class,'served_by');

    }
}
