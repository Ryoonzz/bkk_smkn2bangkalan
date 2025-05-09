<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKK SMK Negeri 2 Bangkalan</title>
    <link rel="shortcut icon" href="storage/tab-logo_bkk_smkn2bkl.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        /* font-family: 'Poppins', sans-serif; */
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

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
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            height: 100%;
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

        .bg-cover {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            animation: slideBackground 20s infinite;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
        }

        @keyframes slideBackground {
            0% {
                background-image: url('storage/smk2bangkalan.png');
            }

            25% {
                background-image: url('storage/struktur-bkk1.png');
            }

            50% {
                background-image: url('storage/struktur-bkk2.png');
            }

            75% {
                background-image: url('storage/struktur-bkk3.png');
            }

            100% {
                background-image: url('storage/smk2bangkalan.png');
            }
        }

        .content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: var(--warna-1);
            font-size: 60px;
            font-weight: bold;
        }

        .cover-button .btn {
            margin-top: 15px;
            font-weight: 600;
            color: white;
        }

        #sambutan {
            padding-bottom: 50px;
            margin-bottom: 30px;
            font-family: 'Poppins', sans-serif;
            background-color: #e7f1fd;
        }

        #sambutan .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        #sambutan .sambutan-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        #sambutan .sambutan-img img {
            width: 400px;
            border: 5px solid #e7f1fd;
            border-radius: 3px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        #sambutan .sambutan-text {
            flex: 1;
        }

        #sambutan h2 {
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 700;
            padding-top: 50px;
            padding-bottom: 40px;
            color: #007bff;
            text-transform: uppercase;
        }

        #sambutan .sambutan-text p {
            text-align: justify
        }

        #sambutan .sambutan-text a {
            color: blue;
            text-decoration: none;
        }

        #rekapitulasi h2 {
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 700;
            padding: 8px 20px;
            margin-bottom: 30px;
            color: #007bff;
            display: inline-block;
            text-transform: uppercase;
            border-radius: 50px;
        }

        #rekapitulasi .rekapitulasi-field {
            max-width: 90%;
            margin: 3vh auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px 20px;
            justify-content: center;
            text-align: center;
        }

        #rekapitulasi .rekapitulasi-card {
            width: 100%;
            max-width: 280px;
            box-sizing: border-box;
            position: relative;
            padding: 30px;
            border: 2px solid #f7f7f7;
            background-color: var(--warna-4);
            border-radius: 10px;
            transition: border-color 0.3s ease, color 0.3s ease;
            text-align: center;
        }

        #rekapitulasi .rekapitulasi-card h3 {
            font-size: 36px;
            color: #007bff;
        }

        #rekapitulasi .rekapitulasi-card svg {
            width: 55px;
            height: 55px;
            fill: white;
            position: absolute;
            top: -28px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--warna-5);
            padding: 10px;
            color: #fff;
            border-radius: 10px;
            border: 5px solid #ffffff;
        }

        #about {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-color: #d1e3fb;
            color: black;
            height: auto;
            padding: 50px;
            flex-wrap: wrap;
        }

        #about>div {
            margin: 10px;
        }

        #about iframe {
            width: 100%;
            max-width: 350px;
            border: 3px solid #007bff;
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
            text-decoration: none;
            transition: 0.3s;
            display: inline-block;
            line-height: 2.5;
        }

        #about ul li a:hover {
            color: var(--warna-1);
        }

        #info-contact {
            max-width: 300px;
        }

        #link-terkait,
        #layanan {
            min-width: 200px;
        }

        footer {
            background-color: var(--warna-5);
            color: white;
            text-align: center;
            padding: 30px 0px;
        }

        #sosmed {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }

        footer a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: 0.3s;
        }

        footer a:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        footer svg {
            fill: white;
            height: 25px;
            width: 25px;
        }

        #lowongan {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            justify-content: center;
            max-width: 90vw;
            margin: 20px auto;
            text-align: left;
        }

        .lowongan-title h2 {
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 700;
            padding: 8px 20px;
            margin: 0;
            margin-top: 10px;
            color: #007bff;
            display: inline-block;
            text-transform: uppercase;
            border-radius: 50px;
            margin-bottom: 20px;
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

        #lowongan .lowongan-info {
            background: white;
            padding: 10px;
            border-radius: 5px;
        }

        #lowongan .lowongan-card {
            background-color: #dce6f7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px 5px;
            border-left: 5px solid #2b7cd9;
        }

        #lowongan .judul-lowongan {
            font-weight: bold;
            font-size: 18px;
        }

        #lowongan .tanggal-info {
            font-size: 12px;
            color: #555;
        }

        #lowongan .action {
            margin-top: 10px;
            text-align: center;
        }

        #lowongan .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        #lowongan .btn-detail {
            background-color: var(--warna-5);
            color: white;
        }

        #lowongan .btn-detail:hover {
            background-color: var(--warna-7);
            color: white;
        }

        #lowongan .btn-lamar {
            background-color: var(--warna-8);
            color: white;
        }

        #lowongan .btn-lamar:hover {
            background-color: var(--warna-9);
            color: white;
        }

        #testimoni .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        #testimoni .card:hover {
            transform: scale(1.05);
        }

        #testimoni h2 {
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 700;
            margin: 0;
            margin-top: 20px;
            color: #007bff;
            display: inline-block;
            text-transform: uppercase;
            border-radius: 50px;
        }

        #testimoni img {
            height: 250px;
            object-fit: cover;
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

        /* Responsive */
        @media (max-width: 1024px) {
            #sambutan .sambutan-content {
                flex-direction: column;
                text-align: center;
                gap: 30px;
            }

            #sambutan .sambutan-img img {
                width: 300px;
            }

            #rekapitulasi .rekapitulasi-field {
                grid-template-columns: repeat(2, 1fr);
            }

            #lowongan {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 768px) {
            [data-aos] {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }

            h1 {
                font-size: 36px;
            }

            .cover-button {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .cover-button .btn {
                width: 100%;
                text-align: center;
            }

            #sambutan .sambutan-content {
                gap: 20px;
            }

            #sambutan .sambutan-img img {
                width: 250px;
            }

            #sambutan h2 {
                font-size: 18px;
            }

            #sambutan .sambutan-text p {
                font-size: 14px;
            }

            #rekapitulasi .rekapitulasi-field {
                grid-template-columns: repeat(2, 1fr);
            }

            #rekapitulasi .rekapitulasi-card {
                max-width: 100%;
                padding: 25px;
            }

            #rekapitulasi .rekapitulasi-card h3 {
                font-size: 28px;
            }

            #rekapitulasi .rekapitulasi-card svg {
                width: 45px;
                height: 45px;
                top: -22px;
            }

            #lowongan {
                grid-template-columns: 1fr;
            }

            #about {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            #about iframe {
                width: 90%;
            }

            #info-contact,
            #link-terkait,
            #layanan {
                max-width: 90%;
                text-align: center;
            }

            #info-contact h2,
            #info-contact h3,
            #info-contact p,
            #link-terkait h3,
            #layanan h3 {
                text-align: center;
            }
        }

        @media screen and (max-width: 480px) {
            h1 {
                font-size: 28px;
            }

            .cover-button {
                width: 80%;
            }

            #sambutan .sambutan-img img {
                width: 200px;
            }

            #sambutan .sambutan-text p {
                font-size: 13px;
                text-align: justify;
            }

            #sosmed {
                gap: 10px;
            }

            footer a {
                width: 35px;
                height: 35px;
            }

            footer svg {
                height: 20px;
                width: 20px;
            }

            footer {
                padding: 30px 0;
            }
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
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visi-misi">Visi & Misi BKK</a></li>
                            <li><a class="dropdown-item" href="/motto">Motto BKK</a></li>
                            <li><a class="dropdown-item" href="/struktur">Struktur BKK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/lowongan">Lowongan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/perusahaan">Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://bit.ly/SurveySMKN2bkl2024" target="_blank">Survey Kepuasan</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Informasi</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/berita">Berita Terbaru</a></li>
                            <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                            <li><a class="dropdown-item" href="/galeri">Galeri Kegiatan</a></li>
                            <li><a class="dropdown-item" href="https://bit.ly/tracerstudysmkn2bangkalan" target="_blank">Tracer Study</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-cover">
        <div class="bg-overlay"></div>
        <div class="content container">
            <h1 class="bkk-title" data-aos="fade-zoom-in" data-aos-duration="1500">BURSA KERJA KHUSUS (BKK)</h1>
            <h1 data-aos="fade-zoom-in" data-aos-duration="1500">SMKN 2 BANGKALAN</h1>

            <div class="cover-button">
                <a href="/login" class="btn btn-primary" data-aos="fade-right"><i class="fa-solid fa-person"></i>
                    ALUMNI</a>
                <a href="/perusahaan" class="btn btn-warning" data-aos="fade-left"><i class="fa-regular fa-building"
                        style="color: #ffffff;"></i>
                    PERUSAHAAN</a>
            </div>
        </div>
    </section>

    <section id="sambutan" data-aos="fade-zoom-in">
        <h2>Sambutan Kepala SMK Negeri 2 Bangkalan</h2>
        <div class="container">
            <div class="sambutan-content">
                <div class="sambutan-img" data-aos="flip-right" data-aos-duration="1100">
                    <img src="storage/bu-hazizah.jpg" alt="Kepala BKK SMKN 2 Bangkalan">
                </div>
                <div class="sambutan-text" data-aos="zoom-in" data-aos-duration="1000">
                    <p style="text-align: center;">Assalamu'alaikum Wr. Wb.</p>
                    <p>Selamat datang di laman <a href="#sambutan">bkk.smkn2bkl.sch.id</a>, laman ini disediakan sebagai
                        sumber
                        informasi yang dibutuhkan khususnya oleh warga sekolah dan juga masyarakat secara umum. Melalui
                        laman
                        ini
                        informasi tentang <strong>Bursa Kerja Khusus (BKK)</strong> di <strong>SMK Negeri 2
                            Bangkalan</strong>
                        dapat
                        dengan mudah diakses oleh
                        siapapun yang memerlukannya.
                    </p>
                    <p>Sebagaimana diketahui bersama, perkembangan teknologi, khususnya teknologi Informasi dan
                        Komunikasi
                        saat
                        ini
                        sudah sedemikian pesat dan merambah ke semua sektor kehidupan tidak terkecuali di dalamnya
                        adalah
                        sektor
                        pendidikan. Internet sebagai salah satu bagian dari perkembangan teknologi informasi dan
                        komunikasi
                        dari
                        hari ke hari menunjukkan perkembangan yang sangat signifikan. melalui internet kita dapat
                        menjumpai
                        aneka
                        referensi, jurnal, maupun hasil penelitian dalam jumlah yang melimpah. Materi-materi yang
                        disajikan
                        di
                        internet cenderung lebih up to date dibandingkan dengan yang disajikan dalam bentuk
                        tertulis/buku.
                        Sehubungan dengan hal tersebut SMK Negeri 2 Bangkalan berupaya mengoptimalkan penggunaan
                        jaringan
                        internet
                        yang sudah ada di sekolah agar peningkatan mutu sumber daya manusia dan mutu pendidikan dapat
                        segera
                        tercapai.
                    </p>
                    <p>Kelebihan lain dari internet adalah dapat menghadirkan informasi yang dibutuhkan tanpa mengenal
                        batas
                        geografis. Para pengguna internet dapat tukar menukar informasi dengan berbagai pihak disegala
                        penjuru
                        dunia
                        dalam waktu singkat dan dengan biaya yang relatif murah. Salah satu fasilitas yang ada di
                        internet
                        yang
                        dapat dipakai untuk tukar-menukar dan berbagi informasi adalah dengan menggunakan website. Untuk
                        itulah
                        website ini dibuat, dengan tujuan agar pihak sekolah dapat menyampaikan informasi tentang dunia
                        pendidikan
                        dan sekaligus menjalin komunikasi antara pihak sekolah dengan guru, orang tua/ wali murid,
                        siswa,
                        alumni,
                        dan stakeholder. Mudah-mudahan dengan optimalisasi penggunaan internet dan website ini,
                        peningkatan
                        mutu
                        pendidikan dan komunikasi global dapat segera terwujud.
                    </p>
                    <p style="text-align: center;">Wassalamu'alaikum Wr. Wb.</p>
                    <p>Kepala Sekolah</p>
                    <p>Nur Hazizah, S.Pd, M.Pd</p>

                </div>
            </div>
        </div>
    </section>

    <section id="rekapitulasi" data-aos="fade-up" data-aos-duration="1000">
        <div class="rekapitulasi-title" data-aos="fade-up" data-aos-duration="1000">
            <h2>Rekapitulasi</h2>
            <p></p>
        </div>

        <div class="rekapitulasi-field" data-aos="flip-up" data-aos-duration="1000">
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M297.2 248.9C311.6 228.3 320 203.2 320 176c0-70.7-57.3-128-128-128S64 105.3 64 176c0 27.2 8.4 52.3 22.8 72.9c3.7 5.3 8.1 11.3 12.8 17.7c0 0 0 0 0 0c12.9 17.7 28.3 38.9 39.8 59.8c10.4 19 15.7 38.8 18.3 57.5L109 384c-2.2-12-5.9-23.7-11.8-34.5c-9.9-18-22.2-34.9-34.5-51.8c0 0 0 0 0 0s0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C27.6 247.9 16 213.3 16 176C16 78.8 94.8 0 192 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4c0 0 0 0 0 0s0 0 0 0c-12.3 16.8-24.6 33.7-34.5 51.8c-5.9 10.8-9.6 22.5-11.8 34.5l-48.6 0c2.6-18.7 7.9-38.6 18.3-57.5c11.5-20.9 26.9-42.1 39.8-59.8c0 0 0 0 0 0s0 0 0 0s0 0 0 0c4.7-6.4 9-12.4 12.7-17.7zM192 128c-26.5 0-48 21.5-48 48c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-44.2 35.8-80 80-80c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0 384c-44.2 0-80-35.8-80-80l0-16 155 0 0 16c0 44.2-35.8 80-80 80z" />
                </svg>
                <h3>10</h3>
                <p>Kompetensi Keahlian </br> (Aktif) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path
                        d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 384l0-128 16 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-288 56 0 64 0 16 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-16 0 0-64 192 0 0 192-192 0 0-32-64 0 0 48c0 26.5 21.5 48 48 48l224 0c26.5 0 48-21.5 48-48l0-224c0-26.5-21.5-48-48-48L368 0c-26.5 0-48 21.5-48 48l0 80-76.9 0-65.9 0c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9 120 480c0 17.7 14.3 32 32 32s32-14.3 32-32z" />
                </svg>
                <h3>1,923</h3>
                <p>Peserta Didik </br> (Aktif) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z" />
                </svg>
                <h3>112</h3>
                <p>Lowongan </br> (Aktif) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M48 0C21.5 0 0 21.5 0 48L0 464c0 26.5 21.5 48 48 48l96 0 0-80c0-26.5 21.5-48 48-48s48 21.5 48 48l0 80 96 0c26.5 0 48-21.5 48-48l0-416c0-26.5-21.5-48-48-48L48 0zM64 240c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zm112-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM80 96l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM272 96l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16z" />
                </svg>
                <h3>221</h3>
                <p>Perusahaan </br> (Terdaftar) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-building-check" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514" />
                    <path
                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z" />
                    <path
                        d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                </svg>
                <h3>129</h3>
                <p>Perusahaan </br> (MoU dengan Sekolah) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-buildings" viewBox="0 0 16 16">
                    <path
                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                    <path
                        d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
                </svg>
                <h3>147</h3>
                <p>Perusahaan </br> (Skala Kota/Provinsi) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                    <path
                        d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
                </svg>
                <h3>57</h3>
                <p>Perusahaan </br> (Skala Nas./Internasional) </p>
            </div>
            <div class="rekapitulasi-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-check" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                    <path
                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                <h3>4,852</h3>
                <p>Total Alumni </br> (Terdaftar) </p>
            </div>

        </div>
    </section>

    <div class="lowongan-title" data-aos="fade-up" data-aos-duration="1000">
        <h2>Lowongan Terbaru</h2>
        <p></p>
    </div>
    <section id="lowongan" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        @foreach ($lowongan as $job)
            <div class="lowongan-card" data-aos="zoom-in" data-aos-duration="1000">
                {{-- judul --}}
                <h3>{{ $job->judul }}</h3>
                <div class="lowongan-info">
                    {{-- nama perusahaan --}}
                    <h5>{{ $job->perusahaan }}</h5>
                    {{-- tanggal --}}
                    <span class="tanggal-info"><i class="fa-regular fa-clock" style="color: #555555;"></i>
                        {{ $job->tgl_akhir_daftar }}</span>
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
    </section>

    @foreach ($lowongan as $job)
        <!-- Modal -->
        <div class="modal fade" style="text-align: left;" id="lowonganModal{{ $job->id }}" tabindex="-1"
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

                        <h6>Tanggal</h6>
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

    <section id="testimoni" data-aos="fade-up" data-aos-duration="1000">
        <div class="testimoni-title" data-aos="fade-up" data-aos-duration="1000">
            <h2>Testimoni</h2>
            <p></p>
        </div>
        <div class="container my-5">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4" data-aos="zoom-in-right" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ asset('storage\contoh-testimoni1.jpg') }}" class="card-img-top" alt="Alumni 1">
                        <div class="card-body text-center bg-light">
                            <h5 class="fw-bold">Achmad Dandy C R</h5>
                            <p>Bekerja di PT Mitra Pedagang Indonesia Tbk sebagai tim Marketing</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4" data-aos="zoom-in-up" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ asset('storage\contoh-testimoni2.jpg') }}" class="card-img-top" alt="Alumni 2">
                        <div class="card-body text-center bg-light">
                            <h5 class="fw-bold">M Ibaneza Fendera A.</h5>
                            <p>Bekerja di PT Mitra Pedagang Indonesia Tbk sebagai tim Marketing</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-4" data-aos="zoom-in-left" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ asset('storage\contoh-testimoni3.jpg') }}" class="card-img-top" alt="Alumni 3">
                        <div class="card-body text-center bg-light">
                            <h5 class="fw-bold">Muhammad Gaza Alfatih E.</h5>
                            <p>Bekerja di PT Mitra Pedagang Indonesia Tbk sebagai tim Marketing
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="https://smkn2-bangkalan.sch.id/" target="_blank">Laman Utama SMKN 2 Bangkalan</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Laman E-PKL SMKN 2 Bangkalan</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Ketentuan Penggunaan</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Kebijakan Privasi</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                    <a href="#" target="_blank">Tentang Kami</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
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
