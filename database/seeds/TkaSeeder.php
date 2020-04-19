<?php

use Illuminate\Database\Seeder;

class TkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tkas')->insert([
            'categorie' => 'Un',
        ]); 
        DB::table('tkas')->insert([
            'categorie' => 'Deux',
        ]); 
        DB::table('tkas')->insert([
            'categorie' => 'Trois',
        ]); 
        DB::table('tkas')->insert([
            'categorie' => 'Quatre',
        ]); 
        DB::table('tkas')->insert([
            'categorie' => 'Cinq',
        ]); 
        DB::table('tkas')->insert([
            'categorie' => 'Six',
        ]); 
    }
}
