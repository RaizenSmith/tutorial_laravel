<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
    protected $table = 'hobis';
    protected $filliable = ['hobi'];
    /* |=======================================================================
     * |Relasi Many to-Many                                                   |
     * |======================================================================|
     * |Buat function bersama mahasiswa(), dimana model'hobi'                 | 
     * |memiliki relasi Many-to-Many (belongsToMany) terhadap                 |
     * |model'Mahasiswa' yang terhubung oleh tabel 'mahasiswa hobi'           |
     * |masing masing sebagai 'id_hobi' dan 'id_mahasiswa'                    |
     * =================================0=======================================
    */ 
    public function mahasiswa()
    {
        return $this->belongsToMany('App\Mahasiswa','mahasiswa_hobi',
        'id_hobi','id_mahasiswa');
    }
}
