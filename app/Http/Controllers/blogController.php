<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class blogController extends Controller
	{
   public function index(){
        //fetch all posts data
        $posts = Post::orderBy('created','desc')->get();
        
        //pass posts data to view and load list view
        return view('resto.blog', ['posts' => $posts]);
    }
    
    public function details($id){
        //fetch post data
        $post = Post::find($id);
        
        //pass posts data to view and load list view
        return view('resto.details', ['post' => $post]);
    }
    
}