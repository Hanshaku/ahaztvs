<?php // php artisan make:controller nama_controllernya

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home(){
        return view('FormHTML.home');
    }
}
