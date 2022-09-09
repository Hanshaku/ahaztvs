<?php // php artisan make:controller nama_controllernya

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function form(){
        return view('FormHTML.register');
    }

    public function page(Request $name){
       // dd($kirim->all())
       $fname = $name['fname'];
       $lname = $name['lname'];
       return view('FormHTML.welcome', compact('fname','lname'));
    }
}
