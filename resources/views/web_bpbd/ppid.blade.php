<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPBD JABAR</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{!! asset ('css/penjabat.css')!!}">
    <link rel="stylesheet" href="{!! asset ('css/splide.css')!!}">

    <!-- Title logo -->
    <link rel="icon" href="{{asset('bpbds/logo-title-2.png')}}" type="img/x-icon">
</head>
<body>
<!-- header -->
<header id="header" class="header fixed-top bg-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="https://bpbd.jabarprov.go.id/images/logo-navbar.png" alt="">&nbsp;
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown">
                    <a style="color: white;" href="#">
                        <span>Profil</span>
                            <i class="bi bi-chevron-down">
                            </i>
                    </a>
                    <ul>
                        <li>
                            <a href="https://lapor.go.id" class="dropdown-item text-dark ">Profil Badan</a>
                            <a href="/profil-penjabat" class="text-dark">Profil Pejabat</a>
                            <a href="/visi-dan-misi" class="text-dark">Visi dan Misi</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a style="color: white;" href="#">
                        <span>Informasi Publik</span>
                            <i class="bi bi-chevron-down">
                            </i>
                    </a>
                    <ul>
                        <li>
                            <a href="/ppid" class="text-dark">PPID</a>
                            <a href="/daftar-informasi" class="text-dark">Daftar Informasi</a>
                            <a href="/informasi-wajib-berkala" class="text-dark">Informasi Wajib Berkala</a>
                            <a href="/informasi-tersedia-setiap-saat" class="text-dark">Informasi Tersedia Setiap Saat</a>
                            <a href="/informasi-serta-merta" class="text-dark">Informasi Serta Merta</a>
                            <a href="/dokumen-informasi" class="text-dark">Dokumen Informasi</a>
                            <a href="https://lapor.go.id" class="dropdown-item text-dark ">Lapor!</a>
                            <a href="https://skm.jabarprov.go.id/search" class="dropdown-item text-dark ">Survey Kepuasan Masyarakat</a>
                            <a href="/indeks-kepuasan-masyarakat" class="text-dark">Indeks Kepuasan Masyarakat</a>
                            <a href="/bpbd-kabkota-jawa-barat" class="text-dark">BPBD Kab/Kota Jawa Barat</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a style="color: white;" href="#">
                        <span>Seputar BPBD Jabar</span>
                            <i class="bi bi-chevron-down">
                            </i>
                    </a>
                    <ul>
                        <li>
                            <a href="/berita-terkini" class="text-dark">Berita Terkini</a>
                            <a href="/artikel" class="text-dark">Artikel</a>
                            <a href="/konten-edukasi" class="text-dark">Konten Edukasi</a>
                            <a href="/infografis" class="text-dark">Infografis</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a style="color: white;" href="#">
                        <span>Info Kebencanaan</span>
                                <i class="bi bi-chevron-down">
                                </i>
                    </a>
                    <ul>
                        <li>
                            <a href="/infografis-bencana" class="text-dark">Infografis Bencana</a>
                            <a href="/analisis-dampak-bencana" class="text-dark">Analisis Dampak Bencana</a>
                            <a href="https://barata.jabarprov.go.id/front?start=2023-01-01&amp;to=2023-08-30" class="dropdown-item text-dark ">Sistem Informasi BARATA</a>
                            <a href="/peta-krb" class="text-dark">Peta KRB</a>
                        </li>
                    </ul>
                </li>
                                
                <li class="dropdown">
                    <a style="color: white;" href="#">
                        <i class="bi bi-search" style="font-size: 16px;">
                        </i>
                    </a>
                    <ul>
                        <li>
                            <div class="container">
                                <form action="" method="POST">
                                    <input type="text" class="form-control mb-2" placeholder="Cari...">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a style="color: white;" class="nav-link scrollto" href="/bpbdjabar">
                        <i class="bi bi-house" style="font-size: 16px;">
                        </i>
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle text-white"></i>
        </nav>
<!-- .navbar -->

    </div>
