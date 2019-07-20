<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $post = Biodata::all();
        return view ('biodata.index', compact('post'));
    }
    // Detail = method
    public function detail($id){      
        $post = Biodata::findOrFail($id);
        return view ('biodata.show', compact('post'));
    }
}
