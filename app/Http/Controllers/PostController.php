<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $post = Post::all();
        return view ('post.index', compact('post'));
    }
    public function detail($id){
        $post = Post::findOrFail($id);
        return view ('post.show', compact('post'));
    }
}