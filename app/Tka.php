<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tka extends Model
{
    public function article(){
        return  $this->hasMany('App\Ka','tiroir_id');
    }}
