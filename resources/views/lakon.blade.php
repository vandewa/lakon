<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>|&nbsp; L A K O N</title>
  <link href="{{ asset('img/lakon/Lambang Wonosobo.png')}}" rel="shortcut icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style_lakonlandingpage.css')}}" />


  <!-- Text to Speech -->
  <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
  <!-- <script src="https://code.responsivevoice.org/responsivevoice.js?key=fd5OcpKB"></script> -->
  <script type="text/javascript">
    responsiveVoice.OnVoiceReady = function() {
      console.log("speech time?");
      responsiveVoice.speak(
        "Selamat Datang di Sistem Layanan Konsultasi Online atau disebut LAKON Inspektorat Daerah Kabupaten Wonosobo. LAKON adalah sistem informasi yang dapat Anda gunakan untuk berkonsultasi secara online dengan APIP Inspektorat Daerah Kabupaten Wonosobo. Dengan Aplikasi ini diharapkan APIP dapat memberikan bimbingan, nasihat, dan penjelasan kepada Perangkat Daerah dan Desa terkait berbagai aspek pengawasan dan pemeriksaan di lingkungan Pemerintah Kabupaten Wonosobo. Melalui layanan ini, diharapkan dapat meningkatkan transparansi, akuntabilitas, dan kualitas pelayanan publik di lingkungan Pemerintah Kabupaten Wonosobo.",
        "Indonesian Female", {
          pitch: 1,
          rate: 1,
          volume: 1
        }
      );
    };
  </script>
</head>

