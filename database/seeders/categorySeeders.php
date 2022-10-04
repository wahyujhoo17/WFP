<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['Analgesik Narkotik', 'Analgesik Non Narkotik', 'Antipirai', 'Nyeri Neuropatik','Anestetik Lokal'
        , 'Anestetik Umum dan Oksigen', 'Obat untuk Prosedur Pre Operatif', 'Antialergi dan Obat untuk Anafilaksis'
        , 'Khusus', 'Umum', 'Antiepilepsi - Antikonvulsi'];
        foreach($arr as $c) {
            DB::table('categories')->insert([
                'nama'=>$c
            ]);
        }
    }
}
