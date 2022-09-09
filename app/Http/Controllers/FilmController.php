<?php

namespace App\Http\Controllers;

use App\Film;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilmController extends Controller
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
    {
        $film = film::all(); 
        return view('Film.index', compact('film')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = genre::all(); 
        return view('Film.create', compact('genre')); 
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
    		'judul' => 'required',       
    		'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|image|mimes:jpeg,jpg,png,giv,svg|max:2048',
            'genre_id' => 'required'
    	]);
 
        $imageName = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('image'), $imageName);

        $film = new Film;

        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->poster = $imageName;
        $film->genre_id = $request->genre_id;

        $film->save();
    	return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id); 
        return view('Film.show',  compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::all(); 
        $film = Film::find($id);
        return view('Film.edit', compact('film','genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required', 
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|image|mimes:jpeg,jpg,png,giv,svg|max:2048',
            'genre_id' => 'required'
       ]);

       $film = Film::find($id); 
       
       if($request->has('poster'))
            {
                $imageName = time().'.'.$request->poster->extension();
                $request->poster->move(public_path('image'), $imageName);
        
                $film = new Film;

                $film->judul = $request->judul;
                $film->ringkasan = $request->ringkasan;
                $film->tahun = $request->tahun;
                $film->poster = $imageName;          // ambil dri time()
                $film->genre_id = $request->genre_id;
            } else{
                $film->judul = $request->judul;
                $film->ringkasan = $request->ringkasan;
                $film->tahun = $request->tahun;
                $film->genre_id = $request->genre_id;
                }
            
        $film->save();
        return redirect('/film');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     
    public function destroy($id)
    {
        $film = Film::find($id); 
        $film->delete();
        return redirect('/film');
    }
}