</header>
<!-- akhir header -->
<!-- slide -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item carousel-banner active" data-bs-interval="10000">
            <img src="{{asset('bpbds/logo-slide.jpeg')}}" class="w-100 slide-dark"  alt="...">
                <center>
                    <div class="carousel-caption" style="margin-bottom: 50px;">
                        SELAMAT DATANG DI WEBSITE RESMI
                        <h2><b>Badan Penanggulangan Bencana Daerah <br>
                                    Provinsi Jawa Barat</b></h2>
                    </div>
                </center>
        </div>
        <div class="carousel-item carousel-banner active" data-bs-interval="10000">
            <img src="{{asset('bpbds/logo-slide.jpeg')}}" class="w-100 slide-dark" data-bs-interval="10000" alt="...">
                <center>
                    <div class="carousel-caption" style="margin-bottom: 50px;">
                        SELAMAT DATANG DI WEBSITE RESMI
                        <h2><b>Badan Penanggulangan Bencana Daerah <br>
                                    Provinsi Jawa Barat</b></h2>
                    </div>
                </center>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- akhir slide -->

<!-- Visi dan Misi -->
<div class="container vm mt-5">
    <header class="section-header">PPID</header>

    <div class="row">
        <div class="col">
            <div class="" data-aos="fade-up">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                            Alur Layanan Informasi Publik
                        </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <img src="{{asset('bpbds/ppid-alur.png')}}" alt="alur-ppid" style="width:100%;">
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            Tata Cara Pemohonan Informasi
                        </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/permohonan.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                            Tata Cara Penyelesaian Sengketa Informasi
                        </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <iframe src="{{asset('bpbds/sengketa.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Bukti Permohonan-PPID Pembantu (SETDA)
                        </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- isi disini -->
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Pemberitahuan Tertulis-PPID Pembantu (SETDA)
                        </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- isi disini -->
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            Bukti Penyerahan-PPID Pembantu (SETDA)
                        </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- isi disini -->
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            Penolakan Permohonan-PPID Pembantu (SETDA)
                        </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <!-- isi disini -->
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            Laporan PPID BPBD Provinsi Jawa Barat
                        </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="tab-wrap">
                                <input type="radio" id="tab013" name="tabGroup1" class="tab" checked>
                                    <label for="tab013">2022 </label>
                                <input type="radio" id="tab114" name="tabGroup1" class="tab">
                                    <label for="tab114">2023 </label>
                                <div class="tab__content">
                                </div>
                                <div class="tab__content">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            Formulir Permohonan Informasi dan Penolakan
                        </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="tab-wrap">
                                <input type="radio" id="tab013" name="tabGroup1" class="tab" checked>
                                    <label for="tab013">Form Permohonan Informasi </label>
                                <input type="radio" id="tab114" name="tabGroup1" class="tab">
                                    <label for="tab114">Form Keberatan </label>
                                <div class="tab__content">
                                    <p>Silahkan mengisi form berikut ini untuk melakukan permohonan informasi<br />
                                        <a href="/permohonan-informasi">
                                            Lihat Form Permohonan Informasi
                                        </a>
                                    </p>
                                </div>
                                <div class="tab__content">
                                    <p><a href="/formulir-keberatan">Lihat Form Keberatan</a></p>
                                    <div id="gtx-trans" style="position: absolute; left: 2px; top: -6px;">
                                    <div class="gtx-trans-icon">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                            Daftar Informasi Publik
                        </button>
                        </h2>
                        <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/DIP.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading11">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                            Standar Pelayanan Informasi Publik
                        </button>
                        </h2>
                        <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse111" aria-expanded="false" aria-controls="flush-collapse111">
                                            SOP Permohonan Informasi
                                        </button>
                                    </h2>
                                    <div id="flush-collapse111" class="accordion-collapse collapse" aria-labelledby="flush-heading111" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-permohonan-informasi.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse112" aria-expanded="false" aria-controls="flush-collapse112">
                                            SOP Uji Konsekuensi
                                        </button>
                                    </h2>
                                    <div id="flush-collapse112" class="accordion-collapse collapse" aria-labelledby="flush-heading112" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-uji-konsekuensi.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse113" aria-expanded="false" aria-controls="flush-collapse113">
                                            SOP Penetapan dan Pemutakhiran Daftar Informasi Publik
                                        </button>
                                    </h2>
                                    <div id="flush-collapse113" class="accordion-collapse collapse" aria-labelledby="flush-heading113" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-penetapan-dan-pemutakhiran-DIP.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse114" aria-expanded="false" aria-controls="flush-collapse114">
                                            SOP Pendokumentasian Informasi Publik
                                        </button>
                                    </h2>
                                    <div id="flush-collapse114" class="accordion-collapse collapse" aria-labelledby="flush-heading114" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-pendokumentasian.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse115" aria-expanded="false" aria-controls="flush-collapse115">
                                            SOP Pengajuan Keberatan Atas Informasi
                                        </button>
                                    </h2>
                                    <div id="flush-collapse115" class="accordion-collapse collapse" aria-labelledby="flush-heading115" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-pengelolaan-keberatan.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse116" aria-expanded="false" aria-controls="flush-collapse116">
                                            SOP Penyelesaian Sengketa Informasi
                                        </button>
                                    </h2>
                                    <div id="flush-collapse116" class="accordion-collapse collapse" aria-labelledby="flush-heading116" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-penanganan-sengketa-informasi-publik.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse117" aria-expanded="false" aria-controls="flush-collapse117">
                                            Mekanisme Pelayanan Informasi Publik di Komisi Informasi Pusat
                                        </button>
                                    </h2>
                                    <div id="flush-collapse117" class="accordion-collapse collapse" aria-labelledby="flush-heading117" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/sop-mekanisme-pelayanan-informasi.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading12">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                            Daftar Informasi yang dikecualikan
                        </button>
                        </h2>
                        <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/daftar-informasi-yang-dikecualikan.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading13">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                            Tata Cara Pengajuan Keberatan
                        </button>
                        </h2>
                        <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/tata-cara-pengajuan-keberatan.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                            KEBERATAN ATAS PEMBERIAN INFORMASI PUBLIK<br>
                            Setiap pemohon informasi publik berhak mengajukan keberatan secara tertulis dalam hal ditemukannya alasan sebagai berikut :<br>
                            <ol>
                                <li>Penolakan atas permintaan informasi berdasarkan alasan pengecualian melalui uji konsekuensi;</li>
                                <li>Tidak disediakannya informasi yang wajib disediakan dan diumumkan secara berkala;</li>
                                <li>Tidak ditanggapinya permintaan informasi;</li>
                                <li>Permintaan informasi ditanggapi tidak sebagaimana yang di minta;</li>
                                <li>Tidak dipenuhinya permintaan informasi;</li>
                                <li>Pengenaan biaya yang tidak wajar; dan/atau</li>
                                <li>Penyampaian informasi yang melebihi waktu sebagaimana yang di atur oleh Undang-Undang mengenai Keterbukaan Informasi Publik.</li>
                            </ol>

                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading14">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                            Maklumat Pelayanan
                        </button>
                        </h2>
                        <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <img src="{{asset('bpbds/maklumat-pelayanan.png')}}" alt="maklumat-pelayanan" style="width:100%;">
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading15">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                            Tugas dan Fungsi PPID
                        </button>
                        </h2>
                        <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/tugas-fungsi.pdf')}}" frameborder="0"  width="100%" height="600px">
                            </iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading16">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
                            Tata Cara Pengaduan Penyalahgunan Wewenang atau Pelanggaran oleh Penjabat SKPD Provinsi
                        </button>
                        </h2>
                        <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/tata-cara-pengaduan-penyalahgunaan-wewenang-atau-pelanggaran.pdf')}}" frameborder="0"  width="100%" height="600px">
                            </iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading17">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                            Tata Cara Pengaduan Penyalahgunan Wewenang Oleh Pihak Yang Mendapat Izin dari Badan Publik
                        </button>
                        </h2>
                        <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/tata-cara-pengaduan-penyalahgunaan-wewenang-atau-pelanggaran-oleh-pihak-yang-mendapatkan-izin.pdf')}}" frameborder="0"  width="100%" height="600px">
                            </iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading18">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
                            Jumlah Permintaan Informasi Publik Yang Diterima
                        </button>
                        </h2>
                        <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/jumlah-permintaan-informasi-yang-diterima.pdf')}}" frameborder="0"  width="100%" height="600px">
                            </iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading19">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse19" aria-expanded="false" aria-controls="flush-collapse19">
                            Alasan Penolakan Permintaan Informasi Publik
                        </button>
                        </h2>
                        <div id="flush-collapse19" class="accordion-collapse collapse" aria-labelledby="flush-heading19" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/alasan-penolakan-permintaan-informasi-publik.pdf')}}" frameborder="0"  width="100%" height="600px">
                            </iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading20">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse20" aria-expanded="false" aria-controls="flush-collapse20">
                            Informasi Profil PPID
                        </button>
                        </h2>
                        <div id="flush-collapse20" class="accordion-collapse collapse" aria-labelledby="flush-heading20" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/PPID.pdf')}}" frameborder="0"  width="100%" height="600px">
                            </iframe>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- Akhir Visi dan Misi -->

