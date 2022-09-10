<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = ['id'];

    public function films()
    {
        return $this->hasMany('App\Film'); 
    }
}
