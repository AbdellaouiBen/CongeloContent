<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tpa extends Model
{
    public function article(){
        return  $this->hasMany('App\Pa','tiroir_id');
    }}
