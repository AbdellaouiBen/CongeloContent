<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ma extends Model
{
    public  function  tiroir(){
        return  $this->belongsTo('App\Tma','tiroir_id');
    }
    
}
