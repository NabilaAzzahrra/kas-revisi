<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlasifikasiUraianPengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('klasifikasi_uraian_pengeluaran')->insert([
            ['uraian_pengeluaran' => 'ES BATU', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
