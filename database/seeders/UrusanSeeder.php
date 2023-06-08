<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Urusan;

class UrusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('urusans')->truncate();
        $data = [
            [
                "id" => "1",
                "nama" => "PMPRB",
                "irban_id" => "1"
            ],
            [
                "id" => "2",
                "nama" => "PMPZI",
                "irban_id" => "1"
            ],
            [
                "id" => "3",
                "nama" => "SPIP",
                "irban_id" => "1"
            ],
            [
                "id" => "4",
                "nama" => "SPI",
                "irban_id" => "1"
            ],
            [
                "id" => "5",
                "nama" => "LHKPN/LHKASN",
                "irban_id" => "1"
            ],
            [
                "id" => "6",
                "nama" => "GRATIFIKASI",
                "irban_id" => "1"
            ],
            [
                "id" => "7",
                "nama" => "MCP KORSUPGAH",
                "irban_id" => "1"
            ],
            [
                "id" => "8",
                "nama" => "OPTIMALISASI PENDAPATAN (PAJAK, RETRIBUSI)",
                "irban_id" => "2"
            ],
            [
                "id" => "9",
                "nama" => "HIBAH",
                "irban_id" => "2"
            ],
            [
                "id" => "10",
                "nama" => "BANSOS",
                "irban_id" => "2"
            ],
            [
                "id" => "11",
                "nama" => "REVIU SSH",
                "irban_id" => "2"
            ],
            [
                "id" => "12",
                "nama" => "HSPK",
                "irban_id" => "2"
            ],
            [
                "id" => "13",
                "nama" => "ASB",
                "irban_id" => "2"
            ],
            [
                "id" => "14",
                "nama" => "DAK",
                "irban_id" => "2"
            ],
            [
                "id" => "15",
                "nama" => "LKPD",
                "irban_id" => "2"
            ],
            [
                "id" => "16",
                "nama" => "LKD",
                "irban_id" => "2"
            ],
            [
                "id" => "17",
                "nama" => "KUA PPAS",
                "irban_id" => "2"
            ],
            [
                "id" => "18",
                "nama" => "RKA",
                "irban_id" => "2"
            ],
            [
                "id" => "19",
                "nama" => "BLUD",
                "irban_id" => "3"
            ],
            [
                "id" => "20",
                "nama" => "BUMD",
                "irban_id" => "3"
            ],
            [
                "id" => "21",
                "nama" => "SEKOLAH/BOS",
                "irban_id" => "3"
            ],
            [
                "id" => "22",
                "nama" => "PELAYANAN PUBLIK",
                "irban_id" => "3"
            ],
            [
                "id" => "23",
                "nama" => "PEMERINTAHAN DESA",
                "irban_id" => "3"
            ],
            [
                "id" => "24",
                "nama" => "SAKIP",
                "irban_id" => "3"
            ],
            [
                "id" => "25",
                "nama" => "PBJ",
                "irban_id" => "3"
            ],
            [
                "id" => "26",
                "nama" => "REVIU PERIJINAN",
                "irban_id" => "4"
            ],
            [
                "id" => "27",
                "nama" => "REVIU NON-PERIJINAN",
                "irban_id" => "4"
            ],
            [
                "id" => "28",
                "nama" => "REVIU RPJP",
                "irban_id" => "4"
            ],
            [
                "id" => "29",
                "nama" => "REVIU RPJMD",
                "irban_id" => "4"
            ],
            [
                "id" => "30",
                "nama" => "REVIU RKPD",
                "irban_id" => "4"
            ],
            [
                "id" => "31",
                "nama" => "REVIU RENJA OPD",
                "irban_id" => "4"
            ],
            [
                "id" => "32",
                "nama" => "REVIU LPPD",
                "irban_id" => "4"
            ],
            [
                "id" => "33",
                "nama" => "REVIU LKPPD",
                "irban_id" => "4"
            ],
            [
                "id" => "34",
                "nama" => "EVALUASI GENDER",
                "irban_id" => "4"
            ],
            [
                "id" => "35",
                "nama" => "SPM-NSPK",
                "irban_id" => "4"
            ],
            [
                "id" => "36",
                "nama" => "PDTT",
                "irban_id" => "5"
            ],
            [
                "id" => "37",
                "nama" => "PROBITY AUDIT",
                "irban_id" => "5"
            ],
            [
                "id" => "38",
                "nama" => "REVIU HPS",
                "irban_id" => "5"
            ],
            [
                "id" => "39",
                "nama" => "ADUAN MASYARAKAT/RIKSUS",
                "irban_id" => "5"
            ],
            [
                "id" => "40",
                "nama" => "SABERPUNGLI",
                "irban_id" => "5"
            ]
        ];

        foreach ($data as $datum) {
            Urusan::create($datum);
        }
    }
}