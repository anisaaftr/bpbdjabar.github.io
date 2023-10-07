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

<!-- daftar informasi -->
<div class="container vm mt-5">
    <header class="section-header">DAFTAR INFORMASI</header>

    <div class="row">
        <div class="col">
            <div class="" data-aos="fade-up">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                            Prosedur Peringatan Dini dan Keadaan Darurat
                        </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/prosedur-peringatan-dini-dan-keadaan-darurat.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            Struktur Organisasi
                        </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <img src="{{asset('bpbds/struktur-organisasi.png')}}" alt="maklumat-pelayanan" style="width:100%;">
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                            Profil Organisasi Perangkat Daerah
                        </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse03" aria-expanded="false" aria-controls="flush-collapse03">
                                            Alamat Lengkap
                                        </button>
                                    </h2>
                                    <div id="flush-collapse03" class="accordion-collapse collapse" aria-labelledby="flush-heading03" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                            Jl. Soekarno Hatta No.629, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40286
                                            Telepon: 022-7313267-7315274
                                            Fax: 022-7310952
                                            Call Center: 0821124243629
                                            Email: bpbd@jabarprov.go.id bpbdjabar@gmail.com
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse103" aria-expanded="false" aria-controls="flush-collapse103">
                                            Tugas dan Fungsi
                                        </button>
                                    </h2>
                                    <div id="flush-collapse103" class="accordion-collapse collapse" aria-labelledby="flush-heading103" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                            TUGAS<br>
                                            Badan mempunyai tugas pokok melaksanakan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana Daerah dan kebakaran, meliputi penetapan pedoman dan pengarahan, standardisasi dan prosedur tetap, menyusun dan menetapkan serta mengelola sistem data dan informasi kebencanaan dan kebakaran, mengendalikan pengumpulan dan penyaluran uang serta barang, mempertanggungjawabkan penggunaan anggaran yang bersumber dari Anggaran Pendapatan dan Belanja Daerah dan/atau sumber lainnya yang sah serta melaporkan penyelenggaraan penanggulangan bencana dan kebakaran.
                                            <br>
                                            FUNGSI<br>
                                            Dalam menyelenggarakan tugas pokok, Badan mempunyai fungsi: Penyelenggaraan penetapan kebijakan teknis di bidang penanggulangan bencana Daerah dan kebakaran; Penyelenggaraan penanggulangan bencana Daerah dan kebakaran; Penyelenggaraan administrasi Badan; Penyelenggaraan evaluasi dan pelaporan Badan; Penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya.
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse203" aria-expanded="false" aria-controls="flush-collapse203">
                                            Unit Kerja
                                        </button>
                                    </h2>
                                    <div id="flush-collapse203" class="accordion-collapse collapse" aria-labelledby="flush-heading203" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                            <div class="tab-wrap" id="tab140"
                                                    name="tabGroup1" class="tab"
                                                    checked>
                                                <label for="tab140">Sekretariat</label>
                                                <input type="radio" name="tabGroup1" id="tab151" class="tab">
                                                <label for="tab151">Pencegahan Kesiapsiagaan</label>
                                                <input type="radio" name="tabGroup1" id="tab162" class="tab">
                                                <label for="tab162">Kedaruratan Logistik</label>
                                                <input type="radio" name="tabGroup1" id="tab173" class="tab">
                                                <label for="tab173">Rehabilitasi Rekontruksi</label>

                                                <div class="tab__content">
                                                    <p><big><strong>SEKRETARIAT</strong></big></p>
                                                    <P>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa barat. Sekretariat mempunyai tugas pokok menyelenggarakan administrasi Badan, meliputi perencanaan dan pelaporan, keuangan dan aset, Kepegawaian, Umum dan Kehumasan serta membantu Kepala Badan mengkoordinasikan bidang bidang.</P>
                                                    <P>Dalam menyelenggarakan tugas pokok sebagaimana dimaksud, Sekretariat mempunyai fungsi:</P>
                                                    <ol>
                                                        <li>Penyelenggaraan koordinasi, menghimpun dan pengkajian bahan kebijakan teknis bidang penanggulangan bencana Daerah dan kebakaran, yang dilaksanakan oleh bidang-bidang;</li>
                                                        <li>Penyelenggaraan perencanaan dan pelaporan, pengadministrasian keuangan dan aset serta Kepegawaian, Umum dan Kehumasan;&nbsp;</li>
                                                        <li>Penyelenggaraan evaluasi dan pelaporan Badan; dan</li>
                                                        <li>Penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Sekretariat:</p>
                                                        <ol>
                                                            <li>Menyelenggarakan pengkajian program kerja Sekretariat dan Badan;</li>
                                                            <li>Menyelenggarakan koordinasi, pengkajian dan menghimpun bahan kebijakan teknis bidang penanggulangan bencana Daerah dan kebakaran yang dilaksanakan oleh bidang-bidang;</li>
                                                            <li>Menyelenggarakan perencanaan dan pelaporan;</li>
                                                            <li>Menyelenggarakan pelayanan administrasi keuangan, meliputi penganggaran, penatausahaan serta pengelolaan system akuntansi dan pelaporan keuangan secara konvensional maupun e-office serta pengelolaan aset di lingkungan Badan;</li>
                                                            <li>Menyelenggarakan pelayanan administrasi kepegawaian meliputi pengusulan formasi, mutasi, pengembangan karir dan kompetensi, pembinaan disiplin, kesejahteraan pegawai serta pensiun pegawai Badan secara konvensional maupun e-office di lingkungan Badan;</li>
                                                            <li>Menyelenggarakan pelayanan administrasi umum, meliputi ketatausahaan, kerumahtanggaan, pengelolaan barang/aset, kehumasan, pengelolaan dan pelayanan sistem informasi, keprotokolan serta pengelolaan perpustakaan dan kearsipan secara konvensional maupun e-office di lingkungan Badan;</li>
                                                            <li>Menyelenggarakan pengumpulan dan pengkajian bahan penataan kelembagaan dan ketatalaksanaan Badan;</li>
                                                            <li>Menyelenggarakan koordinasi penyusunan bahan rancangan dan pendokumentasian peraturan perundang undangan lingkup Badan;</li>
                                                            <li>Menyelenggarakan administrasi Badan;</li>
                                                            <li>Menyelenggarakan pengumpulan dan pengolahan bahan Renstra, Renja, IKU, RKT, RKA, DPA, DIPA, PK, LKIP, LKPJ, LPPD, LHKPN dan LHKASN lingkup Badan;</li>
                                                            <li>Menyelenggarakan fasilitasi pelayanan informasi publik;&nbsp;</li>
                                                            <li>Menyelenggarakan pengkajian bahan dan pelaksanaan Sistem Pengendalian Internal Pemerintahan;&nbsp;</li>
                                                            <li>Menyelenggarakan koordinasi dan mengolah bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Badan;</li>
                                                            <li>Menyelenggarakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                            <li>Menyelenggarakan perumusan dan penyampaian bahan saran pertimbangan mengenai bidang kepegawaian sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                            <li>Menyelenggarakan pengendalian pelaksanaan tugas pokok dan fungsi Sekretariat;</li>
                                                            <li>Menyelenggarakan evaluasi dan pelaporan Sekretariat dan Badan; dan</li>
                                                            <li>Menyelenggarakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                        </ol>
                                                        <p>Sekretariat membawahkan:</p>
                                                        <ol>
                                                            <li>Subbagian <strong>Perencanaan dan Pelaporan</strong>;</li>
                                                            <li>Subbagian <strong>Keuangan dan Aset</strong>;</li>
                                                            <li>Subbagian <strong>Kepegawaian, Umum, dan Kehumasan</strong>;</li>
                                                        </ol>
                                                        <p>&nbsp;</p>

                                                        <p><strong>1. PERENCANAAN PROGRAM</strong></p>
                                                        <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Subbagian Perencanaan dan Pelaporan mempunyai tugas pokok melaksanakan perencanaan dan pelaporan, meliputi koordinasi dan penyusunan bahan perencanaan, evaluasi, dan pelaporan kegiatan Badan.</p>
                                                        <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud, Subbagian Perencanaan dan Pelaporan mempunyai fungsi:</p>
                                                        <ol>
                                                            <li>Pelaksanaan koordinasi, menghimpun dan penyusunan bahan kebijakan teknis bidang perencanaan dan pelaporan yang dilaksanakan oleh Badan;</li>
                                                            <li>Pelaksanaan perencanaan dan pelaporan;</li>
                                                            <li>Pelaksanaan evaluasi dan pelaporan Subbagian Perencanaan dan Pelaporan; dan</li>
                                                            <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                        </ol>
                                                        <p>Rincian tugas Subbagian Perencanaan dan Pelaporan:</p>
                                                            <ol>
                                                                <li>Melaksanakan penyusunan program kerja Sekretariat dan Subbagian Perencanaan dan Pelaporan;</li>
                                                                <li>Melaksanakan koordinasi, menghimpun dan menyusun bahan kebijakan teknis bidang perencanaan dan pelaporan;</li>
                                                                <li>Melaksanakan koordinasi, menghimpun dan penyusunan bahan perencanaan dan pelaporan kegiatan Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyusunan bahan pengendalian program Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyiapan bahan penyusunan dan penyerasian dokumen perencanaan lingkup Badan, meliputi Renstra, IKU, Renja, RKT, PK, RKA, DPA, dan DIPA serta penetapan kinerja Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyiapan bahan penyusunan dan penyerasian dokumen pelaporan lingkup Badan, meliputi LKIP, LKPJ, LPPD dan manajemen resiko;</li>
                                                                <li>Melaksanakan koordinasi penyusunan bahan pelaporan anggaran bulanan, triwulanan, semesteran dan tahunan lingkup Badan;</li>
                                                                <li>Melaksanakan pengelolaan LHKASN lingkup Badan;</li>
                                                                <li>Melaksanakan penyusunan bahan dan pelaksanaan Sistem Pengendalian Internal Pemerintahan;&nbsp;</li>
                                                                <li>Melaksanakan koordinasi dan penyusunan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Badan;</li>
                                                                <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                                <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai bidang perencanaan dan pelaporan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                                <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Subbagian Perencanaan dan Pelaporan;</li>
                                                                <li>Melaksanakan koordinasi pemantauan, evaluasi dan pelaporan kegiatan Badan;&nbsp;</li>
                                                                <li>Melaksanakan evaluasi dan pelaporan Subbagian Perencanaan dan Pelaporan; dan</li>
                                                                <li>Melaksanakan tugas lain sesuai tugas pokok dan fungsinya.</li>
                                                            </ol>
                                                            <p>&nbsp;</p>
                                                            <p><strong>2. KEUANGAN &amp; ASET</strong></p>
                                                            <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa barat.</p>
                                                            <p>Subbagian Keuangan dan Aset mempunyai tugas pokok melaksanakan pelayanan administrasi keuangan dan aset, meliputi penganggaran dan penatausahaan,&nbsp; perbendaharaan, penyusunan neraca aset, verifikasi dan pertanggungjawaban keuangan dan aset serta pengelolaan sistem akuntansi dan pelaporan keuangan Badan.</p>
                                                            <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud, Subbagian Keuangan dan Aset mempunyai fungsi:</p>
                                                            <ol>
                                                                <li>Pelaksanaan koordinasi, menghimpun dan penyusunan bahan kebijakan teknis bidang keuangan dan aset;</li>
                                                                <li>Pelaksanaan pengadministrasian keuangan dan aset;</li>
                                                                <li>Pelaksanaan evaluasi dan pelaporan Subbagian Keuangan dan Aset; dan</li>
                                                                <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                            </ol>
                                                            <p>Rincian tugas Subbagian Keuangan dan Aset:</p>
                                                            <ol>
                                                                <li>Melaksanakan penyusunan program kerja Subbagian Keuangan dan Aset;</li>
                                                                <li>Melaksanakan koordinasi, menghimpun dan penyusunan bahan kebijakan teknis keuangan dan aset;</li>
                                                                <li>Melaksanakan pengelolaan sistem akuntansi;</li>
                                                                <li>Melaksanakan perencanaan anggaran dan penyusunan dokumen anggaran;</li>
                                                                <li>Melaksanakan pelayanan perbendaharaan serta penyusunan neraca asset Badan;</li>
                                                                <li>Melaksanakan verifikasi dan pertanggungjawaban keuangan dan aset;</li>
                                                                <li>Melaksanakan penyiapan bahan pembinaan administrasi keuangan dan neraca aset Badan;</li>
                                                                <li>Melaksanakan penyusunan bahan laporan keuangan dan aset kegiatan anggaran pendapatan dan belanja Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyusunan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Badan;</li>
                                                                <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;&nbsp;</li>
                                                                <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai keuangan dan aset sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                                <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Subbagian Keuangan dan Aset;</li>
                                                                <li>Melaksanakan koordinasi pemantauan, evaluasi dan pelaporan kegiatan Badan;&nbsp;</li>
                                                                <li>Melaksanakan evaluasi dan pelaporan Subbagian Keuangan dan Aset; dan</li>
                                                                <li>Melaksanakan tugas lain sesuai tugas pokok dan fungsinya.</li>
                                                            </ol>
                                                            <p>&nbsp;</p>
                                                            <p><strong>3. KEPEGAWAIAN, UMUM DAN KEHUMASAN</strong></p>
                                                            <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa barat. Subbagian Kepegawaian, Umum, dan Kehumasan mempunyai tugas pokok melaksanakan pengelolaan kepegawaian, umum dan kehumasan, meliputi pengusulan formasi, mutasi, pengembangan karir dan kompetensi, pembinaan disiplin, kesejahteraan pegawai dan pensiun, ketatalaksanaan, kerumahtanggaan dan kehumasan.</p>
                                                            <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud, Subbagian Kepegawaian, Umum, dan Kehumasan mempunyai fungsi:</p>
                                                            <ol>
                                                                <li>Pelaksanaan koordinasi, menghimpun dan penyusunan bahan kebijakan teknis bidang kepegawaian, umum dan kehumasan Badan;</li>
                                                                <li>Pelaksanaan pengelolaan kepegawaian, umum dan kehumasan;</li>
                                                                <li>Pelaksanaan evaluasi dan pelaporan Subbagian Kepegawaian, Umum, dan Kehumasan; dan</li>
                                                                <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                            </ol>
                                                            <p>Rincian tugas Subbagian Kepegawaian, Umum, dan Kehumasan:</p>
                                                            <ol>
                                                                <li>Melaksanakan penyusunan program kerja Subbagian Kepegawaian, Umum, dan Kehumasan;</li>
                                                                <li>Melaksanakan koordinasi, menghimpun dan penyusunan bahan kebijakan teknis kepegawaian, umum dan kehumasan secara konvensional dan e-office;</li>
                                                                <li>Melaksanakan pengusulan formasi, mutasi, pengembangan karir dan kompetensi, pembinaan disiplin, kesejahteraan pegawai serta pensiun pegawai Badan;</li>
                                                                <li>Melaksanakan ketatausahaan, kerumahtanggaan, kehumasan, pengelolaan dan pelayanan sistem informasi, keprotokolan serta pengelolaan perpustakaan dan kearsipan Badan;</li>
                                                                <li>Melaksanakan Pelayanan Informasi Publik;&nbsp;</li>
                                                                <li>Melaksanakan pengelolaan Pengaduan Pelayanan Publik lingkup Badan;</li>
                                                                <li>Melaksanakan inventarisasi, pengadaan, penyimpanan, pendistribusian, pemeliharaan, pemindahtanganan dan penghapusan, serta pendayagunaan barang Daerah Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyelenggaraan administrasi kepegawaian dan barang daerah;&nbsp;</li>
                                                                <li>Melaksanakan pembinaan pengelolaan barang daerah lingkup Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyusunan bahan penataan kelembagaan dan ketatalaksanaan Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyusunan bahan rancangan dan pendokumentasian peraturan perundang undangan lingkup Badan;</li>
                                                                <li>Melaksanakan koordinasi dan penyusunan bahan regulasi kepegawaian, umum dan kehumasan lingkup Badan;</li>
                                                                <li>Melaksanakan koordinasi, menghimpun dan penyusunan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Badan;</li>
                                                                <li>Melaksanakan penyusunan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Subbagian Kepegawaian, Umum, dan Kehumasan serta Sekretariat;</li>
                                                                <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                                <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai kepegawaian, umum, dan kehumasan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                                <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Subbagian Kepegawaian, Umum, dan Kehumasan;</li>
                                                                <li>Melaksanakan evaluasi dan pelaporan Subbagian Kepegawaian, Umum, dan Kehumasan; dan</li>
                                                                <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                            </ol>
                                                </div>

                                                <div class="tab__content">
                                                    <p><big><strong>PENCEGAHAN DAN KESIAPSIAGAAN</strong></big></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Pencegahan mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi dan fasilitasi pencegahan dan kebencanaan.</p>
                                                    <p>Dalam menyelenggarakan tugas pokok sebagaimana dimaksud, Seksi Pencegahan mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Pelaksanaan penyusunan bahan kebijakan teknis dibidang pencegahan;</li>
                                                        <li>Pelaksanaan pencegahan;</li>
                                                        <li>Pelaksanaan evaluasi dan pelaporan Seksi Pencegahan; dan</li>
                                                        <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Pencegahan:</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Pencegahan;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakanteknis di bidang pencegahan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pelaksanaan koordinasi kegiatan bidang pencegahan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan koordinasi kegiatan pencegahan kebencanaan;</li>
                                                        <li>Melaksanakan pengelolaan dan pelayanan di bidang sistem data, informasi, dan komunikasi kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan standardisasi dan prosedur tetap;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pencegahan kebencanaan;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Pencegahan;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang pencegahan kebencanaan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai pencegahan kebencanaan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Pencegahan;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Pencegahan; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p><strong>1. PENCEGAHAN</strong></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Pencegahan mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi dan fasilitasi pencegahan dan kebencanaan.</p>
                                                    <p>Dalam menyelenggarakan tugas pokok sebagaimana dimaksud, Seksi Pencegahan mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Pelaksanaan penyusunan bahan kebijakan teknis dibidang pencegahan;</li>
                                                        <li>Pelaksanaan pencegahan;</li>
                                                        <li>Pelaksanaan evaluasi dan pelaporan Seksi Pencegahan; dan</li>
                                                        <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Pencegahan:</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Pencegahan;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakanteknis di bidang pencegahan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pelaksanaan koordinasi kegiatan bidang pencegahan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan koordinasi kegiatan pencegahan kebencanaan;</li>
                                                        <li>Melaksanakan pengelolaan dan pelayanan di bidang sistem data, informasi, dan komunikasi kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan standardisasi dan prosedur tetap;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pencegahan kebencanaan;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Pencegahan;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang pencegahan kebencanaan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai pencegahan kebencanaan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Pencegahan;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Pencegahan; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p><strong>2. KESIAPSIAGAAN</strong></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Kesiapsiagaan mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi dan fasilitasi kesiapsiagaan bencana.</p>
                                                    <p>Dalam melaksanakan melaksanakan tugas pokok sebagaimana dimaksud, Seksi Kesiapsiagaan mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Pelaksanaan penyusunan bahan kebijakan teknis dibidang kesiapsiagaan;</li>
                                                        <li>Pelaksanaan kesiapsiagaan bencana;</li>
                                                        <li>Pelaksanaan evaluasi dan pelaporan Seksi Kesiapsiagaan;</li>
                                                        <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Kesiapsiagaan:</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Kesiapsiagaan;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakan teknis di bidang kesiapsiagaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pelaksanaan koordinasi kegiatan bidang kesiapsiagaan kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan koordinasi kesiapsiagaan kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan fasilitasi kegiatan kesiapsiagaan kebencanaan;</li>
                                                        <li>Melaksanakan standardisasi dan prosedur tetap kesiapsiagaan kebencanaan;</li>
                                                        <li>Melaksanakan supervisi kesiapsiagaan kebencanaan;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Kesiapsiagaan;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang kesiapsiagaan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai kesiapsiagaan kebencanaan sebagai bahan penetapan kebijakan Pemerintah Daerah;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Kesiapsiagaan;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Kesiapsiagaan; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                </div>

                                                <div class="tab__content">
                                                    <p><big><strong>KEDARURATAN DAN LOGISTIK</strong></big></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Bidang Kedaruratan dan Logistik mempunyai tugas pokok menyelenggarakan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana Daerah, aspek kedaruratan dan logistik.</p>
                                                    <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud, Bidang Kedaruratan dan Logistik mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Penyelenggaraan pengkajian bahan kebijakan teknis di bidang kedaruratan dan logistik;</li>
                                                        <li>Penyelenggaraan fasilitasi kedaruratan dan logistik;</li>
                                                        <li>Penyelenggaraan evaluasi dan pelaporan Bidang Kedaruratan dan Logistik; dan</li>
                                                        <li>Penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Bidang Kedaruratan dan Logistik:</p>
                                                    <ol>
                                                        <li>Menyelenggarakan pengkajian program kerja Bidang Kedaruratan dan Logistik;</li>
                                                        <li>Menyelenggarakan pengkajian bahan kebijakan di Bidang Kedaruratan dan Logistik;</li>
                                                        <li>Menyelenggarakan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana Daerah, aspek Kedaruratan dan Logistik, meliputi kedaruratan dan logistik;</li>
                                                        <li>Menyelenggarakan koordinasi pelaksanaan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana Daerah, aspek kedaruratan dan logistik;</li>
                                                        <li>Menyelenggarakan pembinaan dan pengendalian teknis di bidang kedaruratan dan logistik;</li>
                                                        <li>Menyelenggarakan pengumpulan dan penyaluran uang dan barang;</li>
                                                        <li>Menyelenggarakan supervisi kedaruratan dan logistik kebencanaan;</li>
                                                        <li>Menyelenggarakan pengkajian tanggap darurat secara cepat dan tepat terhadap lokasi, kerusakan, dan sumberdaya;</li>
                                                        <li>Menyelenggarakan rekomendasi status keadaan darurat bencana;</li>
                                                        <li>Menyelenggarakan pengerahan sumber daya manusia dan peralatan;</li>
                                                        <li>Menyelenggarakan tindak lanjut Laporan Hasil Pemeriksaan lingkup Bidang Kedaruratan dan Logistik;</li>
                                                        <li>Menyelenggarakan pengkajian bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang kedaruratan dan logistik;</li>
                                                        <li>Menyelenggarakan pengkajian bahan saran pertimbangan mengenai bidang kedaruratan dan logistik sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Menyelenggarakan pengendalian pelaksanaan tugas pokok dan fungsi Bidang Kedaruratan dan Logistik;&nbsp;</li>
                                                        <li>Menyelenggarakan evaluasi dan pelaporan Bidang Kedaruratan dan Logistik; dan</li>
                                                        <li>Menyelenggarakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Bidang Kedaruratan dan Logistik membawahkan:</p>
                                                    <ol>
                                                        <li>Seksi Kedaruratan; dan</li>
                                                        <li>Seksi Logistik.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p><strong>1. KEDARURATAN</strong></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Kedaruratan mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi, dan fasilitasi kedaruratan bencana.</p>
                                                    <p>Untuk menyelenggarakan tugas pokok sebagaimana termaksud, Seksi Kedaruratan mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>pelaksanaan penyusunan bahan kebijakan teknis dibidang kedaruratan bencana;</li>
                                                        <li>pelaksanaan fasilitasi kedaruratan bencana;</li>
                                                        <li>pelaksanaan evaluasi dan pelaporan Seksi Kedaruratan; dan</li>
                                                        <li>pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Kedaruratan:</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Kedaruratan;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakan teknis di bidang kedaruratan bencana;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pelaksanaan koordinasi kegiatan bidang kedaruratan bencana, meliputi penyelamatan dan evakuasi korban, hartabenda, perlindungan, pengurusan pengungsi;</li>
                                                        <li>Melaksanakan penyusunan dan pengolahan data serta informasi kedaruratan secara cepat dan tepat terhadap lokasi, kerusahan dan sumber daya;</li>
                                                        <li>Melaksanakan penyusunan bahan rekomendasi penentuan status keadaan darurat bencana;</li>
                                                        <li>Melaksanakan penyusunan bahan dan fasilitasi kedaruratan bencana, meliputi penyelamatan dan evakuasi korban dan harta benda, perlindungan, pengurusan pengungsi;</li>
                                                        <li>Melaksanakan perlindungan dan pengurusan pengungsi;</li>
                                                        <li>Melaksanakan pengerahan sumber daya manusia dan peralatan;</li>
                                                        <li>Melaksanakan penyusunan dan pertanggungjawaban penggunaananggaran kedaruratan bencana;</li>
                                                        <li>Melaksanakan supervisi kedaruratan bencana;</li>
                                                        <li>Melaksanakan penelaahan tanggap darurat secaracepat dan tepat terhadap lokasi, kerusakan dan sumber daya;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Kedaruratan;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang kedaruratan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai kedaruratan bencana sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Kedaruratan;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Kedaruratan; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p><strong>2. LOGISTIK</strong></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Logistik mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi dan fasilitasi logistik kebencanaan.</p>
                                                    <p>Untuk menyelenggarakan tugas pokok sebagaimana termaksud, Seksi Logistik mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Pelaksanaan penyusunan bahan kebijakan teknis di bidang logistik kebencanaan;</li>
                                                        <li>Pelaksanaan logistik kebencanaan;</li>
                                                        <li>Pelaksanaan evaluasi dan pelaporan Seksi Logistik; dan</li>
                                                        <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Logistik:&nbsp;</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Logistik;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakan teknis di bidang logistik kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pelaksanaan koordinasi kegiatan bidang logistik kebencanaan;</li>
                                                        <li>Melaksanakan pengelolaan data dan informasi logistik kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan koordinasi logistik kebencanaan, meliputi pengendalian, pengumpulan dan penyaluran uang serta barang,&nbsp; pertanggungjawaban penggunaan Anggaran Pendapatan dan Belanja Daerah Provinsi Jawa Barat, penyelamatan, pemulihan prasarana dan sarana serta pemenuhan kebuthan dasar;</li>
                                                        <li>Melaksanakan pengadaan barang/jasa untuk kebutuhan logistik kebencanaan;</li>
                                                        <li>Melaksanakan pengerahan logistik kebencanaan;</li>
                                                        <li>Melaksanakan supervisi logistik kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan pertanggungjawaban uang dan barang;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Logistik;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang logistik kebencanaan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai logistik kebencanaan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Logistik;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Logistik; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                </div>

                                                <div class="tab__content">
                                                    <p><big><strong>REHABILITASI DAN REKONTRUKSI</strong></big></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Bidang Rehabilitasi dan Rekonstruksi mempunyai tugas pokok menyelenggarakan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana Daerah aspek rehabilitasi dan rekonstruksi.</p>
                                                    <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud, Bidang Rehabilitasi dan Rekonstruksi, mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Penyelenggaraan pengkajian bahan kebijakan teknis di bidang rehabilitasi dan rekonstruksi;</li>
                                                        <li>Penyelenggaraan fasilitasi rehabilitasi dan rekonstruksi kebencanaan;</li>
                                                        <li>Penyelenggaraan evaluasi dan pelaporan Bidang Rehabilitasi dan Rekonstruksi; dan</li>
                                                        <li>Penyelenggaraan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Bidang Rehabilitasi dan Rekonstruksi:</p>
                                                    <ol>
                                                        <li>Menyelenggarakan pengkajian program kerja Bidang Rehabilitasi dan Rekonstruksi;</li>
                                                        <li>Menyelenggarakan pengkajian bahan kebijakan di bidang rehabilitasi dan rekonstruksi kebencanaan serta kebakaran;</li>
                                                        <li>Menyelenggarakan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana Daerah, meliputi rehabilitasi dan rekonstruksi kebencanaan serta kebakaran;</li>
                                                        <li>Menyelenggarakan koordinasi pelaksanaan fungsi penunjang urusan pemerintahan bidang penanggulangan bencana, aspek rehabilitasi dan rekonstruksi kebencanaan serta kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan dan koordinasi rehabilitasi dan rekonstruksi kebencanaan serta kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan dan fasilitasi rehabilitasi kebencanaan, meliputi perbaikan lingkungan prasarana dan sarana umum, pemberian bantuan perbaikan rumah masyarakat, pelayanan kesehatan, rekonsiliasi dan resolusi konflik serta pemulihan sosial psikologis, sosial, ekonomi, budaya, keamanan dan ketertiban, fungsi pemerintahan dan pelayanan publik;</li>
                                                        <li>Menyelenggarakan pengkajian bahan dan fasilitasi rekonstruksi kebencanaan, meliputi pembangunan kembali prasarana dan sarana serta sarana sosial masyarakat, pembangkitan kembali kehidupan sosial budaya masyarakat, penerapan rancang bangun yang tepat dan penggunaan peralatan yang lebih baik dan tahan bencana, partisipasi dan peran serta lembaga dan organisasi kemasyarakatan, dunia usaha dan masyarakat serta peningkatan kondisi sosial, ekonomi, budaya, fungsi pelayanan publik dan pelayanan utama dalam masyarakat;</li>
                                                        <li>Menyelenggarakan pengkajian bahan pemetaan rawan kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan penyediaan dan pemutakhiran informasi rawan kebakaran dan peta rawan kebakaran;</li>
                                                        <li>Menyelenggarakan pengembangan sistem informasi dan pelaporan kebakaran secara terintegrasi;</li>
                                                        <li>Menyelenggarakan pengkajian bahan penyajian data kebakaran yang akurat dan dapat dipertanggungjawabkan;</li>
                                                        <li>Menyelenggarakan pengkajian penyusunan rencana induk sistem proteksi kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan peningkatan kapasitas sumber daya aparatur pemadam kebakaran Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan pengkajian bahan dan fasilitasi pencapaian target standar pelayanan minimal bidang kebakaran di Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan pengkajian bahan dan fasilitasi penyediaan sarana dan prasarana pemadam kebakaran Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan pengkajian bahan kerjasama antar daerah berbatasan, antar lembaga dan kemitraan dalam pencegahan dan penanggulangan kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian fasilitasi jabatan fungsional analis kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan pendampingan dan penguatan kapasitas penyelenggaraan urusan kebakaran di Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan pengkajian bahan koordinasi pencegahan dan penanggulangan kebakaran antar lembaga pemerintah dan lembaga non pemerintah di provinsi dan antar Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan pengkajian bahan sosialisasi penyelenggaraan urusan kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan komunikasi, informasi dan edukasi kepada pemangku kepentingan dan masyarakat terkait pencegahan dan penanggulangan kebakaran;</li>
                                                        <li>Menyelenggarakan pengkajian bahan bimbingan teknis penyelenggaraan urusan kebakaran terhadap Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan pengkajian bahan pembinaan umum dan teknis penyelenggaraan urusan kebakaran Daerah Kabupaten/Kota;&nbsp;</li>
                                                        <li>Menyelenggarakan pengkajian bahan pengawasan penyelenggaraan urusan kebakaran Daerah Kabupaten/Kota;</li>
                                                        <li>Menyelenggarakan tindak lanjut Laporan Hasil Pemeriksaan lingkup Bidang Rehabilitasi dan Rekonstruksi;</li>
                                                        <li>Menyelenggarakan pengkajian bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang rehabilitasi dan rekonstruksi kebencanaan;</li>
                                                        <li>Menyelenggarakan pengkajian bahan saran pertimbangan mengenai bidang rehabilitasi dan rekonstruksi kebencanaan;</li>
                                                        <li>Menyelenggarakan pengendalian pelaksanaan tugas pokok dan fungsi Bidang Rehabilitasi dan Rekonstruksi;</li>
                                                        <li>&nbsp;Menyelenggarakan evaluasi dan pelaporan Bidang Rehabilitasi dan Rekonstruksi; dan menyelenggarakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p>Bidang Rehabilitasi dan Rekonstruksi membawahkan:</p>
                                                    <ol>
                                                        <li>Seksi Rehabilitasi; dan</li>
                                                        <li>Seksi Rekonstruksi.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p><strong>1. REHABILITASI</strong></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Rehabilitasi mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi dan fasilitasi rehabilitasi kebencanaan.</p>
                                                    <p>Untuk menyelenggarakan tugas pokok sebagaimana termaksud, Seksi Rehabilitasi mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>pelaksanaan penyusunan bahan kebijakan teknis di bidang rehabilitasi kebencanaan;</li>
                                                        <li>Pelaksanaan fasilitasi rehabilitasi kebencanaan;</li>
                                                        <li>Pelaksanaan evaluasi dan pelaporan Seksi Rehabilitasi; dan</li>
                                                        <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Rehabilitasi:</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Rehabilitasi;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakan teknis di bidang rehabilitasi kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan pelaksanaan koordinasi kegiatan bidang rehabilitasi kebencanaan;</li>
                                                        <li>Melaksanakan pengumpulan dan pengolahan data serta informasi rehabilitasi kebencanaan;</li>
                                                        <li>Melaksanakan bahan dan koordinasi rehabilitasi kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan fasilitasi rehabilitasi kebencanaan, meliputi perbaikan lingkungan, prasarana dan sarana umum, pemberian bantuan perbaikan rumah masyarakat, pelayanan kesehatan, rekonsiliasi dan resolusi konflik serta pemulihan sosial psikologis, sosial, ekonomi, budaya, keamanan dan&nbsp; ketertiban, fungsi pemerintahan dan pelayanan publik;</li>
                                                        <li>Melaksanakan pemetaan rawan kebakaran;</li>
                                                        <li>Melaksanakan penyediaan dan pemutakhiran informasi rawan kebakaran dan peta rawan kebakaran;</li>
                                                        <li>Melaksanakan sistem informasi dan pelaporan kebakaran secara terintegrasi;</li>
                                                        <li>Melaksanakan penyajian data kebakaran yang akurat dan dapat dipertanggungjawabkan;</li>
                                                        <li>Melaksanakan penyusunan rencana induk sistem proteksi kebakaran;</li>
                                                        <li>Melaksanakan peningkatan kapasitas sumber daya aparatur pemadam kebakaran Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Rehabilitasi;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang rehabilitasi kebencanaan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai rehabilitasi kebencanaan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Rehabilitasi;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Rehabilitasi; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>&nbsp;</p>
                                                    <p><strong>2. REKONTRUKSI</strong></p>
                                                    <p>Berdasarkan Peraturan Gubernur Jawa Barat Nomor 175 Tahun 2021 Tentang Tugas Pokok, Fungsi, Rincian Tugas Unit, dan Tata Kerja Badan Penanggulangan Bencana Daerah Pemerintah Daerah Provinsi Jawa Barat. Seksi Rekonstruksi mempunyai tugas pokok melaksanakan penyusunan bahan dan melaksanakan kebijakan teknis, koordinasi dan fasilitasi rekonstruksi kebencanaan.</p>
                                                    <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud, Seksi Rekonstruksi, mempunyai fungsi:</p>
                                                    <ol>
                                                        <li>Pelaksanaan penyusunan bahan kebijakan teknis di bidang rekonstruksi kebencanaan;</li>
                                                        <li>Pelaksanaan rekonstruksi kebencanaan;</li>
                                                        <li>Pelaksanaan evaluasi dan pelaporan Seksi Rekonstruksi;</li>
                                                        <li>Pelaksanaan fungsi lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
                                                    <p>Rincian tugas Seksi Rekonstruksi:</p>
                                                    <ol>
                                                        <li>Melaksanakan penyusunan program kerja Seksi Rekonstruksi;&nbsp;</li>
                                                        <li>Melaksanakan penyusunan bahan kebijakan teknis di bidang rekonstruksi kebencanaan;</li>
                                                        <li>Melaksanakan pengumpulan dan pengolahan data serta informasi rekonstruksi kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan koordinasi rekonstruksi kebencanaan;</li>
                                                        <li>Melaksanakan penyusunan bahan dan fasilitasi rekonstruksi kebencanaan, meliputi pembangunan kembali prasarana dan sarana serta sarana sosial masyarakat, pembangkitan kembali kehidupan sosial budaya masyarakat, penerapan rancang bangun yang tepat dan penggunaan peralatan yang lebih baik dan tahan bencana, partisipasi dan peran serta lembaga dan organisasi kemasyarakatan, dunia usaha dan masyarakat serta peningkatan kondisi sosial, ekonomi, budaya, fungsi pelayanan publik dan pelayanan utama dalam masyarakat;</li>
                                                        <li>Melaksanakan fasilitasi pencapaian target standar pelayanan minimal bidang kebakaran di Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan fasilitasi penyediaan sarana dan prasarana pemadam kebakaran Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan kerjasama antar daerah berbatasan, antar lembaga dan kemitraan dalam pencegahan dan penanggulangan kebakaran;</li>
                                                        <li>Melaksanakan jabatan fungsional pemadam kebakaran dan jabatan fungsional analis kebakaran;</li>
                                                        <li>Melaksanakan pendampingan dan penguatan kapasitas penyelenggaraan urusan kebakaran di Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan koordinasi pencegahan dan penanggulangan kebakaran antar lembaga pemerintah dan lembaga non pemerintah di Daerah Provinsi dan antar Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan sosialisasi penyelenggaraan urusan kebakaran;</li>
                                                        <li>Melaksanakan komunikasi, informasi dan edukasi kepada pemangku kepentingan dan masyarakat terkait pencegahan dan penanggulangan kebakaran;</li>
                                                        <li>Melaksanakan bimbingan teknis penyelenggaraan urusan kebakaran terhadap Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan pembinaan umum dan teknis penyelenggaraan urusan kebakaran Daerah Kabupaten/Kota;&nbsp;</li>
                                                        <li>Melaksanakan pengawasan penyelenggaraan urusan kebakaran Daerah Kabupaten/Kota;</li>
                                                        <li>Melaksanakan bahan tindak lanjut Laporan Hasil Pemeriksaan lingkup Seksi Rekonstruksi;</li>
                                                        <li>Melaksanakan penyusunan bahan verifikasi, rekomendasi dan pemantauan terhadap permohonan dan realisasi bantuan keuangan dan hibah/bantuan sosial di bidang rekonstruksi kebencanaan;</li>
                                                        <li>Melaksanakan telaahan staf sebagai bahan pertimbangan pengambilan kebijakan;</li>
                                                        <li>Melaksanakan penyusunan bahan saran pertimbangan mengenai rekonstruksi kebencanaan sebagai bahan penetapan kebijakan Pemerintah Daerah Provinsi;</li>
                                                        <li>Melaksanakan pengendalian pelaksanaan tugas pokok dan fungsi Seksi Rekonstruksi;</li>
                                                        <li>Melaksanakan evaluasi dan pelaporan Seksi Rekonstruksi; dan</li>
                                                        <li>Melaksanakan tugas lain sesuai dengan tugas pokok dan fungsinya.</li>
                                                    </ol>
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Informasi Keuangan
                        </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse04" aria-expanded="false" aria-controls="flush-collapse04">
                                            Laporan Realisasi Anggaran (LRA)
                                        </button>
                                    </h2>
                                    <div id="flush-collapse04" class="accordion-collapse collapse" aria-labelledby="flush-heading04" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/LRA.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse104" aria-expanded="false" aria-controls="flush-collapse104">
                                            Daftar Aset dan Investasi
                                        </button>
                                    </h2>
                                    <div id="flush-collapse104" class="accordion-collapse collapse" aria-labelledby="flush-heading104" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/daftar-aset-dan-investasi.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse204" aria-expanded="false" aria-controls="flush-collapse204">
                                            Neraca
                                        </button>
                                    </h2>
                                    <div id="flush-collapse204" class="accordion-collapse collapse" aria-labelledby="flush-heading204" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                        <iframe src="{{asset('bpbds/neraca.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="accorion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse304" aria-expanded="false" aria-controls="flush-collapse304">
                                            Catatan Atas Laporan Keuangan (CALK)
                                        </button>
                                    </h2>
                                    <div id="flush-collapse304" class="accordion-collapse collapse" aria-labelledby="flush-heading304" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body">
                                        <div class="container">
                                            <iframe src="{{asset('bpbds/calk.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Informasi Jumlah Wajib LHKASN dalam lingkup SKPD Provinsi
                        </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <iframe src="{{asset('bpbds/lkhasn-bpbd-jabar.pdf')}}" frameborder="0"  width="100%" height="600px"></iframe>
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
<!-- Akhir daftar informasi -->

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