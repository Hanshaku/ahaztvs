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

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function roles()
    {
        return $this->hasMany('App\Role');
    }
}
