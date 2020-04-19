<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tma extends Model
{
    public function article(){
        return  $this->hasMany('App\Ma','tiroir_id');
    }
}