<!-- footer -->
<footer id="footer" class="footer">
    <div class="footer-top bg-dark text-white">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm footer-info">
                    <h6>
                        <b>ALAMAT KANTOR</b>
                    </h6>
                    <br>
                    <a href="" class="logo d-flex align-items-center">
                        <span class="text-white">BPBD JABAR</span>
                    </a>
                    <P>Jalan Soekarno Hatta No. 629 Kota Bandung</P>
                    <br>
                    <b>KONTAK</b>
                    <br>

                    Call center. 0821124243629 <br>
                    Telp. 6282317012056 <br>
                    Fax. (022) 7310952 <br>
                    bpbd@jabarprov.go.id <br>
                    bpbdprovjabar@gmail.com <br>
                    <br>
                    <b>HUMAS BPBD JABAR</b>
                    <br>
                    Telp. 081320992800 <br>
                    humasbpbdjabar@jabarprov.go.id <br>
                    humasbpbdjabar@gmail.com <br>
                </div>

                <div class="col-sm footer-links">
                    <h4 class="text-white">PETA LOKASI</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5635386368654!2d107.64713740062437!3d-6.942649260476556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e81482f75959%3A0xb6a64e4d14cf6918!2sBadan%20Penanggulangan%20Bencana%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1690094574738!5m2!1sid!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="col-sm footer-links">
                    <h4 class="text-white">TAUTAN CEPAT</h4>
                    <a href="" class="text-white">BARATA</a>
                    <hr>
                    <a href="" class="text-white">Peta KRB</a>
                    <hr>
                    <a href="" class="text-white">Konten Edukasi</a>
                    <hr>
                    <a href="" class="text-white">Berita Terkini</a>
                    <hr>
                    <a href="" class="text-white">Infografi</a>
                    <hr>
                    <a href="" class="text-white">PPID</a>
                    <hr>
                    <a href="" class="text-white">Daftar Informasi</a>
                    <hr>
                </div>

                <div class="col-sm footer-links">
                    <h4 class="text-white">LAYANAN PANDUAN</h4>
                    <img src="{{asset('bpbds/lapor.png')}}" class="img-fluid" alt="">
                    <br><br>
                    <h4 class="text-white">MEDIA SOSIAL</h4>
                    <div class="mt-3 text-sm text-white sosial-links">
                        <a href="http://facebook.com/bpbd" class="facebook text-white">
                        <i class="bi bi-facebook text-white"></i>
                        BPBD Provinsi Jawa Barat
                        </a>
                        <br>
                        <a href="https://www.instagram.com/bpbd" class="instagram text-white">
                        <i class="bi bi-instagram text-white"></i>
                        bpbd_jabar
                        </a>
                        <br>
                        <a href="" class="tiktok text-white">
                        <i class="bi bi-tiktok text-white"></i>
                        bpbdjabar
                        </a>
                        <br>
                        <a href="https://www.twitter.com/bpbd" class="twitter text-white">
                        <i class="bi bi-twitter text-white"></i>
                        @BPBDJabar
                        </a>
                        <br>
                        <a href="" class="youtube text-white">
                        <i class="bi bi-youtube text-white"></i>
                        BPBD Prov.Jabar
                        </a>
                        <br>
                    </div>
                    <br>

                    <div class="card border-0" style="border-radius:13px;">
                        <div class="card-body">
                            <h5 class="text-dark">
                                Visitoros: <b>8869</b>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright text-dark">
            &copy; Copyright 
            <strong>
                <span>BPBD JABAR</span>
            </strong>
            . All Rights Reserved
        </div>
    </div>
</footer>
<!-- akhir footer -->

<!-- Back to top -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

    <!-- My JS -->  
    <script src="{!! asset('js/script.js')!!}"></script>
    
    <!-- Splide Js -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <!-- Splide 1 -->
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            rewind: true,
        });

        splide.mount();
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>