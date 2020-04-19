<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pa extends Model
{
    public  function  tiroir(){
        return  $this->belongsTo('App\Tpa','tiroir_id');
    }
}
