<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'ELEC', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'FASH', 'kategori_nama' => 'Fashion'],
            ['kategori_kode' => 'FOOD', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'AUTO', 'kategori_nama' => 'Otomotif'],
            ['kategori_kode' => 'HOME', 'kategori_nama' => 'Peralatan Rumah'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
