<?php

use Illuminate\Database\Seeder;

class TpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tpas')->insert([
            'categorie' => 'Un',
        ]); 
        DB::table('tpas')->insert([
            'categorie' => 'Deux',
        ]); 
        DB::table('tpas')->insert([
            'categorie' => 'Trois',
        ]); 
        DB::table('tpas')->insert([
            'categorie' => 'Quatre',
        ]); 
        DB::table('tpas')->insert([
            'categorie' => 'Cinq',
        ]); 
        DB::table('tpas')->insert([
            'categorie' => 'Six',
        ]);     
        DB::table('tpas')->insert([
            'categorie' => 'Sept',
        ]); 
        DB::table('tpas')->insert([
            'categorie' => 'Huit',
        ]);     
    }
}
