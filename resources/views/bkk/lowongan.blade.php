<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKK SMK Negeri 2 Bangkalan</title>
    <link rel="shortcut icon" href="storage/tab-logo_smkn2bkl.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        /* font-family: 'Poppins', sans-serif; */

        :root {
            --warna-1: blue;
            --warna-2: #de7e3a;
            --warna-3: rgba(16, 110, 234, 0.1);
            --warna-4: rgba(16, 110, 234, 0.10);
            --warna-5: #007bff;
            --warna-6: #d1e3fb;
            --warna-7: #006ada;
            --warna-8: #00be00;
            --warna-9: #00af00;
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            text-align: center;
        }

        /* dropdown onhover */
        .navbar .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .navbar ul a {
            display: inline-block;
            transition: transform 0.3s ease-in-out;

        }

        .navbar ul a:hover {
            color: var(--warna-1);
            transform: translateY(-3px);
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .dropdown-menu {
            display: none;
        }

        #about {
            display: flex;
            justify-content: center;
            background-color: var(--warna-6);
            color: black;
            height: 350px;
            padding: 50px 0px;
        }

        #about iframe {
            margin-right: 25px;
            border: 3px solid var(--warna-5);
            border-radius: 10px;
        }

        #about h2 {
            text-align: left;
            font-weight: bold;
            font-size: 28px;
        }

        #about h3 {
            text-align: left;
            font-weight: bold;
            font-size: 24px;
        }

        #about p {
            font-size: 14px;
            opacity: 0.7;
            text-align: left;
        }


        #about span {
            color: var(--warna-1);
            font-weight: bold;
        }

        #about svg {
            height: 13px;
            fill: var(--warna-5);
        }

        #about ul {
            padding-left: 0;
        }

        #about ul li {
            list-style: none;
            text-align: left;
        }

        #about ul li a {
            color: black;
            opacity: 0.7;
            font-size: 14px;
            text-align: left;
            transition: 0.3s;
            display: inline-block;
            line-height: 2.5;
            text-decoration: none;
        }

        #about ul li a:hover {
            color: var(--warna-1);
        }

        #info-contact,
        #link-terkait {
            margin-right: 25px;
        }

        footer {
            background-color: var(--warna-5);
            color: white;
            text-align: center;
            height: 150px;
            padding: 50px 0px;
        }

        footer a {
            margin-right: 10px;
        }

        #nama-halaman {
            padding: 20px 0;
            background-color: var(--warna-6);
            min-height: 40px;
            margin-top: 80px;
        }

        #nama-halaman .halaman {
            padding: 0 200px 0 200px;
        }

        #nama-halaman h2 {
            font-size: 25px;
            font-weight: 350;
            margin: 0;
        }

        #nama-halaman ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 15px;
        }

        #nama-halaman ol li {
            margin-right: 5px;
        }

        #nama-halaman a {
            text-decoration: none;
            color: var(--warna-5);
        }

        #lowongan {
            margin-top: 30px;
            margin-bottom: 50px;
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
            text-align: left;
        }

        #lowongan h3 {
            font-size: 16px;
            padding-left: 10px;
            padding-bottom: 10px;
        }

        #lowongan h5 {
            font-size: 20px;
            font-weight: 625;
        }

        #lowongan p {
            font-size: 14px;
        }

        .lowongan-info {
            background: white;
            padding: 10px;
            border-radius: 5px;
        }

        .lowongan-card {
            background-color: #dce6f7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px 5px;
            width: 450px;
            border-left: 5px solid #2b7cd9;
        }

        .judul-lowongan {
            font-weight: bold;
            font-size: 18px;
        }

        .tanggal-info {
            font-size: 12px;
            color: #555;
        }

        .action {
            margin-top: 10px;
            text-align: center;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        .btn-detail {
            background-color: var(--warna-5);
            color: white;
        }

        .btn-detail:hover {
            background-color: var(--warna-7);
            color: white;
        }

        .btn-lamar {
            background-color: var(--warna-8);
            color: white;
        }

        .btn-lamar:hover {
            background-color: var(--warna-9);
            color: white;
        }

        #search {
            margin-top: 30px;
            padding: 0 200px 0 200px;
        }

        .jurusan-list {
            margin-top: 10px;
        }

        .jurusan-badge {
            background-color: #e3f2fd;
            color: #0d6efd;
            padding: 3px 8px;
            border-radius: 14px;
            font-size: 12px;
            margin-right: 4px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('storage\logo-bkk-smkn2.jpg') }}" alt="Logo SMKN 2 Bangkalan" height="55"
                    class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visi-misi">Visi & Misi BKK</a></li>
                            <li><a class="dropdown-item" href="/motto">Motto BKK</a></li>
                            <li><a class="dropdown-item" href="/struktur">Struktur BKK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Lowongan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/perusahaan">Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="nama-halaman">
        <div class="halaman d-flex justify-content-between align-items-center">
            <h2>Info Lowongan</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Info Lowongan</li>
                </ol>
            </nav>
        </div>
    </section>

    <section id="search" data-aos="flip-up" data-aos-duration="1000">
        <form action="/lowongan" method="get">
            <div class="input-group">
                <input name="cari" class="form-control" type="text" placeholder="Cari data lowongan"
                    value="{{ request('cari') }}">
                <span class="input-group-btn"><button class="btn btn-primary" type="submit">Cari</button></span>
            </div>
        </form>
    </section>

    <section id="lowongan" data-aos="fade-up" data-aos-duration="1000">
        @if ($lowongan->count() > 0)
            @foreach ($lowongan as $job)
                <div class="lowongan-card" data-aos="zoom-in" data-aos-duration="1000">
                    {{-- judul --}}
                    <h3>{{ $job->judul }}</h3>
                    <div class="lowongan-info">
                        {{-- nama perusahaan --}}
                        <h5>{{ $job->perusahaan }}</h5>
                        {{-- tanggal --}}
                        <span class="tanggal-info"><i class="fa-regular fa-clock" style="color: #555555;"></i>
                            Akhir Pendaftaran: {{ $job->tgl_akhir_daftar }}</span>
                        {{-- posisi --}}
                        <p>{{ $job->posisi }}</p>
                        {{-- Jurusan yang Dibutuhkan --}}
                        <div class="jurusan-list">
                            @php
                                $jurusan = is_array($job->jurusan) ? $job->jurusan : explode(', ', $job->jurusan);
                            @endphp

                            @if (!empty($jurusan) && count($jurusan) > 0)
                                @foreach ($jurusan as $item)
                                    <span class="jurusan-badge">
                                        {{ $item }}
                                    </span>
                                @endforeach
                            @else
                                <span class="text-muted">Tidak ada jurusan spesifik</span>
                            @endif
                        </div>
                    </div>
                    <div class="action">
                        <button class="btn btn-detail" data-bs-toggle="modal"
                            data-bs-target="#lowonganModal{{ $job->id }}"><i class="fa-solid fa-circle-info"
                                style="color: #ffffff;"></i>
                            Detail Lowongan
                        </button>
                        <a href="/dashboard-alumni/lowongan"><button class="btn btn-lamar"><i class="fa-solid fa-check"
                                    style="color: #ffffff;"></i> Lamar</button></a>
                    </div>
                </div>
            @endforeach
        @else
            {{-- Tampilkan kalo hasil pencarian tidak ditemukan --}}
            <div class="alert alert-danger text-center mt-4">
                <strong>Pencarian tidak ditemukan</strong>
                <p>Silakan coba dengan kata kunci lain.</p>
            </div>
        @endif
    </section>

    @foreach ($lowongan as $job)
        <!-- Modal -->
        <div class="modal fade" style="text-align: left" id="lowonganModal{{ $job->id }}" tabindex="-1"
            aria-labelledby="lowonganModalLabel{{ $job->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lowonganModalLabel{{ $job->id }}">Detail Lowongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Judul</h6>
                        <p>{{ $job->judul }}</p>

                        <h6>Perusahaan</h6>
                        <p>{{ $job->perusahaan }}</p>

                        <h6>Tanggal Akhir Pendaftaran</h6>
                        <p>{{ $job->tgl_akhir_daftar }}</p>

                        <h6>Deskripsi</h6>
                        <p>{{ $job->deskripsi }}</p>

                        <h6>Jurusan</h6>
                        <div>
                            @php
                                $jurusan = is_array($job->jurusan) ? $job->jurusan : explode(', ', $job->jurusan);
                            @endphp

                            @if (!empty($jurusan) && $jurusan[0] !== '')
                                @foreach ($jurusan as $item)
                                    <span class="jurusan-badge">{{ $item }}</span>
                                @endforeach
                            @else
                                <p>-</p>
                            @endif
                        </div>

                        <h6>Posisi</h6>
                        <p>{{ $job->posisi }}</p>

                        <h6>Penempatan</h6>
                        <p>{{ $job->penempatan }}</p>

                        <h6>Gaji</h6>
                        <p>Rp{{ number_format($job->gaji, 0, ',', '.') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <p class="mb-0">
        Menampilkan {{ $lowongan->firstItem() }} - {{ $lowongan->lastItem() }} dari
        {{ $lowongan->total() }} data
    </p>
    <div class="d-flex justify-content-center mt-4">
        {{ $lowongan->links('vendor.pagination.bootstrap-5') }}
    </div>

    <section id="about">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6743782644635!2d112.75168237504495!3d-7.047497092954708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd805921a687535%3A0xe56ef0cbff25e78!2sSMK%20Negeri%202%20Bangkalan%20(SMK%20Pusat%20Keunggulan)!5e0!3m2!1sid!2sid!4v1737824431060!5m2!1sid!2sid"
            width="350" height="250" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div id="info-contact">
            <h2>SMKN 2 Bangkalan</h2>
            <p>
                Jl. Halim Perdana Kusuma, Bangkalan
                </br>
                Jawa Timur
                </br>
                <span>Email :</span> smkn2_bkl@yahoo.com
                </br>
                <span>Telp :</span> 0313092223
            </p>
        </div>
        <div id="link-terkait">
            <h3>Link Terkait</h3>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="https://smkn2-bangkalan.sch.id/" target="_blank">Laman Utama SMKN 2 Bangkalan</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Laman E-PKL SMKN 2 Bangkalan</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Disnakertrans Prov. Jatim</a>
                </li>
            </ul>
        </div>
        <div id="layanan">
            <h3>Layanan</h3>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Ketentuan Penggunaan</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Kebijakan Privasi</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Tentang Kami</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Site Map</a>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div id="sosmed">
            <a href="https://web.facebook.com/smkn2bkln/"><svg xmlns="http://www.w3.org/2000/svg" height="25px"
                    viewBox="0 0 512 512">
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                </svg></a>
            <a href="https://www.instagram.com/smkn2_bangkalan/"><svg xmlns="http://www.w3.org/2000/svg"
                    height="25px" viewBox="0 0 448 512">
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg></a>
            <a href="https://www.youtube.com/channel/UCYpbJ6dTs7FDQRcQGyRxcgg"><svg xmlns="http://www.w3.org/2000/svg"
                    height="25px" viewBox="0 0 576 512">
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                </svg></a>
            <a href="https://wa.me/+6281234280648"><svg xmlns="http://www.w3.org/2000/svg" height="25px"
                    viewBox="0 0 448 512">
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg></a>
        </div>
        &copy; Copyright 2025 | SMKN 2 Bangkalan All Rights Reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
