<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Rating;

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
    { // Collection - Pembungkus dalam sebuah array agar dpt menggunakan bnyk fitur function
        $genres = Genre::all(); // Model::Select * From Genres
        return view('Genre.index', compact('genres'));
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
        $this->validate($request, [
            'nama' => 'required'       // Memvalidasi data nama berisikan inputan / tidak pd form
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
     */  
    public function show($id)   
    {   $ratings = Rating::find($id); 
        $genres = Genre::find($id); 
        return view('Genre.show',  compact('genres','ratings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function edit($id)   
    {                           
        $genre = Genre::find($id); 
        return view('Genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function update($id, Request $request) 
    {
        $request->validate([
            'nama' => 'required'  
        ]);

        $genre = Genre::find($id); 
        $genre->nama = $request->nama;   
    

        $genre->update();
        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function destroy($id)
    {
        $genre = Genre::find($id); 
        $genre->delete();
        return redirect('/genre');
    }
}
