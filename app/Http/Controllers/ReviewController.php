<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'content' => 'required' 
        ]);

        $review = new Review;

        $review->content = $request->content;
        $review->user_id = Auth::id();
        $review->film_id = $request->film_id;

        $review->save();
    	return redirect()->back();
    }
}
