<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'E001', 'barang_nama' => 'Laptop', 'harga_beli' => 8000000, 'harga_jual' => 10000000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => 'P001', 'barang_nama' => 'Kemeja', 'harga_beli' => 500000, 'harga_jual' => 700000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => 'ART001', 'barang_nama' => 'Panci', 'harga_beli' => 200000, 'harga_jual' => 300000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => 'B001', 'barang_nama' => 'Buku Fiksi', 'harga_beli' => 80000, 'harga_jual' => 120000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => 'T001', 'barang_nama' => 'Boneka', 'harga_beli' => 50000, 'harga_jual' => 80000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'E002', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 4000000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'P002', 'barang_nama' => 'Jeans', 'harga_beli' => 600000, 'harga_jual' => 800000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'ART002', 'barang_nama' => 'Blender', 'harga_beli' => 250000, 'harga_jual' => 350000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'B002', 'barang_nama' => 'Buku Non-Fiksi', 'harga_beli' => 70000, 'harga_jual' => 100000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'T002', 'barang_nama' => 'Action Figure', 'harga_beli' => 75000, 'harga_jual' => 100000, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('m_barang')->insert($data);
    }
}
