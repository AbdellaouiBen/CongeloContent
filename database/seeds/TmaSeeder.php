<?php

use Illuminate\Database\Seeder;

class TmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tmas')->insert([
            'categorie' => 'Un',
        ]); 
        DB::table('tmas')->insert([
            'categorie' => 'Deux',
        ]); 
        DB::table('tmas')->insert([
            'categorie' => 'Trois',
        ]); 
        DB::table('tmas')->insert([
            'categorie' => 'Quatre',
        ]); 
        DB::table('tmas')->insert([
            'categorie' => 'Cinq',
        ]); 
        DB::table('tmas')->insert([
            'categorie' => 'Six',
        ]);     
    }
}
