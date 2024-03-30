<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'KAT001', 'kategori_nama' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT002', 'kategori_nama' => 'Fashion', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT003', 'kategori_nama' => 'Alat Rumah Tangga', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT004', 'kategori_nama' => 'Otomotif', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KAT005', 'kategori_nama' => 'Olahraga', 'created_at' => now(), 'updated_at' => now()],
            
        ];

        DB::table('m_kategori')->insert($data);
    }
}
