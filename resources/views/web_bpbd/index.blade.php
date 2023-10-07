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
    <link rel="stylesheet" href="{!! asset ('css/style.css')!!}">
    <link rel="stylesheet" href="{!! asset ('css/splide.css')!!}">
    <link rel="stylesheet" href="{!! asset ('css/splide2.css')!!}">

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

<!-- floating wa -->
<a href="https://wa.me/6282317012056" class="floating" target="_blank">
    <i class="bi bi-whatsapp text-white fab-icon"></i>
</a>
<!-- akhir floating wa -->

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

<!-- seputar -->
<div class="container py-3 mb-5">
    <section id="seputar" class="blog">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p class="textdark mt-5">Seputar BPBD JABAR</p>
            </header>
        </div>
            <div class="row py-3 mt-2">
                <div class="col-sm" id="berita-gallery"><h5><b>Berita Terkini</b></h5>
                <hr>
                    <div class="berita-container">
                        <img class="card-img rounded img-fluid" id="expanded-img" src="{{asset('bpbds/pusdiklat.jpeg')}}" alt="Card Image">
                        <div class="card-img-overlay">
                            <h5 class="card-title ms-3 mb-2 position-absolute bottom-0 start-0">
                            Pusdiklat PB BNPB Gelar Pelatihan Dasar 
                            Manajemen Bencana Berpola Pendapatan Negara Bukan Pajak                            </h5>
                        </div>
                    </div>

                <div class="columns row mt-2 ">   
                    </div>
                        <a href="" class="text-secondary mt-1"><i class="fs-6 fw-lighter">Selengkapnya-></i></a>
                    </div>

                <div class="col-sm fs-5 fw-bold artikel"><h5><b>Artikel</b></h5>
                <hr>
                <div class="sidebar-item recent-posts">
                    <div class="row">
                        <div id="image-artikel" class="col-4">
                            <a href="">
                            <img src="{{asset('bpbds/pusdiklat.jpeg')}}"  class="rounded img-fluid" alt=""
                            style="width: 120px; margin-bottom: 10px; height: 70px; object-fit: cover;">
                            </a>
                        </div>
                        <div id="content" class="col ms-3">
                            <h6 > <b class="fw-bold text-dark">
                            Pusdiklat PB BNPB Gelar Pelatihan Dasar Manajemen Bencana Berpola Pendapatan Negara Bukan Pajak</b>
                            </h6>
                            <p>SENTUL &ndash; Sebanyak 72...
                        </div>
                    </div>
                    <div class="row">
                        <div id="image-artikel" class="col-4">
                            <a href="">
                            <img src="{{asset('bpbds/krisis-air.jpeg')}}"  class="rounded img-fluid" alt=""
                            style="width: 120px; margin-bottom: 10px; height: 70px; object-fit: cover;">
                            </a>
                        </div>
                        <div id="content" class="col ms-3">
                            <h6 > <b class="fw-bold text-dark">
                            600 Warga Kabupaten Bandung Alami Krisis Air Bersih</b>
                            </h6>
                            <p>JAKARTA &ndash; Fenomena ik...
                        </div>
                    </div>
                    <div class="row">
                        <div id="image-artikel" class="col-4">
                            <a href="">
                            <img src="{{asset('bpbds/kekeringan.jpeg')}}"  class="rounded img-fluid" alt=""
                            style="width: 120px; margin-bottom: 10px; height: 70px; object-fit: cover;">
                            </a>
                        </div>
                        <div id="content" class="col ms-3">
                            <h6 > <b class="fw-bold text-dark">
                            Kekeringan Terjang Empat Kecamatan di Kabupaten Bogor</b>
                            </h6>
                            <p>JAKARTA &ndash; Kekeringan menerj...
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h5 class="mt-1 infografis"><b class="jdl">Infografis</b></h5>
                    <div class="row ">   
                </div>
                <br>
                    <a href="" class="text-secondary mt-1"><i class="fs-6 fw-lighter">Selengkapnya-></i></a>
                    </div>
            </div>
        
    </section>
</div>
    <br>
    <br>
