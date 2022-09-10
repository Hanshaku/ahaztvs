<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function __construct()
    { //Memasang pengecualian middleware route index & show pd Controller
        $this->middleware('auth')->except(['index', 'show']); // only
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     
    {// Collection - Pembungkus dalam sebuah array agar dpt menggunakan bnyk fitur function
        $genre = Genre::all(); // Model::Select * From Genres
        return view('Genre.index', compact('genre')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Genre.create'); 
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
    		'nama' => 'required|unique:genres'       // Memvalidasi data nama berisikan inputan / tidak pd form
    	]);
 
        Genre::create([
    		'nama' => $request->nama,  // Mengirimkan data 'nama' berisikan inputan dr nama kedalam DB
    	]);
 
    	return redirect('/genre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  //Atau merubah parameter $id dgn memakai nama class 
    public function show($id)   //  (Genre $genre) - "Key Genre" => "value key $genre"
    {                           //         v
        $genre = Genre::find($id);//compact('genre')  -> sehingga line cari($id) dapat dihapus penggunaannya
        return view('Genre.show',  compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  //Atau merubah parameter $id dgn memakai nama class 
    public function edit($id)   //  (Genre $genre)
    {                           //          v
        $genre = Genre::find($id);//compact('genre') -> sehingga line cari($id) dapat dihapus penggunaannya
        return view('Genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  //Atau merubah parameter $id dgn memakai nama class 
    public function update($id, Request $request) //  (Genre $genre)
    {
       $request->validate([
            'nama' => 'required|unique:genres'  // genres merupakan tabel pd DB

       ]);

       $genre = Genre::find($id); // sehingga line cari($id) dapat dihapus penggunaannya
       $genre->nama = $request->nama;    // Mengupdate data 'nama' berisikan inputan dr nama kedalam DB 
                                         // berdasarkan find($id) atau sqlnya where id = $id

       $genre->update();
       return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ //Atau merubah parameter $id dgn memakai nama class 
    public function destroy($id) //  (Genre $genre)
    {
        $genre = Genre::find($id); // sehingga line cari($id) dapat dihapus penggunaannya
        $genre->delete();
        return redirect('/genre');

    }
}
