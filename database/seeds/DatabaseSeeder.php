<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EconomicActivityTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(YearTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(CompanyUserTableSeeder::class);
        
    }
}
