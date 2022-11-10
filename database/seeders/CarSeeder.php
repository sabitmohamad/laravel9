<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 4, 'name' => 'Ambulance', 'tarif' => 5, 'img_url' => 'https://alfathambulance.com/wp-content/uploads/2022/04/Ini-Merk-Mobil-yang-Bagus-Digunakan-untuk-Ambulance.jpeg', 'durasi' => '2023-01-01', 'status' => 0],
            ['id' => 5, 'name' => 'Angkot', 'tarif' => 1000, 'img_url' => 'https://awsimages.detik.net.id/community/media/visual/2022/04/01/keluh-kesah-sopir-angkot-saat-pertalite-langka-di-bandung-2_43.jpeg?w=700&q=90', 'durasi' => '2023-01-02', 'status' => 0]
        ];
        DB::table('cars')->insert($data);
    }
}
