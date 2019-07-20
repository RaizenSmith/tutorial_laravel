<?php

use Illuminate\Database\Seeder;

class PostGuru extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tambah = [
            ['NIP'=>'010001','Nama'=>'Pak Asep','Jabatan'=>'Guru PAI','Alamat'=>'Cibaduyut'],
            ['NIP'=>'010002','Nama'=>'Pak Wildan','Jabatan'=>'Guru PAI','Alamat'=>'Soreang'],
            ['NIP'=>'010003','Nama'=>'Kang Candra','Jabatan'=>'Guru PAI','Alamat'=>'Tegal'],
            ['NIP'=>'010004','Nama'=>'Miss Yanti ','Jabatan'=>'Guru PAI','Alamat'=>'Soreang'],
            ['NIP'=>'010005','Nama'=>'Pak Sofwan','Jabatan'=>'Guru PAI','Alamat'=>'Baleendah']
        ];
        DB::table('gurus')->insert($tambah);
    }
}
