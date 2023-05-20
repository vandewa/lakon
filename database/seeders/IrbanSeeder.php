<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Irban;

class IrbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('com_codes')->truncate();
        $data = [
            [
                "id" => "1",
                "nama" => "IRBAN I",
                "bidang" => "Bidang Pengawasan Reformasi Birokrasi"
            ],
            [
                "id" => "2",
                "nama" => "IRBAN II",
                "bidang" => "Bidang Pengawasan Akuntabilitas Keuangan"
            ],
            [
                "id" => "3",
                "nama" => "IRBAN III",
                "bidang" => "Bidang Pengawasan Kinerja Perangkat Daerah"
            ],
            [
                "id" => "4",
                "nama" => "IRBAN IV",
                "bidang" => "Bidang Pengawasan Pemerintahan Daerah"
            ],
            [
                "id" => "5",
                "nama" => "IRBAN V",
                "bidang" => "Bidang Pengawasan Khusus"
            ]
        ];

        foreach ($data as $datum) {
            Irban::create($datum);
        }
    }
}