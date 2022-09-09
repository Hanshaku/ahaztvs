<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
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
        $genre = Genre::all(); 
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
    		'nama' => 'required'       
    	]);
 
        Genre::create([
    		'nama' => $request->nama,  
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
    {                           
        $genre = Genre::find($id);
        return view('Genre.show',  compact('genre'));
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
            'nama' => 'required|unique:genres'  

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
