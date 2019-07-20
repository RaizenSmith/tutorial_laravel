<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hobi;
use Session;

class HobiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = hobi::all();
        return view('hobi.index',compact('hobi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hobi = new hobi();
        $hobi->hobi = $request->hobi;
        $hobi->save();
        Session::flash("flash_notification",[
            "level"   => "success",
            "message" => "Berhasil menyimpan
            <b>$hobi->hobi</b>"
        ]);
        return redirect()->route('hobi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hobi = hobi::findOrFail($id);
        return view('hobi.show',compact('hobi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi = hobi::findOrFail($id);
        return view('hobi.edit',compact('hobi'));
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
        $hobi = hobi::findOrFail($id);
        $hobi->hobi = $request->hobi;
        $hobi->save();
        Session::flash("flash_notification",[
            "level"   => "warning",
            "message" => "Berhasil mengedit <b>$hobi->hobi</b>"
        ]);
        return redirect()->route('hobi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobi = hobi::findOrFail($id)->delete();
        Session::flash("flash_notification",[
            "level"   => "success",
            "message" => "data berhasil di hapus"
        ]);
        return redirect()->route('hobi.index');
    
    }
}
