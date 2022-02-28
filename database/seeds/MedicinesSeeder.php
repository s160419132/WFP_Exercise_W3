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
            'Generic_Name'=> 'fentanil',
            'Form'=>'inj 0,05 mg/mL (i.m./i.v.)',
            'Restricio_Formula'=>'5 amp/kasus.',
            'Description'=>'Hanya untuk nyeri berat dan
            harus diberikan oleh tim medis
            yang dapat melakukan
            resusitasi.',
            'category_id'=>1,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>10000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'fentanil',
            'Form'=>'patch 25 mcg/jam',
            'Restricio_Formula'=>'10 patch/bulan',
            'Description'=>'Untuk nyeri kronik pada
            pasien kanker yang tidak
            terkendali,Tidak untuk nyeri akut.',
            'category_id'=>1,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>15000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'fentanil',
            'Form'=>'tab lepas lambat 8 mg',
            'Restricio_Formula'=>'30 tab/bulan',
            'Description'=>'-',
            'category_id'=>1,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>15000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'asam mefenamat',
            'Form'=>'kaps 250 mg',
            'Restricio_Formula'=>'30 kaps/bulan.',
            'Description'=>'-',
            'category_id'=>2,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>20000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'asam mefenamat',
            'Form'=>'tab 500 mg',
            'Restricio_Formula'=>'30 tab/bulan',
            'Description'=>'-',
            'category_id'=>2,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>16000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'ketoprofen',
            'Form'=>'sup 100 mg',
            'Restricio_Formula'=>'2 sup/hari, maks 3 hari.',
            'Description'=>'Untuk nyeri sedang sampai
            berat pada pasien yang tidak dapat menggunakan analgesik
            secara oral.',
            'category_id'=>2,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>7000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'alopurinol',
            'Form'=>'tab 300 mg',
            'Restricio_Formula'=>'30 tab/bulan',
            'Description'=>'Tidak diberikan pada saat nyeri akut.',
            'category_id'=>3,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>18000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'kolkisin',
            'Form'=>'tab 500 mcg',
            'Restricio_Formula'=>'30 tab/bulan',
            'Description'=>'-',
            'category_id'=>3,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>23000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'probenesid',
            'Form'=>'tab 500 mg',
            'Restricio_Formula'=>'30 tab/bulan.',
            'Description'=>'-',
            'category_id'=>3,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>5000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'amitriptilin',
            'Form'=>'tab 25 mg',
            'Restricio_Formula'=>'30 tab/bulan',
            'Description'=>'-',
            'category_id'=>4,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>17000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'gabapentin',
            'Form'=>'kaps 100 mg',
            'Restricio_Formula'=>'60 kaps/bulan.',
            'Description'=>'Hanya untuk neuralgia pascaherpes
            atau nyeri neuropati diabetikum.',
            'category_id'=>4,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>23000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'karbamazepin',
            'Form'=>'tab 100 mg',
            'Restricio_Formula'=>'60 tab/bulan.',
            'Description'=>'Hanya untuk neuralgia trigeminal.',
            'category_id'=>4,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>27000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'bupivakain',
            'Form'=>'inj 0,5%',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>5,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>24000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'bupivakain heavy',
            'Form'=>'inj 0,5% + glukosa 8%',
            'Restricio_Formula'=>'-',
            'Description'=>'Khusus untuk analgesia spinal',
            'category_id'=>5,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>23000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'lidokain',
            'Form'=>'inj 2%',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>5,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>8000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'deksmedetomidin',
            'Form'=>'inj 100 mcg/mL',
            'Restricio_Formula'=>'-',
            'Description'=>'Untuk sedasi pada pasien di ICU,
            kraniotomi, bedah jantung dan
            operasi yang memerlukan waktu
            pembedahan yang lama.',
            'category_id'=>6,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>21000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'halotan',
            'Form'=>'ih',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>6,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>14000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'ketamin',
            'Form'=>'inj 50 mg/mL (i.v.) ',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>6,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>5000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'atropin',
            'Form'=>'inj 0,25 mg/mL (i.v./s.k.)',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>7,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>11000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'midazolam',
            'Form'=>'ih',
            'Restricio_Formula'=>'Dosis rumatan: 1 mg/jam (24 mg/hari),Dosis premedikasi:8 vial/kasus.',
            'Description'=>'Dapat digunakan untuk premedikasi
            sebelum induksi anestesi dan
            rumatan selama anestesi umum.',
            'category_id'=>7,
            'Faskes_1'=>0,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>17000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'diazepam',
            'Form'=>'inj 5 mg/mL',
            'Restricio_Formula'=>'-',
            'Description'=>'-',
            'category_id'=>7,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>19000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'deksametason',
            'Form'=>'inj 5 mg/mL',
            'Restricio_Formula'=>'20 mg/hari.',
            'Description'=>'-',
            'category_id'=>8,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>13000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'difenhidramin',
            'Form'=>'inj 10 mg/mL (i.v./i.m.)',
            'Restricio_Formula'=>'30 mg/hari.',
            'Description'=>'-',
            'category_id'=>8,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>19000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'klorfeniramin',
            'Form'=>'tab 4 mg',
            'Restricio_Formula'=>'3 tab/hari, maks 5
            hari.',
            'Description'=>'-',
            'category_id'=>8,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>19000
        ]);

        DB::table('medicines')->insert([
            'Generic_Name'=> 'diazepam',
            'Form'=>'inj 5 mg/mL',
            'Restricio_Formula'=>'10 amp/kasus,
            kecuali untuk kasus di ICU.',
            'Description'=>'Tidak untuk i.m.',
            'category_id'=>9,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>16000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'fenitoin',
            'Form'=>'inj 50 mg/mL',
            'Restricio_Formula'=>'Untuk status
            epileptikus, dapat
            diberikan hingga
            dosis 15 - 30
            mg/kgBB di Faskes
            Tk. 2 dan 3.',
            'Description'=>'Dapat digunakan untuk status
            konvulsivus',
            'category_id'=>9,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>18000
        ]);
        DB::table('medicines')->insert([
            'Generic_Name'=> 'fenobarbital',
            'Form'=>'tab 30 mg',
            'Restricio_Formula'=>'120 tab/bulan.',
            'Description'=>'-',
            'category_id'=>9,
            'Faskes_1'=>1,
            'Faskes_2'=>1,
            'Faskes_3'=>1,
            'price'=>29000
        ]);

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
