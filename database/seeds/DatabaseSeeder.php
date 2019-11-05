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
        $this->call(SiswaTablerSeeder::class);
        // $this->call(NilaiSiswaTableSeeder::class);
    }
}
