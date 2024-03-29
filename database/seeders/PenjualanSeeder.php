<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Pelanggan 1', 'penjualan_kode' => 'PJ001', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Pelanggan 2', 'penjualan_kode' => 'PJ002', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Pelanggan 3', 'penjualan_kode' => 'PJ003', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Pelanggan 4', 'penjualan_kode' => 'PJ004', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'Pelanggan 5', 'penjualan_kode' => 'PJ005', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Pelanggan 6', 'penjualan_kode' => 'PJ006', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Pelanggan 7', 'penjualan_kode' => 'PJ007', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'Pelanggan 8', 'penjualan_kode' => 'PJ008', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Pelanggan 9', 'penjualan_kode' => 'PJ009', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Pelanggan 10', 'penjualan_kode' => 'PJ010', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
