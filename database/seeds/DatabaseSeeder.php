<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PostSeeder::class);
        // $this->call(Biodata::class);
        // $this->call(PostGuru::class);
        $this->call(RelasiSeeder::class);
    }
}
