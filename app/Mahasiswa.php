<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswas';

    // MASS ASSIGNMENT
    // Untuk membatasi atribut(field) yang boleh di isi
    protected $fillable = ['nama', 'nim', 'id_dosen'];
    
    // Method Dosen
    public function dosen()
    {
        return $this->belongsTo('App\Dosen', 'id_dosen');
    }

    // Method Wali
    public function wali()
    {
        return $this->hasOne('App\Wali', 'id_mahasiswa');
    }
    
    /* |=======================================================================
     * |Relasi Many to-Many                                                   |
     * |======================================================================|
     * |Buat function bersama hobi(), dimana model'Mahasiswa'                 |
     * |memiliki relasi Many-to-Many (belongsToMany) terhadap                 |
     * |model'hobi' yang terhubung oleh tabel 'mahasiswa hobi'                |
     * |masing masing sebagai 'id_mahasiswa' dan 'id_hobi'                    |
     * =================================0======================================
    */ 

    // Method Hobi
    public function hobi()
    {
        return $this->belongsToMany('App\hobi', 'mahasiswa_hobi','id_mahasiswa','id_hobi');
    }
}
