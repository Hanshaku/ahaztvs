<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function cast()
    {   
        return $this->belongsTo('App\Cast');
    }   

    public function film()
    {   
        return $this->belongsTo('App\Film');
    }  
}

