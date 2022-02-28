<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'Generic_Name'=> 'albendazol',
            'Form'=>'tab 400 mg',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>10,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>18000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'mebendazol',
            'Form'=>'tab 100 mg',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>10,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>23000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'pirantel pamoat',
            'Form'=>'tab 125 mg',
            'Restricio_Formula'=>'120 tab/bulan.',
            'Description'=>'-',
            'category_id'=>10,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>5000
        ]);
    }
}
