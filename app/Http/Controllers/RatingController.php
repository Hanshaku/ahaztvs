<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
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
        $ratings = Rating::all();
        return view('Rating.index', compact('ratings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rating.create');
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
            'nama' => 'required|unique:ratings',
            'keterangan' => 'required'

        ]);

        Rating::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan

        ]);

        return redirect('/rating');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show($id)
    {
        $genres = Genre::find($id);
        $ratings = Rating::find($id);
        return view('Rating.show',  compact('ratings', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rating = Rating::find($id);
        return view('Rating.edit', compact('rating'));
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
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $rating = Rating::find($id); // sehingga line cari($id) dapat dihapus penggunaannya
        $rating->nama = $request->nama;    // Mengupdate data 'nama' berisikan inputan dr nama kedalam DB 
        $rating->keterangan = $request->keterangan;

        $rating->update();
        return redirect('/rating');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rating = Rating::find($id);
        $rating->delete();
        return redirect('/rating');
    }
}
