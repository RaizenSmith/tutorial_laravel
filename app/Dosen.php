<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table='dosens';

    // MASS ASSIGNMENT
    // Untuk membatasi atribut(field) yang boleh di isi
    protected $fillable = ['nama','nipd'];

    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa','id_dosen');
    }
}