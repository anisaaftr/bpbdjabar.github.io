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

<!-- Dakumen Informasi-->
<div class="container penjabat mt-5">
    <header class="section-header">DOKUMEN</header>

    <div class="row mt-3">
        <div class="card border-0">
            <p>
                Badan Penanggulangan Bencana Daerah Provinsi Jawa Barat 
                mendukung keterbukaan informasi publik seperti publikasi 
                dokumen dan laporan-laporan dari Dinas Kehutanan Provinsi Jawa Barat,
                berikut adalah dokumen dan laporan seperti yang tertera pada dokumen dibawah ini:
            </p>
            <ol>
                <li><a href="https://drive.google.com/file/d/15MEISAv4cETKg-HDyLDncQv1TCLuxjkd/view?usp=drive_link">Rancangan Akhir Renstra BPBD Provinsi Jawa Barat Tahun 2024-2026</a></li>
                <li><a href="https://drive.google.com/file/d/1bBPi_dxu0egw5b2hnRuacsknlxFmDEkH/view?usp=drive_link">Renja BPBD Provinsi Jawa Barat Tahun 2023</a></li>
                <li><a href="https://drive.google.com/file/d/1JD2Tw1F07Xd88FysxOkqfee942sC4N5g/view?usp=drive_link">Laporan RENJA 2023 TW I BPBD Provinsi Jawa Barat &nbsp;</a></li>
                <li><a href="https://drive.google.com/file/d/1un6jMbfOgNDvAzral-HAFM3hY2K25iX4/view?usp=drive_link">Laporan RENJA 2023 TW II BPBD Provinsi Jawa Barat &nbsp;</a></li>
                <li><a href="https://drive.google.com/file/d/10U5OMkNkP4fQ4E9yTH2nhNvmwJNSyZ6Y/view?usp=drive_link">CaLK t.a 2022</a></li>
                <li><a href="https://drive.google.com/file/d/19FjQrJVwlp7lIutp9-lHWG9h3uPImIGm/view?usp=drive_link">Laporan Realisasi Anggaran 2022 (LRA)</a>&nbsp;</li>
                <li><a href="https://drive.google.com/file/d/1lH4xwUu_t8CD2ViDEDbqRfOUFLe5fGiD/view?usp=drive_link">Neraca 2022</a></li>
                <li><a href="https://drive.google.com/file/d/1jhVncz7dDThuHD8FjWruyKD-xEF_h9VJ/view?usp=drive_link">LKPD 2022</a></li>
                <li><a href="https://drive.google.com/file/d/1itcmsh8J-iJeb4MPj-cFdgHC_XtxckjE/view?usp=drive_link">RAK SKPD BPBD Provinsi Jawa Barat &nbsp;</a></li>
                <li><a href="https://drive.google.com/file/d/1EkBQNUBUACKHNh6vDIj8E0HbkcyDZ6Wo/view?usp=drive_link">DPPA BPBD Provinsi Jawa Barat &nbsp;</a></li>
                <li><a href="https://drive.google.com/file/d/10LgE53Xej-N66dSICI2Xg3yXrcRbd6Sk/view?usp=drive_link">Realisasi penyerapan Anggaran BPBD Provinsi Jawa Barat Tahun</a></li>
                <li><a href="https://drive.google.com/file/d/1l8YjHW-GeNBAhOS9Ld_nTXeeSHW60KO9/view?usp=drive_link">LKIP BPBD Provinsi Jawa Barat Tahun 2022</a></li>
                <li><a href="https://drive.google.com/file/d/14m5L_9PcK9fzNs9FKJNaR-LKCk6haIjS/view?usp=drive_link">Rekap SIRUP Tahun 2023</a></li>
                <li><a href="https://drive.google.com/file/d/1G6u3ZcdiwrcFkoAILzHasJBIlNljCAI1/view?usp=drive_link">Perda APBD Provinsi Jawa Barat TA 2023</a></li>
                <li><a href="https://drive.google.com/file/d/1ZI6ZRBJLsMv_VWPmB15NFrB--zKmg8kQ/view?usp=drive_link">LKPJ BPBD Provinsi Jawa Barat Tahun TA 2022 &nbsp;</a></li>
                <li><a href="https://drive.google.com/file/d/18eXC6FgPajoOSzyv4DdR1eHGVsY5_4O-/view?usp=drive_link">RKPD BPBD Provinsi Jawa Barat Tahun 2023</a></li>
                <li><a href="https://drive.google.com/file/d/14Kqhe-fzihtgBdpNBr0Z7PUPNlDlnthx/view?usp=drive_link">Rekap Barjas BPBD Provinsi Jawa Barat Tahun 2021</a></li>
                <li><a href="https://drive.google.com/file/d/1mnNQvQTAqQMdx6aW2-HmBbC3mmlUdvyN/view?usp=drive_link">Rekap Barjas BPBD Provinsi Jawa Barat Tahun 2022</a></li>
                <li><a href="https://drive.google.com/file/d/1mKkZzxb7V6PYW_FxRFpHa3G7qasiwvH8/view?usp=drive_link">Rekap Barjas BPBD Provinsi Jawa Barat Tahun 2023</a></li>
                <li><a href="https://drive.google.com/file/d/1CMXQ0kO4C8YdGRyrvGNw1WUjMUUPl6P1/view?usp=sharing">Perubahan Renstra BPBD Provinsi Jawa Barat Tahun 2018-2023</a></li>
                <li><a href="https://drive.google.com/drive/folders/1Psls_XLBbe4YLIlTMMHbxeKGgHtYUMB9?usp=sharing">Laporan Kajian Cepat</a></li>
                <li><a href="https://drive.google.com/drive/folders/1T-OZ2FvORrfahpYr6C5c_gHQ2Ua2SZu_?usp=sharing">Dokumen Kajian Risiko Bencana Provinsi Jawa Barat</a></li>
                <li><a href="https://drive.google.com/drive/folders/1VtH69mpelPLVDc7J8eyuM1FccgqJdKJh?usp=drive_link">Dokumen Rencana Kontijensi Bencana Gempa Bumi Akibat Sesar Lembang di Provinsi Jawa Barat</a></li>
                <li><a href="https://drive.google.com/drive/folders/1ToXqirs96KJef7ttvpm7afpmPvAQAm8O?usp=drive_link">Penentuan Status Keadaan Darurat</a><br></li>
            </ol>
        </div>
    </div>
</div>
<br>
<br>
<!-- Akhir Dakumen Informasi-->

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