<body>
  <!-- Navigasi -->
  <nav class="shadow-lg navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="color:white; font-size:18pt"><b>L</b> <span class="icon"><i class="fab fa-buysellads" aria-hidden="true"></i></span> <b>K O N</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text-right collapse navbar-collapse" id="navbarText">
        <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;"><i class="fas fa-home"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#definisi" style="color:white;">Definisi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan" style="color:white;">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kriteria" style="color:white;">Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tatacara" style="color:white;">Tata Cara</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#partner" style="color:white;">Partner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak" style="color:white;">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner -->
  <div class="container-fluid banner">
    <div class="container" style="color:black">
      <img src="{{ asset('img/lakon/Lambang Wonosobo.png')}}" class="pt-4 mx-auto mb-3 bg-transparent crop images" width="100" height="135" />
      <h4 class="display-6">Selamat Datang,</h4>
      <h3 class="display-2"><b>Layanan Konsultasi</b></h3>
      <h6 class="display-6"><b>Inspektorat Kabupaten Wonosobo</b></h6>
      <p class="card-text"><br>Melalui Sistem Layanan Konsultasi <b>(LAKON)</b>, mari bersama-sama kita<br>tingkatkan Transparansi, Akuntabilitas, dan Kualitas Pelayanan Publik<br>di lingkungan Pemerintah Kabupaten Wonosobo.</p>
      <a href="{{ route('login')}}" class="mt-3 btn btn-danger btn-md" title="Klik untuk mengajukan pertanyaan!">Ajukan Konsultasi <i class="fa fa-sign-in" aria-hidden="true"></i></a>
    </div>
  </div>

  <!-- Definisi -->
  <div class="pt-5 pb-5 container-fluid layanan">
    <div class="container text-center">
      <h2 class="display-3" id="definisi"></h2>
      <div class="card-body">
        <h2 class="pt-5 display-3" style="font-family: 'Charm', cursive;">Definisi</h2><br>
        <blockquote class="mb-0 blockquote">
          <footer class="blockquote-footer" align="justify" style="color:black"><b><i>Layanan Konsultasi (LAKON)</i></b> <cite title="Source Title">Inspektorat Daerah Kabupaten Wonosobo merupakan sistem informasi yang dapat Anda gunakan untuk berkonsultasi secara online dengan APIP Inspektorat Daerah Kabupaten Wonosobo. Dengan Aplikasi ini diharapkan APIP dapat memberikan bimbingan, nasihat, dan penjelasan kepada Perangkat Daerah dan Desa terkait berbagai aspek pengawasan dan pemeriksaan di lingkungan Pemerintah Kabupaten Wonosobo. Melalui layanan ini, diharapkan dapat meningkatkan transparansi, akuntabilitas, dan kualitas pelayanan publik di lingkungan Pemerintah Kabupaten Wonosobo.</cite></footer>
        </blockquote>
      </div>
    </div>
  </div>

  <!-- Layanan -->
  <div class="pt-4 pb-5 container-fluid bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="layanan"></h2><br>
      <blockquote class="mb-0 blockquote">
        <h2 class="pt-5 pb-3 display-3" style="font-family: 'Charm', cursive;">Layanan</h2>
        <p><i><b>Layanan Konsultasi (LAKON)</b> Inspektorat Daerah Kabupaten Wonosobo dapat mencakup <b>3 (tiga)</b> hal, yaitu:</i></p>
      </blockquote>
      <div class="pt-4 row gx-4 gy-4">
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/bg-lakon4.jpg')}}" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Penyediaan Informasi</h5>
              <p class="card-text" align="justify">
                Inspektorat Daerah Kabupaten Wonosobo dapat memberikan informasi tentang peraturan perundang-undangan, kebijakan pemerintah, dan prosedur pengawasan yang berlaku. Hal ini dapat membantu perangkat daerah memahami hak dan kewajiban mereka serta memastikan kepatuhan terhadap aturan yang berlaku.<br>
                <b style="color:white">.</b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/bg-lakon3.jpg')}}" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Konsultasi Kinerja</h5>
              <p class="card-text" align="justify">
                Inspektorat Daerah Kabupaten Wonosobo dapat membantu Perangkat Daerah dalam menganalisis dan memperbaiki kinerja mereka. Ini dapat melibatkan peninjauan dan evaluasi kinerja, identifikasi kelemahan dan tantangan, serta memberikan saran dan rekomendasi untuk perbaikan.<br><br>
                <b style="color:white">.</b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/bg-lakon5.jpg')}}" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Bimbingan Teknis</h5>
              <p class="card-text" align="justify">
                Inspektorat Daerah Kabupaten Wonosobo dapat memberikan bimbingan teknis kepada individu, kelompok, atau organisasi terkait dengan prosedur pengawasan, tata kelola, dan manajemen risiko. Ini membantu mereka dalam mengembangkan kapasitas, memahami prinsip-prinsip pengawasan yang efektif, dan menerapkan praktik terbaik dalam menjalankan tugas.
              </p>
            </div>
          </div>
        </div>
      </div><br>
      <blockquote class="mt-3 mb-3 blockquote">
        <footer class="blockquote-footer" align="justify" style="color:black">Melalui <cite title="Source Title">Sistem <b>Layanan Konsultasi</b> ini, Inspektorat Daerah Kabupaten Wonosobo berharap dapat menjadi mitra bagi Perangkat Daerah dalam membangun Tata Kelola Pemerintahan yang Baik, meningkatkan Transparansi, dan memberikan Pelayanan Publik yang Berkualitas.</cite></footer>
      </blockquote>
    </div>
  </div>

  <!-- Kriteria -->
  <div class="container-fluid banner">
    <div class="container text-center">
      <h2 class="display-3" id="kriteria"></h2><br>
      <blockquote class="mb-0 blockquote">
        <h2 class="pt-5 display-3" style="font-family: 'Charm', cursive; color:black">Kriteria</h2><br>
        <footer class="blockquote-footer" align="justify" style="color:black">Sesuai <cite title="Source Title">dengan <b>Peraturan Bupati Nomor 14 Tahun 2020</b> Tentang Kedudukan, Susunan Organisasi, Tugas Dan Fungsi Serta Tata Kerja Inspektorat Kabupaten Wonosobo, terdapat 5 (lima) Inspektur Pembantu (IRBAN) yang membantu Tugas Inspektur. Adapun pada Aplikasi <b>Layanan Konsultasi (LAKON)</b> ini masing-masing Inspektur Pembantu (IRBAN) mempunyai ruang lingkup urusan sebagai berikut:</cite></footer>
      </blockquote>
      <div class="pt-4 row gx-4 gy-4">
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/irban1.png')}}" class="card-img-top" width="200" height="200" />
            <div class="card-body" style="color:black;">
              <h5 class="card-title">Bidang Pengawasan<br>Reformasi Birokrasi</h5>
              <p class="card-text">
                <b>Ruang Lingkup :</b> PMPRB, PMPZI, SPIP, SPI, LHKPN/LHKASN, GRATIFIKASI, DAN MCP KORSUPGAH
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/irban2.png')}}" class="card-img-top" width="200" height="200" />
            <div class="card-body" style="color:black;">
              <h5 class="card-title">Bidang Pengawasan<br>Akuntabilitas Keuangan</h5>
              <p class="card-text">
                <b>Ruang Lingkup :</b> OPTIMALISASI PENDAPATAN (PAJAK, RETRIBUSI), HIBAH, BANSOS, REVIU SSH, HSPK, ASB, DAK, LKPD, LKD, KUA PPAS, DAN RKA
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/irban3.png')}}" class="card-img-top" width="200" height="200" />
            <div class="card-body" style="color:black;">
              <h5 class="card-title">Bidang Pengawasan<br>Kinerja Perangkat Daerah</h5>
              <p class="card-text">
                <b>Ruang Lingkup :</b> BLUD, BUMD, SEKOLAH/BOS, PELAYANAN PUBLIK, PEMERINTAHAN DESA, SAKIP, DAN PBJ
              </p>
            </div>
          </div>
        </div>
        <br>
        <div class="col-md-6">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/irban4.png')}}" class="card-img-top" width="200" height="280" />
            <div class="card-body" style="color:black;">
              <h5 class="card-title">Bidang Pengawasan Pemerintahan Daerah</h5>
              <p class="card-text">
                <b>Ruang Lingkup :</b> REVIU PERIJINAN, REVIU NON-PERIJINAN, REVIU RPJP, REVIU RPJMD, REVIU RKPD, REVIU RENJA OPD, REVIU LPPD, REVIU LKPPD, EVALUASI GENDER DAN SPM-NSPK
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card crop-img">
            <img src="{{ asset('img/lakon/irban5.png')}}" class="card-img-top" width="200" height="280" />
            <div class="card-body" style="color:black;">
              <h5 class="card-title">Bidang Pengawasan<br>Khusus</h5>
              <p class="card-text">
                <b>Ruang Lingkup :</b> PDTT, PROBITY AUDIT, REVIU HPS, ADUAN MASYARAKAT/RIKSUS, DAN SABERPUNGLI
              </p>
            </div>
          </div>
        </div>
      </div><br>
    </div>
  </div>

  <!-- Tata Cara Konsultasi -->
  <div class="pt-5 pb-5 container-fluid">
    <div class="container text-center">
      <h2 class="display-3" id="tatacara"></h2>
      <blockquote class="mb-0 blockquote">
        <h2 class="pt-5 pb-3 display-3" style="font-family: 'Charm', cursive;">Tata Cara</h2>
        <p><i>Berikut ini adalah tatacara dalam berkonsultasi melalui Sistem <b>Layanan Konsultasi (LAKON)</b> Inspektorat Daerah Kabupaten Wonosobo, yaitu :</i></p>
      </blockquote>
      <div class="pt-4 row gx-4 gy-4">
        <div class="text-center col-md-3">
          <img src="{{ asset('img/lakon/lingkaran1.png')}}" class="mb-3 rounded-circle" />
          <h4>Login LAKON !</h4>
          <p class="card-text" align="justify">Akses Aplikasi <b>LAKON</b> melalui laman: https://lakon.wonosobokab.go.id kemudian Login menggunakan <b><i>Username</i></b> dan <b><i>Password</i></b> yang telah diberikan pada masing-masing Perangkat Daerah. Simpan dan Jaga baik-baik Akun tersebut agar tidak disalahgunakan oleh Pihak yang tidak bertanggung jawab.</p>
        </div>
        <div class="text-center col-md-3">
          <img src="{{ asset('img/lakon/lingkaran2.png')}}" class="mb-3 rounded-circle" />
          <h4>Siapkan Bahan !</h4>
          <p class="card-text" align="justify">Sebelum Anda menulis pertanyaan atau berkonsultasi di Aplikasi LAKON Inspektorat Daerah Kabupaten Wonosobo, terlebih dahulu periksa kelengkapan bahan konsultasi Anda apakah telah sesuai dengan <b>Kriteria Urusan</b> yang telah ditetapkan, termasuk dokumen lampiran jika diperlukan.</p>
        </div>
        <div class="text-center col-md-3">
          <img src="{{ asset('img/lakon/lingkaran3.png')}}" class="mb-3 rounded-circle" />
          <h4>Isi Form Konsultasi !</h4>
          <p class="card-text" align="justify">Klik tombol <b>"Ajukan Konsultasi"</b> yang terdapat di bagian menu, kemudian isi formulir konsultasi yang telah disediakan dan lanjutkan dengan menekan tombol <b>"Kirim Konsultasi"</b>.</p>
        </div>
        <div class="text-center col-md-3">
          <img src="{{ asset('img/lakon/lingkaran4.png')}}" class="mb-3 rounded-circle" />
          <h4>Pantau Konsultasi !</h4>
          <p class="card-text" align="justify">Anda dapat memantau jawaban / tanggapan atas pertanyaan yang disampaikan dan / atau membuat pertanyaan / konsultasi baru dengan cara Login kembali ke dalam Aplikasi <b>LAKON</b> dengan <b><i>Username</i></b> dan <b><i>Password</i></b> yang telah Anda miliki.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Partner Kami -->
  <div class="pt-1 pb-5 container-fluid client bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="partner"></h2>
      <h2 class="pt-5 display-3" style="font-family: 'Charm', cursive;">Partner</h2>
      <div class="pt-4 row gx-4 gy-4">
        <div class="col">
          <a href="https://www.kpk.go.id/id/" target="_blank"><img src="{{ asset('img/lakon/kpk.png')}}" /></a>
        </div>
        <div class="col">
          <a href="https://jateng.bpk.go.id/" target="_blank"><img src="{{ asset('img/lakon/bpk.png')}}" /></a>
        </div>
        <div class="col">
          <a href="http://www.bpkp.go.id/jateng.bpkp" target="_blank"><img src="{{ asset('img/lakon/bpkp.png')}}" /></a>
        </div>
        <div class="col">
          <a href="https://inspektorat.jatengprov.go.id/17/" target="_blank"><img src="{{ asset('img/lakon/pemprov_jateng.png')}}" /></a>
        </div>
        <div class="col">
          <a href="http://jateng.polri.go.id/" target="_blank"><img src="{{ asset('img/lakon/polda_jateng.png')}}" /></a>
        </div>
        <div class="col">
          <a href="https://kejari-wonosobo.kejaksaan.go.id/" target="_blank"><img src="{{ asset('img/lakon/kejaksaan.png')}}" /></a>
        </div>
        <div class="col">
          <a href="https://www.kodam4.mil.id/" target="_blank"><img src="{{ asset('img/lakon/kodam_VI.png')}}" /></a>
        </div>
        <div class="col">
          <a href="http://pn-wonosobo.go.id/" target="_blank"><img src="{{ asset('img/lakon/pengadilanwsb.png')}}" /></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Kontak Kami -->
  <div class="pt-5 pb-3 container-fluid kontak">
    <div class="container text-center">
      <h2 class="text-center display-3" id="kontak" style="font-family: 'Charm', cursive;">Kontak</h2><br><br>
      <img src="{{ asset('img/lakon/Lambang Wonosobo.png')}}" class="mx-auto bg-transparent crop images" width="70" height="80" />
      <h4 class="mt-4 text-center display-6"><b>L <span class="icon"><i class="fab fa-buysellads" aria-hidden="true"></i></span> K O N</b><br>Layanan Konsultasi Online</h4><br><br>
      <p class="text-center">
        Inspektorat Daerah Kabupaten Wonosobo<br>
        <a href="https://goo.gl/maps/NhR1LrrADJRZvAwP9?coh=178572&entry=tt" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Jl. Tumenggung Jogonegoro No. 35 Wonosobo, Jawa Tengah (56314)<br>
        <a href="tel:+62286321039" target="_blank"><i class="fa fa-phone-square" aria-hidden="true" title="Telepon"></i></a>
        &nbsp;
        <a href="tel:+62286321039" target="_blank"><i class="fa fa-fax" aria-hidden="true" title="Faximile"></i></a>
        &nbsp;
        <a href="https://wa.me/6281323323923?text=" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true" title="WhatsApp"></i></a>
        &nbsp;
        <a href="https://inspektoratkabwonosobo.wonosobokab.go.id/" target="_blank"><i class="fa fa-globe" aria-hidden="true" title="Website"></i></a>
        &nbsp;
        <a href="mailto:inspektoratkabwonosobo@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true" title="Email"></i></a>
        &nbsp;
        <a href="https://instagram.com/inspektorat_wonosobo?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram" aria-hidden="true" title="Instagram"></i></a>
        &nbsp;
        <a href="https://twitter.com/inspektorat_wsb" target="_blank"><i class="fab fa-twitter" aria-hidden="true" title="Twitter"></i></a>
      </p>
      <div class="pb-3 row">
      </div>
    </div>
    <div class="mx-auto text-center col-md float">
      <div style="text-align: right;">
        <a class="btn btn-primary btn-md" style="opacity: 0.25;" href="#" title="Back to Top!"><span class="icon"><i class="fas fa-angle-up"></i></a>
      </div>
    </div>
  </div>
  <div class="pt-2 pb-2 container-fluid client bg-primary">
    <div class="container text-center">
      <span class="small float-center" style="font-size: 10px;"><b>&copy;2023
          <?php if (date('Y') == 2023) {
            echo "";
          } else {
            echo "- " . date('Y');
          }
          ?>
          Inspektorat Daerah Kabupaten Wonosobo | All Rights Reserved | by Agung - Damar - Devan</b></span>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>