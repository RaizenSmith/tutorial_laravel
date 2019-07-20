<?php

use Illuminate\Database\Seeder;

class Biodata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tambah = [
            ['nama'=>'Chandra','alamat'=>'Jalan Babakan Tarogong','sekolah'=>'SMK Assalaam','umur'=>'15'],
            ['nama'=>'Asep Sumpena','alamat'=>'Cikudapateuh','sekolah'=>'SMK Assalaam','umur'=>'17'],
            ['nama'=>'M Ridho A','alamat'=>'Cibaduyut','sekolah'=>'SMK Assalaam','umur'=>'15'],
            ['nama'=>'Bagas Islam Mahendra','alamat'=>'Bojong koneng Indah(BKI)','sekolah'=>'SMK Assalaam','umur'=>'16'],
            ['nama'=>'Reiynaldy H','alamat'=>'Cibaduyut','sekolah'=>'SMK Assalaam','umur'=>'17'],
        ];
        DB::table('biodata')->insert($tambah);
    }
}
