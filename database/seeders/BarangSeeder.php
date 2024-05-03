<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'namaBarang' => 'TV',
                'hargaBarang' => '1000000',
                'deskripsiBarang' => 'TV dengan layar touchscreen',
                'satuan_id' => 1

            ],
        ]);
    }
}
