<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "email" => "inspektorat@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Administrator"
        ]);
        $admin->assignRole('admin');

        $inspektur = User::create([
            "email" => "inspektur@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Inspektur"
        ]);
        $inspektur->assignRole('inspektur');

        $sekretaris = User::create([
            "email" => "sekretaris@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Sekretaris"
        ]);
        $sekretaris->assignRole('sekretaris');

        $irban1 = User::create([
            "email" => "irban1@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Irban I"
        ]);
        $irban1->assignRole('irban');

        $irban2 = User::create([
            "email" => "irban2@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Irban II"
        ]);
        $irban2->assignRole('irban');

        $irban3 = User::create([
            "email" => "irban3@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Irban III"
        ]);
        $irban3->assignRole('irban');

        $irban4 = User::create([
            "email" => "irban4@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Irban IV"
        ]);
        $irban4->assignRole('irban');

        $irban5 = User::create([
            "email" => "irban5@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Inspektorat",
            "name" => "Irban V"
        ]);
        $irban5->assignRole('irban');

        $opd = User::create([
            "email" => "pemerintahansetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Pemerintahan Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kesrasetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Kesejahteraan Rakyat Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "hukumsetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Hukum Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "perekonomiansetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Perekonomian dan Sumber Daya Alam Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "adbangsetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Administrasi Pembangunan Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pbjsetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Pengadaan Barang dan Jasa Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "umumsetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Umum Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "organisasisetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Organisasi Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "prokompimsetda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Bagian Protokol dan Komunikasi Pimpinan Sekretariat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "setwan@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Sekretariat Dewan Perwakilan Rakyat Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dikpora@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Pendidikan, Pemuda dan Olahraga",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dinkes@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Kesehatan",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dpupr@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Pekerjaan Umum dan Penataan Ruang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "disperkimhub@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Perumahan, Kawasan Permukiman dan Perhubungan",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dinsospmd@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Sosial, Pemberdayaan Masyarakat dan Desa",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dppkbpppa@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Pengendalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dispaperkan@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Pangan, Pertanian dan Perikanan",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dlh@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Lingkungan Hidup",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "disdukcapil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Kependudukan dan Pencatatan Sipil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "diskominfo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Komunikasi dan Informatika",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "disdagkopukm@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dpmptsp@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "disnakerintrans@wonosobokab.go.id ",
            "password" => bcrypt('password'),
            "opd" => "Dinas Tenaga Kerja, Perindustrian dan Transmigrasi",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "arpusda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Kearsipan dan Perpustakaan Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "disparbud@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Dinas Pariwisata dan Kebudayaan",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "satpolpp@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Satuan Polisi Pamong Praja",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bappeda@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Badan Perencanaan Pembangunan Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bppkad@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Badan Pengelolaan Pendapatan, Keuangan dan Aset Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bkd@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Badan Kepegawaian Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bpbd@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Badan Penanggulangan Bencana Daerah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bakesbangpol@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Badan Kesatuan Bangsa dan Politik",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "rsud@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Rumah Sakit Umum Daerah Setjonegoro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatanwonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatankertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatanselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatanleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatangarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatankejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatanmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatanwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatankalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatansapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatanwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecamatankalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kecamatan Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanwonosobobarat@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Wonosobo Barat Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanwonosobotimur@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Wonosobo Timur Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanjlamprang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Jlamprang Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankalianget@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kalianget Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankejiwan@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kejiwan Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankramatan@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kramatan Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanbumireso@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Bumireso Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanpagerkukuh@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Pagerkukuh Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanrojoimo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Rojoimo Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanjaraksari@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Jaraksari Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanmlipak@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Mlipak Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahansambek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Sambek Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahantawangsari@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Tawangsari Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jogoyitnanwonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jogoyitnan Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pancurweningwonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pancurwening Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sariyosowonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sariyoso Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tlogojatiwonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tlogojati Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonolelowonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonolelo Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonosariwonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonosari Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bomertowonosobo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bomerto Kec. Wonosobo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kertek Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanwringinanom@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Wringinanom Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "banjarkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Banjar Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bejiarumkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bejiarum Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bojasarikertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bojasari Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "candimulyokertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Candimulyo Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "candiyasankertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Candiyasan Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "damarkasiyankertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Damarkasiyan Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kapencarkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kapencar Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karangluhurkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karangluhur Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngadikusumankertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngadikusuman Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pagerejokertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pagerejo Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "purbosonokertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Purbosono Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "purwojatikertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Purwojati Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "recokertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Reco Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sindupatenkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sindupaten Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sudungdewokertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sudungdewo Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sumberdalemkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sumberdalem Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "surengedekertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Surengede Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tlogodalemkertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tlogodalem Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tlogomulyokertek@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tlogomulyo Kec. Kertek",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Selomerto Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanwonorejo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Wonorejo Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "adiwarnoselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Adiwarno Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "balekambangselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Balekambang Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bumitirtoselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bumitirto Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "candiselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Candi Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gunungtawangselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gunung Tawang Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kadipatenselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kadipaten Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalierangselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalierang Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kaliputihselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kaliputih Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karangrejoselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karangrejo Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kecisselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kecis Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "krasakselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Krasak Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngadimulyoselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngadimulyo Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pakuncenselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pakuncen Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "plobanganselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Plobangan Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "semayuselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Semayu Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sidorejoselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sidorejo Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "simbarejoselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Simbarejo Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sinduagungselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sinduagung Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sumberwulanselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sumberwulan Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tumenggunganselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tumenggungan Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wilayuselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wilayu Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wulungsariselomerto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wulungsari Kec. Selomerto",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Leksono Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "besanileksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Besani Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "durensawitleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Durensawit Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jlamprangleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jlamprang Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jonggolsarileksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jonggolsari Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalimendongleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalimendong Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lipursarileksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lipursari Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "manggisleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Manggis Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pacarmulyoleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pacarmulyo Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sawanganleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sawangan Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "selokromoleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Selokromo Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sojokertoleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sojokerto Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "timbangleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Timbang Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonokertoleksono@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonokerto Kec. Leksono",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahangarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Garung Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tegalsarigarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tegalsari Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sitiharjogarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sitiharjo Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sendangsarigarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sendangsari Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gemblengangarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gemblengan Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lengkonggarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lengkong Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kayugiyanggarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kayugiyang Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "siwurangarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Siwuran Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kuripangarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kuripan Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jengkolgarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jengkol Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tlogogarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tlogo Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "marongarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Maron Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "menjergarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Menjer Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "laranganlorgarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Larangan Lor Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mlandigarung@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mlandi Kec. Garung",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kejajar Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "campursarikejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Campursari Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sikunangkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sikunang Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sembungankejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sembungan Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "diengkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Dieng Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "patakbantengkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Patakbanteng Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jojogankejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jojogan Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "parikesitkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Parikesit Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tiengkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tieng Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "surengedekejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Surengede Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "igirmranakkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Igirmranak Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "serangkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Serang Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kreokejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kreo Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "buntukejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Buntu Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tambikejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tambi Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sigedangkejajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sigedang Kec. Kejajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanmudal@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Mudal Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanandongsili@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Andongsili Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankalibeber@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kalibeber Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "blederanmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Blederan Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bumirejomojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bumirejo Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "candirejomojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Candirejo Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "deroduwurmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Deroduwur Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "derongisormojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Derongisor Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gunturmadumojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gunturmadu Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kebrenganmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kebrengan Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kesenengmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Keseneng Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "krasakmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Krasak Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "larangankulonmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Larangan Kulon Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mojosarimojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mojosari Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "punganganmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pungangan Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "slukatanmojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Slukatan Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sojopuromojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sojopuro Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sukorejomojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sukorejo Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonokromomojotengah@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonokromo Kec. Mojotengah",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanwonoroto@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Wonoroto Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gumawangkidulwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gumawangkidul Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "banyukembarwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Banyukembar Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kuripanwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kuripan Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "limbanganwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Limbangan Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gondangwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gondang Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bumirosowatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bumiroso Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonorotowatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonoroto Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pasuruhanwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pasuruhan Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "watumalangwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Watumalang Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "binangunwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Binangun Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lumajangwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lumajang Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonokampirwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonokampir Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "krinjingwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Krinjing Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mutisariwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mutisari Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalideselwatumalang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalidesel Kec. Watumalang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kalikajar Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bowongsokalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bowongso Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "butuhkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Butuh Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "butuhkidulkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Butuhkidul Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalikuningkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalikuning Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karangduwurkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karangduwur Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kedalonkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kedalon Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kembarankalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kembaran Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kwadungankalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kwadungan Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lamukkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lamuk Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "maduretnokalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Maduretno Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mangunrejokalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mangunrejo Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mungkungkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mungkung Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "perbotokalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Perboto Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "purwojiwokalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Purwojiwo Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "rejosarikalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Rejosari Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "simbangkalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Simbang Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tegalombokalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tegalombo Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "wonosarikalikajar@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Wonosari Kec. Kalikajar",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahansapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Sapuran Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "banyumudalsapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Banyumudal Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "batursarisapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Batursari Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bogoransapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bogoran Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "glagahsapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Glagah Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jolontorosapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jolontoro Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karangsarisapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karangsari Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "marongsarisapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Marongsari Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngadikersosapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngadikerso Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngadisalamsapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngadisalam Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pecekelansapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pecekelan Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "rimpaksapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Rimpak Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sedayusapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sedayu Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "surojoyosapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Surojoyo Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "talunombosapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Talunombo Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tempuranduwursapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tempuranduwur Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tempursarisapuran@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tempursari Kec. Sapuran",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kepil Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "benerkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bener Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "berankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Beran Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "buratkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Burat Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gadingrejokepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gadingrejo Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gadingsukuhkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gadingsukuh Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gondowulankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gondowulan Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jangkrikankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jangkrikan Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kagungankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kagungan Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalipurukepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalipuru Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kaliwuluhkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kaliwuluh Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kapulogokepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kapulogo Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngaliankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngalian Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pulosarenkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pulosaren Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "randusarikepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Randusari Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "rejosarikepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Rejosari Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ropohkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ropoh Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tanjunganomkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tanjunganom Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tegalgotkepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tegalgot Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tegeswetankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tegeswetan Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "warangankepil@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Warangan Kec. Kepil",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Kaliwiro Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "bendungankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Bendungan Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "cledokkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Cledok Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gambarankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gambaran Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "grugukaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Grugu Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kaliguwokaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kaliguwo Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kaumankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kauman Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kemiriombokaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kemiriombo Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lamukkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lamuk Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lebakkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lebak Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "medonokaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Medono Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngadisonokaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngadisono Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngasinankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngasinan Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pesodongankaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pesodongan Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pucungkerepkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pucungkerep Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "purwosarikaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Purwosari Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "selomanikkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Selomanik Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sukorenokaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sukoreno Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tanjunganomkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tanjunganom Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tracapkaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tracap Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "winongsarikaliwiro@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Winongsari Kec. Kaliwiro",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kelurahanwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Kelurahan Wadaslintang Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "besukiwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Besuki Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "erorejowadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Erorejo Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gumerlarwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gumerlar Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalidadapwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalidadap Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kaligowongwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kaligowong Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karanganyarwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karanganyar Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kemejingwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kemejing Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "lancarwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Lancar Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "ngalianwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Ngalian Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "panerusanwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Panerusan Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "plunjaranwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Plunjaran Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "somogedewadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Somogede Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sumberejowadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sumberejo Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sumbersariwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sumbersari Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tiripwadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tirip Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "trimulyowadaslintang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Trimulyo Kec. Wadaslintang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kupangansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kupangan Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mergosarisukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mergosari Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sukoharjosukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sukoharjo Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "rogojatisukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Rogojati Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karanganyarsukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karanganyar Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "sempolsukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Sempol Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "plodongansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Plodongan Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "suroyudansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Suroyudan Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gumiwangsukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gumiwang Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "gunungtugelsukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Gunungtugel Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pulussukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pulus Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pucungwetansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pucungwetan Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kajeksansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kajeksan Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tlogosukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tlogo Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalibeningsukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalibening Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "garunglorsukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Garunglor Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "jebengplampitansukoharjo@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Jebengplampitan Kec. Sukoharjo",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "dempelkalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Dempel Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "depokkalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Depok Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalialangkalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalialang Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "kalikarungkalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Kalikarung Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "karangsambungkalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Karangsambung Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "mergolangukalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Mergolangu Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "pengarengankalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Pengarengan Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');

        $opd = User::create([
            "email" => "tempurejokalibawang@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd" => "Desa Tempurejo Kec. Kalibawang",
            "name" => "Admin OPD"
        ]);
        $opd->assignRole('opd');
    }
}