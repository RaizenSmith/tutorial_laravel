<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tambah = [
            ['title'=>'Tips Cepat Coding','content'=>'Lorem Ipsum'],
            ['title'=>'Haruskah menunda tugas?','content'=>'Lorem Ipsum'],
            ['title'=>'Membangun Visi Misi','content'=>'Lorem Ipsum']
        ];
        DB::table('posts')->insert($tambah);
    }
}
