<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{

    protected $guarded = ['id'];
/*  
    Deklarasi table yang akan digunakan agar laravel tidak mencari tabel yg pake nama jamak
    protected $table = 'casts';  
    
    protected $guarded = ['id'];                Tidak dapat diinputkan user
    protected $fillable = ['title','body'];     Dapat diinputkan
    
*/

    public function role()
    {
        return $this->hasMany('App\Role');
    }

}
