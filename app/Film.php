<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded = ['id'];


    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function rating()
    {
        return $this->belongsTo('App\Rating');
    }
}
