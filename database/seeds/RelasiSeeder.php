<?php

use Illuminate\Database\Seeder;
use\App\Dosen;
use\App\Mahasiswa;
use\App\Wali;
use\App\hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')             ->delete();
        DB::table('mahasiswas')         ->delete();
        DB::table('walis')              ->delete();
        DB::table('hobis')              ->delete();
        DB::table('mahasiswa_hobi')     ->delete();


        // tambahkan data dosen
        $dosen = Dosen::create(array(
            'nama' => 'Yulianto',
            'nipd' => '1234567890'
        ));
        $this->command->info('Data dosen telah diisi!');

        // tambahkan data mahasiswa
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto rachmadi',
            'nim' => '1015015072',
            'id_dosen' => $dosen->id
        ));
        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar Mukarohmah',
            'nim' => '2015015072',
            'id_dosen' => $dosen->id
        ));
        $puji = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu Berkah Salamet',
            'nim' => '3015015072',
            'id_dosen' => $dosen->id
        ));
        $this->command->info('Data Mahasiswa telah diisi!');

        // tambahan data wali
        $aldo = Wali::create(array(
            'nama' => 'Aldo',
            'id_mahasiswa' => $novay->id
        ));
        $nurhadi = Wali::create(array(
            'nama' => 'Nurhadi',
            'id_mahasiswa' => $dije->id
        ));
        $dadang = Wali::create(array(
            'nama' => 'dadang',
            'id_mahasiswa' => $puji->id
        ));
        $this->command->info('Data Dosen telah diisi!');

        // isi tabel hobi
        $mandi = hobi::create(array('hobi'=>'Mandi Air'));
        $baca  = hobi::create(array('hobi'=>'Baca Buku'));

        // hubungkan mahasiswa dengan hobinya masing masing
        $novay->hobi()->attach($mandi->id);
        $novay->hobi()->attach($baca->id);
        $dije ->hobi()->attach($mandi->id);
        $puji ->hobi()->attach($baca->id);
    }
}
