<?php

namespace App\Http\Controllers;

use App\Cast;
use App\Film;
use App\Role;
use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cast = Cast::all(); 
        $genre = Genre::all(); 
        $role = Role::all(); 
        
        return view('Film.create', compact('genre','role','cast')); 
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role;


        $role->save();
    	return redirect('/role');
    }

}
