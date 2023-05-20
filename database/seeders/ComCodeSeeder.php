<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ComCode;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'TIKET_ST_01', 'code_nm' => 'Open', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'TIKET_ST_02', 'code_nm' => 'Review Irban', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'TIKET_ST_03', 'code_nm' => 'Review Sekretaris', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'TIKET_ST_04', 'code_nm' => 'Review Inspektur', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'TIKET_ST_05', 'code_nm' => 'Closed', 'code_group' => 'TIKET_ST', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}