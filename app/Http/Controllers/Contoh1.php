<?php

namespace belajarlaravel\Http\Controllers;

use Illuminate\Http\Request;

class Contoh1 extends Controller{

    public function index() {
        echo 'index';
    }

    public function create() {
        echo 'create';
    }

    public function store(Request $request) {
        echo 'store';
    }

    public function show($id) {
        echo 'show';
    }

    public function edit($id) {
        echo 'edit';
    }

    public function update(Request $request, $id) {
        echo 'update';
    }

    public function destroy($id) {
        echo 'destroy';
    }

}