<!--Akhir seputar  -->

<!-- Data Bencana -->
<div class="data text-white py-5 ">
    <div class="container">
        <center>
                <h5><b fw-bold>Data Bencana Jawa Barat</b></h5>
                <span class="sumber"> Sumber : <a href="https://barata.jabarprov.go.id/">barata.jabarprov.go.id</a>
                </span>
                 <div class="mb-2">
                    <p>01 Jan 2023 - 03 Okt 2023</p>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm">
                        <h1 class="fw-bold"><b id="kejadian-bencana">970</b></h1>
                        <span>Kejadian Bencana</span>
                    </div>
                    <div class="col-sm">
                        <h1 class="fw-bold"><b id="mengungsi">98.860</b> </h1>
                        <span>Mengungsi</span>
                    </div>
                    <div class="col-sm">
                        <h1 class="fw-bold"><b id="meninggal">26</b></h1>
                        <span>Meninggal</span>
                    </div>
                    <div class="col">
                        <h1 class="fw-bold"><b id="terdampak">898.871</b></h1>
                        <span>Terdampak</span>
                    </div>
                </div>
        </center>
    </div>
</div>
    <br>
    <br>
<!-- Akhir Data Bencana -->

<!-- Info Cuaca dan peringatan -->
<div class="container">
    <div class="cuaca">
        <h4 class="text-center mt-4 fw-bold">
            <b>Info Cuaca dan Peringatan Dini</b>
        </h4>
        <div class="text-center">
            Sumber : 
            <span>
                <a href="https://www.bmkg.go.id/">bmkg.co.id</a>
            </span>
        </div>
        <br>

            <div class="row mb-2">
                <div class="col col-lg-7 col-sm">
                    <div class="text-center" style="color:black"><b>Perkiraan Cuaca</b></div>
                    <hr>

                    <div class="row">
                        <div class="splide2">
                            <div class="splide__track">
                                <div class="splide__list d-flex gap-2" style="height: 280px">
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Bandung</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Banjar</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Bekasi</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Ciamis</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Cianjur</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Bogor</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Bekasi</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Cimahi</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Cirebon</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Depok</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Gadog Puncak</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    24 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Garut</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    24 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Indramayu</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Karawang</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Bogor</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Kuningan</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Berawan<br>
                                                    24 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Bandung Barat</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan<br>
                                                    24 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Majalengka</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Pangandaran</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan<br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Sukabumi</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Purwakarta</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Tasikmalaya</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Bandung</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Subang</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Cirebon</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kab. Sumedang</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Cerah Berawan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Kota Tasikmalaya</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Hujan Ringan <br>
                                                    25 *C <br>
                                                    80%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide w-25 h-100">
                                        <div class="card">
                                            <div class="card-body">
                                                <center class="text-7">
                                                    <p class="fw-bold">Pelabuhan Ratu</p>
                                                    <br>
                                                    <img src="{{asset('bpbds/cuaca.png')}}" width="100"><br>
                                                
                                                    Kosong <br>
                                                    Kosong *C <br>
                                                    Kosong%
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <a href="" class="text-left text-secondary">
                            <i>Selengkapnya -></i>
                        </a>
                    </div>

                    <div class="col col-lg-5 col-sm gempa">
                        <div class="text-center"><b>Gempa Bumi Terkini</b></div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{asset('bpbds/gempa.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm">
                                <br>
                                <h6> 02 Okt 2023, 19:26:11 WIB</h6>
                                    <div>
                                        <i class="bi bi-activity text-danger"></i> Magnitude: 4.6 <br>
                                        <i class="bi bi-record-circle text-success"></i> Kedalaman: 6 km <br>
                                        <i class="bi bi-geo-alt-fill text-warning"></i> Lokasi: 4.13 LS - 134.02 BT <br>
                                        <i class="bi bi-record-circle text-danger"></i> Pusat gempa berada di Laut 63 km Tenggara Kaimana<br>
                                        <i class="bi bi-water" style="color: #ee6c20"></i> Gempa ini dirasakan untuk diteruskan pada masyarakat
                                        <br>
                                            <a href="" class="text-secondary mt-1"><i><u>Selengkapnya-></u></i></a>
                                    </div>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    <br>
<!-- Akhir Info Cuaca dan peringatan -->

<!-- Info Kebencanaan -->
<div class="kebencanaan text-center text-white bg-dark" >
        <br><br><br><br>
        <h1 class=""><b> Info Kebencanaan </b></h1>
        <br><br><br><br><br>

        <div class="container info">
            <div class="row">
                <div class="col-sm">
                    <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
                        <div class="card-image">
                            <img class="p-4" style="width:100px;" src="{{asset('bpbds/infografis.png')}}" alt="">
                        </div>
                        <div class="text-start card-body-info text-white"><br>
                            <h4 class=""><b>Infografis Bencana</b></h4><br>
                            <p class="">Informasi Jumlah dan
                                dampak kejadian
                                bencana dalam kurun
                                waktu tertentu.
                            </p><br>
                            <center>
                                <a href="" class="btn btn-light text-dark position-absolute bottom-0 start-50 translate-middle-x"
                                    style=" border-radius: 30px; width: 80%; margin-bottom: 40px;">Lihat</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-info " style="background: rgb(29, 29, 29); margin-top: 35px;">
                        <div class="card-image">
                            <img class="p-4" style="width:108px;" src="{{asset('bpbds/analisis.png')}}" alt="">
                        </div>
                        <div class="text-start card-body-info text-white"><br>
                            <h4 class=""><b>Analisis Dampak Bencana</b></h4><br>
                            <p class="">Kajian analisis dampak
                                bencana alam yang
                                terjadi di Provinsi
                                Jawa Barat.
                            </p><br>
                            <center>
                                <a href="" class="btn btn-light text-dark position-absolute bottom-0 start-50 translate-middle-x"
                                style=" border-radius: 30px; width: 80%; margin-bottom: 40px;">Lihat</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
                        <div class="card-image">
                            <img class="p-4" style="width:100px; height:110px;" src="{{asset('bpbds/barata.png')}}" alt="">
                        </div>
                        <div class="text-start card-body-info text-white"><br>
                            <h4 class=""><b>Sistem Informasi BARATA</b></h4><br>
                            <p class="">Jawa Barat Tangguh
                                Bencana, aplikasi informasi
                                Kejadian dan penanganan
                                bencana di Jawa Barat.
                            </p><br>
                            <center>
                                <a href="" class="btn btn-light text-dark position-absolute bottom-0 start-50 translate-middle-x"
                                style=" border-radius: 30px; width: 80%; margin-bottom: 40px;">Lihat</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-info" style="background: rgb(29, 29, 29); margin-top: 35px;">
                        <div class="card-image">
                            <img class="p-4" style="width:87px;" src="{{asset('bpbds/kelas-kebencanaan.png')}}" alt="">
                        </div>
                        <div class="text-start card-body-info text-white"><br>
                            <h4 class=""><b>Kelas Kebencanaan</b></h4><br>
                            <p class="">Informasi jumlah dan
                                dampak kejadian
                                bencana dalam kurun
                                waktu tertentu.
                            </p><br>
                            <center>
                                <a href="" class="btn btn-light text- position-absolute bottom-0 start-50 translate-middle-x"
                                style=" border-radius: 30px; width: 80%; margin-bottom: 40px;">Lihat</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
<!-- Akhir info kebencanaan -->

<!-- Konten Edukasi -->
    <div class="konten-edu">
        <div class="">
        <br><br><br>
            <h1 class="text-dark text-center"><b>Konten Edukasi</b></h1>
            <br><br>
                <div class="row">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card border-0 shadow" data-aos="fade-in"
                                        style="background: #ee8200; border-radius: 30px;">
                                        <div class="card-body" data-aos="zoom-in"><br>
                                            <center>
                                                <h5 class="text-white">
                                                    <b>Keluarga Tangguh Bencana</b>
                                                </h5>
                                                <br>
                                                <iframe style="width: 90%; border-radius: 30px;"
                                                        src="youtube.com" title="YouTube video player"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen>
                                                </iframe>
                                            </center>
                                            <br><br>
                                            <center>
                                                <a href="/konten-edukasi/Keluarga Tangguh Bencana" target="_blank"
                                                    class="btn btn-light text-dark"
                                                    style="border-radius: 30px; width: 80%; margin-bottom: 20px;">
                                                    Lihat
                                                </a>
                                            </center>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card border-0 shadow" data-aos="fade-in"
                                        style="background: #ee8200; border-radius: 30px;">
                                        <div class="card-body" data-aos="zoom-in">
                                        <br>
                                            <center>
                                                <h5 class="text-white">
                                                    <b>Banjir</b>
                                                </h5>
                                                <br>
                                                <iframe style="width: 90%; border-radius: 30px;"
                                                        src="https://www.youtube.com/embed/q5xC0NTUsK0?si=i-0gtKIuJ26nRL_b" title="YouTube video player"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen>
                                                </iframe>
                                            </center>
                                            <br><br>
                                            <center>
                                                <a href="/konten-edukasi/Banjir" target="_blank"
                                                    class="btn btn-light text-dark"
                                                    style="border-radius: 30px; width: 80%; margin-bottom: 20px;">
                                                    Lihat
                                                </a>
                                            </center>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card border-0 shadow" data-aos="fade-in"
                                        style="background: #27b7eb; border-radius: 30px;">
                                        <div class="card-body" data-aos="zoom-in"><br>
                                            <center>
                                                <h5 class="text-white"><b>Covid-19</b></h5><br>
                                                    <iframe style="width: 90%; border-radius: 30px;"
                                                            src="https://www.youtube.com/embed/5evcEePK0EM?si=Fb70hcW8bD3IuAfO" title="YouTube video player"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen>
                                                    </iframe>
                                            </center>
                                            <br><br>
                                            <center>
                                                <a href="/konten-edukasi/Covid-19" target="_blank"
                                                            class="btn btn-light text-dark"
                                                            style="border-radius: 30px; width: 80%; margin-bottom: 20px;">
                                                        Lihat
                                                </a>
                                            </center>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card border-0 shadow" data-aos="fade-in"
                                                style="background: #fcc32c; border-radius: 30px;">
                                        <div class="card-body" data-aos="zoom-in"><br>
                                            <center>
                                                <h5 class="text-white"><b>Gempa Bumi</b></h5><br>
                                                    <iframe style="width: 90%; border-radius: 30px;"
                                                            src="https://www.youtube.com/embed/CyYuYU58e7I?si=Fq1KyCXd_W_S5jW2" title="YouTube video player"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen>
                                                    </iframe>
                                            </center>
                                            <br><br>
                                            <center>
                                                <a href="/konten-edukasi/Gempa Bumi" target="_blank"
                                                            class="btn btn-light text-dark"
                                                            style="border-radius: 30px; width: 80%; margin-bottom: 20px;">
                                                    Lihat
                                                </a>
                                            </center>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-4 splide__slide m-2">
                                    <div class="card border-0 shadow" data-aos="fade-in"
                                                style="background: #0e9455; border-radius: 30px;">
                                        <div class="card-body" data-aos="zoom-in"><br>
                                            <center>
                                                <h5 class="text-white"><b>Tanah Longsor</b></h5><br>
                                                    <iframe style="width: 90%; border-radius: 30px;"
                                                            src="https://www.youtube.com/embed/FMW4kb_SZD0?si=h0p5dinIGO6DZiaK" title="YouTube video player"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen>
                                                    </iframe>
                                            </center>
                                            <br><br>
                                            <center>
                                                <a href="/konten-edukasi/Tanah Longsor" target="_blank"
                                                            class="btn btn-light text-dark"
                                                            style="border-radius: 30px; width: 80%; margin-bottom: 20px;">
                                                    Lihat
                                                </a>
                                            </center>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <br>
        </div>
    </div>
</div>
<br><br>
</div>

<!-- Akhir Konten Edukasi -->

<!-- Kontak cepat -->
<div class="card kontak text-white text-center">
    <div class="card-img">
        <div class="card-img-overlay">
            <br><br>
            <h2><b>Kontak Cepat</b></h2>
            <h2>Jika Terjadi Bencana</h2>
            <br><br>
            <h2>Call Center</h2>
            <h1><b>+6282317012056</b></h1>
            <i>(WhatsApp only)</i>
            <br><br>
            <h2>Humas</h2>
            <h1><b>081320992800</b></h1>
            <br><br><br>
            <div class="row">
                <div class="col-sm">
                    bpbd@jabarprov.go.id
                </div>
                <div class="col-sm">
                    bpbdjabarprov@gmail.com
                </div>
                <div class="col-sm">
                    humasbpbdjabar@jabarprov.go.id
                </div>
                <div class="col-sm">
                    humasbpbdjabar@gmail.com
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Kontak Cepat -->

<!-- Media Sosial -->
<div class="medsos">
    <br><br>
    <h2 class="text-dark text-center"><b>Media Sosial</b></h2>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm-5">
            <img src="{{asset('bpbds/temukan-kami.png')}}" style="width:100%;" class="temu" alt="">
            </div>
            <div class="col">
                <div class="card bg-white mt-4 border-0">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td style="padding-right:20px">
                                    <img src="{{asset('bpbds/fb.png')}}" alt="">
                                </td>
                                <td>
                                    <a href="" target="_blank">
                                        <h4 class="mt-1 text-dark">BPBD Jawa Barat</h4>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-white mt-4 border-0">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td style="padding-right:20px">
                                    <img src="{{asset('bpbds/tw.png')}}" alt="">
                                </td>
                                <td>
                                    <a href="" target="_blank">
                                        <h4 class="mt-1 text-dark">BPBD Jabar</h4>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-white mt-4 border-0">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td style="padding-right:20px">
                                    <img src="{{asset('bpbds/ig.png')}}" alt="">
                                </td>
                                <td>
                                    <a href="" target="_blank">
                                        <h4 class="mt-1 text-dark">bpbdprovjabar</h4>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card bg-white mt-4  mb-5 border-0">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td style="padding-right:20px">
                                    <img src="{{asset('bpbds/tt.png')}}" alt="">
                                </td>
                                <td>
                                    <a href="" target="_blank">
                                        <h4 class="mt-1 text-dark">Bpbdjabar</h4>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Media Sosial -->

<!-- Link Terkait -->
<div class="link-terkait">
    <div class="container">
        <center>
            <br><br><br><br>
            <h2 class="text-dark"><b>Link Terkait</b></h2>
            <br><br>
            <div class="row">
                <div class="col-sm">
                    <a href="https://bnpb.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-bnbp.png')}}" style="width:130px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://jabarprov.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-jabar.png')}}" style="width:147px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://damkar.jabarprov.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-damkar.png')}}" style="width:165px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://bmkg.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-bmkg.png')}}" style="width:137px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                        <a href="https://ppid.jabarprov.go.id/" target="_blank">
                            <div class="card mb-3 border-0 shadow"
                                style="background: rgba(255, 255, 255, 0.765); border-radius: 20px;">
                                <div class="p-3"><br>
                                    <img src="https://bpbd.jabarprov.go.id/images/logo-ppd.png" class="" style="width: 150px;"
                                        alt="" style=""><br><br>
                                </div>
                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <a href="https://magma.vsi.esdm.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-magma.png')}}" style="width:160px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://vsi.esdm.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-mineral.png')}}" style="width:160px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://inarisk.bnpb.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-inarisk.png')}}" style="width:160px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://lpse.jabarprov.go.id/" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-lpse.png')}}" style="width:160px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="https://inspektorat.jabarprov.go.id/unit-pengendali-gratifikasi" target="_blank">
                        <div class="card mb-3 border-0 shadow">
                            <div class="p-3">
                                <img src="{{asset('bpbds/logo-upg.png')}}" style="width:160px;" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </center>
    </div>
    <br><br><br><br>
</div>
<!-- Akhir Link Terkait -->

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
                                Visitoros: <b>13322</b>
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

    <script>
        var splide = new Splide('.splide2', {
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