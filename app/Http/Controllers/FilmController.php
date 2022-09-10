<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Genre;
use App\Role;
use App\Film;
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
        $film = Film::all(); 
        return view('Film.index', compact('film')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rating = Rating::all(); 
        $genre = Genre::all(); 
        
        return view('Film.create', compact('genre','rating')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 /*       $casts_arr = explode(',', $request["casts"]);
     
        $cast_ids = [];
        foreach($casts_arr as $cast_name){
            $cast = Cast::where("nama", $cast_name)->first();
            if($cast) {
                $cast_ids[] = $cast->id;
            } else {
                $new_cast = Cast::create(["nama" => $cast_name]);
                $cast_ids[] = $new_cast->id;
            }
        }
                $film->casts()->sync($cast_ids);
*/
        $imageName = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('image'), $imageName);

        $film = Film::create([
            'judul' => $request['judul'],
            'ringkasan' => $request['ringkasan'],
            'tahun' => $request['tahun'],
            'poster' => $imageName,
            'genre_id' => $request['genre_id'],
        ]);
  
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
        $rating = Rating::all(); 
        $film = Film::find($id);
        return view('Film.edit', compact('film','genre', 'rating'));
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