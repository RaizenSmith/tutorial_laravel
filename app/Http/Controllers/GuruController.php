<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $post = Guru::all();
        return view ('guru.index', compact('post'));
    }
    public function detail($id){
        $post = Guru::findOrFail($id);
        return view ('guru.show', compact('post'));
    }
}