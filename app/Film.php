<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['judul','ringkasan', 'tahun', 'poster', 'genre_id' ];

    public function genre()
    {   
        return $this->belongsTo('App\Genre');
    }  

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function role()
    {
        return $this->hasMany('App\Role');
    }
}
