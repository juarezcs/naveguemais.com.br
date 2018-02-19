<?php

use Illuminate\Database\Seeder;
use App\Models\All\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'genre' => 'Masculino',
            'description' => 'Masculino'
        ]);
        
        Genre::create([
            'genre' => 'Feminino',
            'description' => 'Feminino'
        ]);
    }
}
