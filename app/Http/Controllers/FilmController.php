<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Genre;
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
        $this->validate($request, [
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|image|mimes:jpeg,jpg,png,giv,svg|max:2048',
            'video' => 'required',
            'genre_id' => 'required',
            'rating_id' => 'required'
        ]);


        $imageName = time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('image'), $imageName);



        $film = new Film;

        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->poster = $imageName;
        $film->video = $request->video;
        $film->genre_id = $request->genre_id;
        $film->rating_id = $request->rating_id;

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
            // 'poster' => 'required|image|mimes:jpeg,jpg,png,giv,svg|max:2048',
            'video' => 'required',
            'genre_id' => 'required',
            'rating_id' => 'required'
        ]);


        $film = Film::find($id);

        if ($request->has('poster')) {
            $imageName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('image'), $imageName);

            // $film = new Film;
            $file_path = public_path() . '/image/' . $film->poster;
            unlink($file_path);

            // $image_path = "/images/$request->poster";  // Value is not URL but directory file path
            // if (File::exists($image_path)) {
            //     File::delete($image_path);
            // }

            $film->judul = $request->judul;
            $film->ringkasan = $request->ringkasan;
            $film->tahun = $request->tahun;
            $film->poster = $imageName;          // ambil dri time()
            $film->video = $request->video;
            $film->genre_id = $request->genre_id;
            $film->rating_id = $request->rating_id;
        } else {
            $film->judul = $request->judul;
            $film->ringkasan = $request->ringkasan;
            $film->tahun = $request->tahun;
            $film->video = $request->video;
            $film->genre_id = $request->genre_id;
            $film->rating_id = $request->rating_id;
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
