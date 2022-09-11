<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {    // Model::Select * From Profile where user_id=yg sdg login;
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('Profile.index', compact('profile'));
        //  dd($profile); //vardump $profile - melihat property
    }

    public function update($id, Request $request) //  (Cast $cast)
    {
        $request->validate([
            'umur' => 'required',  // casts merupakan tabel pd DB
            'bio' => 'required',
            'alamat' => 'required'
        ]);

        $cast = Profile::find($id); // sehingga line cari($id) dapat dihapus penggunaannya
        $cast->umur = $request->umur;    // Mengupdate data 'nama' berisikan inputan dr nama kedalam DB 
        $cast->bio = $request->bio;    // berdasarkan find($id) atau sqlnya where id = $id
        $cast->alamat = $request->alamat;
        $cast->update();

        return redirect('/profile');
    }
}
