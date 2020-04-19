<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ka extends Model
{
    public  function  tiroir(){
        return  $this->belongsTo('App\Tka','tiroir_id');
    }
}
