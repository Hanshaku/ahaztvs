<?php

namespace App\Http\Controllers;

use App\Cast;
use Illuminate\Http\Request;
use DB;

class CastController extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth')->except(['index', 'show']); // only
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     
    {// Collection - Pembungkus dalam sebuah array agar dpt menggunakan bnyk fitur function
        $cast = Cast::all(); // Model::Select * From Casts
        return view('Cast.index', compact('cast')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cast.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',       // Memvalidasi data nama berisikan inputan / tidak pd form
    		'umur' => 'required',       // $message alert danger
            'bio' => 'required'
    	]);
 
        Cast::create([
    		'nama' => $request->nama,   // Mengirimkan data 'nama' berisikan inputan dr nama kedalam DB
    		'umur' => $request->umur,
            'bio' => $request->bio
    	]);
 
    	return redirect('/cast');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  //Atau merubah parameter $id dgn memakai nama class 
    public function show($id)   //  (Cast $cast) - "Key Cast" => "value key $cast"
    {                           //         v
        $cast = Cast::find($id);//compact('cast')  -> sehingga line cari($id) dapat dihapus penggunaannya
        return view('Cast.show',  compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  //Atau merubah parameter $id dgn memakai nama class 
    public function edit($id)   //  (Cast $cast)
    {                           //          v
        $cast = Cast::find($id);//compact('cast') -> sehingga line cari($id) dapat dihapus penggunaannya
        return view('Cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  //Atau merubah parameter $id dgn memakai nama class 
    public function update($id, Request $request) //  (Cast $cast)
    {
       $request->validate([
            'nama' => 'required|unique:casts',  // casts merupakan tabel pd DB
            'umur' => 'required',
            'bio' => 'required'
       ]);

       $cast = Cast::find($id); // sehingga line cari($id) dapat dihapus penggunaannya
       $cast->nama = $request->nama;    // Mengupdate data 'nama' berisikan inputan dr nama kedalam DB 
       $cast->umur = $request->umur;    // berdasarkan find($id) atau sqlnya where id = $id
       $cast->bio = $request->bio;
       $cast->update();
       return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ //Atau merubah parameter $id dgn memakai nama class 
    public function destroy($id) //  (Cast $cast)
    {
        $cast = Cast::find($id); // sehingga line cari($id) dapat dihapus penggunaannya
        $cast->delete();
        return redirect('/cast');

    }
}
