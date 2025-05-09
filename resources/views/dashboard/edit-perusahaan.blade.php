<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKK SMK Negeri 2 Bangkalan</title>
    <link rel="icon" type="image/jpg" sizes="96x96" href="{{ asset('storage/tab-logo_bkk_smkn2bkl.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
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
            background-color: #f5f5fa;
            padding-top: 75px;
        }

        .navbar-toggle {
            margin-right: 15px;
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-nav>li>a {
            font-size: 18px;
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

        #footer {
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

        #footer a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: 0.3s;
        }

        #footer a:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        #footer svg {
            fill: white;
            height: 25px;
            width: 25px;
        }

        #nama-halaman {
            padding: 20px 0;
            background-color: var(--warna-6);
            min-height: 40px;
        }

        #nama-halaman .halaman {
            padding: 0 200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        #nama-halaman h2 {
            font-size: 25px;
            font-weight: 350;
            margin: 0;
            white-space: nowrap;
        }

        @media (max-width: 992px) {
            #nama-halaman .halaman {
                padding: 0 50px;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 65px;
            }

            .navbar-nav {
                text-align: center;
            }

            .navbar-nav>li {
                float: none;
                display: block;
            }

            .navbar-nav>li>a {
                font-size: 15px;
            }

            #nama-halaman .halaman {
                flex-direction: column;
                text-align: center;
                padding: 0 30px;
            }

            #nama-halaman h2 {
                font-size: 22px;
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

            .panel-title {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            #nama-halaman .halaman {
                padding: 0 20px;
            }

            #nama-halaman h2 {
                font-size: 20px;
            }

            #footer a {
                width: 35px;
                height: 35px;
            }

            #footer svg {
                height: 20px;
                width: 20px;
            }

            #footer {
                padding: 30px 0;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/logo-dashboard-bkk-smkn2.jpg') }}" alt="BKK SMKN 2 Logo"
                        class="img-responsive logo">
                </a>
            </div>

            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/dashboard/lowongan">Lowongan</a></li>
                    <li><a href="/dashboard/perusahaan">Perusahaan</a></li>
                    <li><a href="/dashboard/alumni">Alumni</a></li>
                    <li><a href="/dashboard/lamaran">Lamaran</a></li>
                    <li><a href="/dashboard/berita">Berita</a></li>
                    <li><a href="/dashboard/galeri">Galeri</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="nama-halaman">
        <div class="halaman d-flex justify-content-between align-items-center">
            <h2>Dashboard Admin</h2>
        </div>
    </section>


    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Data Perusahaan</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @php
                                        $kerjasamaList = ['Guru tamu', 'Prakerin', 'Sinkronisasi kurikulum'];
                                    @endphp
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3 {{ $errors->has('nama') ? 'has-error' : '' }}">
                                        <label for="InputNama" class="form-label">Nama Perusahaan</label>
                                        <input name="nama" type="text" class="form-control" id="InputNama"
                                            placeholder="Contoh: PT ABCD" value="{{ old('nama', $perusahaan->nama) }}">
                                        @if ($errors->has('nama'))
                                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                                        @endif
                                    </div> </br>

                                    <div class="mb-3" {{ $errors->has('kode') ? 'has-error' : '' }}>
                                        <label for="InputKode" class="form-label">Kode</label>
                                        <input name="kode" type="text" class="form-control" id="InputKode"
                                            placeholder="Contoh: P0001" value="{{ old('kode', $perusahaan->kode) }}">
                                        @if ($errors->has('kode'))
                                            <span class="text-danger">{{ $errors->first('kode') }}</span>
                                        @endif
                                    </div> </br>

                                    <div class="form-group">
                                        <label for="InputAlamat" class="form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap Perusahaan" id="InputAlamat"
                                            style="height: 100px">{{ old('alamat', $perusahaan->alamat) }}</textarea>
                                    </div>

                                    <div class="mb-3" {{ $errors->has('kota') ? 'has-error' : '' }}>
                                        <label for="InputKota" class="form-label">Kota</label>
                                        <input name="kota" type="text" class="form-control" id="InputKota"
                                            placeholder="Contoh: Bangkalan/Surabaya/Jakarta"
                                            value="{{ old('kota', $perusahaan->kota) }}">
                                        @if ($errors->has('kota'))
                                            <span class="text-danger">{{ $errors->first('kota') }}</span>
                                        @endif
                                    </div> </br>

                                    <div class="mb-3" {{ $errors->has('tahun_gabung') ? 'has-error' : '' }}>
                                        <label for="InputTahunGabung" class="form-label">Tahun Gabung</label>
                                        <input name="tahun_gabung" type="text" class="form-control"
                                            id="InputTahunGabung" placeholder="Contoh: 2020"
                                            value="{{ old('tahun_gabung', $perusahaan->tahun_gabung) }}">
                                        @if ($errors->has('tahun_gabung'))
                                            <span class="text-danger">{{ $errors->first('tahun_gabung') }}</span>
                                        @endif
                                    </div> </br>

                                    <div class="mb-3" {{ $errors->has('standar') ? 'has-error' : '' }}>
                                        <label for="InputStandar" class="form-label">Standar</label>
                                        <input name="standar" type="text" class="form-control" id="InputStandar"
                                            placeholder="Contoh: Kabupaten/Nasinal/Internasional"
                                            value="{{ old('standar', $perusahaan->standar) }}">
                                        @if ($errors->has('standar'))
                                            <span class="text-danger">{{ $errors->first('standar') }}</span>
                                        @endif
                                    </div> </br>

                                    <div class="mb-3 {{ $errors->has('mou') ? 'has-error' : '' }}">
                                        <label for="InputMoU" class="form-label">MoU</label>
                                        <select name="mou" class="form-control" id="InputMoU">
                                            <option value="Ya"
                                                {{ old('mou', $perusahaan->mou) == 'Ya' ? 'selected' : '' }}>Ya
                                            </option>
                                            <option value="Tidak"
                                                {{ old('mou', $perusahaan->mou) == 'Tidak' ? 'selected' : '' }}>Tidak
                                            </option>
                                        </select>
                                    </div> </br>

                                    <div class="mb-3 {{ $errors->has('umkm') ? 'has-error' : '' }}">
                                        <label for="InputUMKM" class="form-label">UMKM</label>
                                        <select name="umkm" class="form-control" id="InputUMKM">
                                            <option value="Ya"
                                                {{ old('umkm', $perusahaan->umkm) == 'Ya' ? 'selected' : '' }}>Ya
                                            </option>
                                            <option value="Tidak"
                                                {{ old('umkm', $perusahaan->umkm) == 'Tidak' ? 'selected' : '' }}>Tidak
                                            </option>
                                        </select>
                                    </div> </br>

                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kerjasama</label><br>
                                        <input type="hidden" name="kerjasama" value="">
                                        @php
                                            $selectedKerjasama = is_array($perusahaan->kerjasama)
                                                ? $perusahaan->kerjasama
                                                : explode(', ', $perusahaan->kerjasama);
                                        @endphp
                                        @foreach ($kerjasamaList as $kerjasama)
                                            <input type="checkbox" name="kerjasama[]" value="{{ $kerjasama }}"
                                                {{ is_array(old('kerjasama', $selectedKerjasama)) && in_array($kerjasama, old('kerjasama', $selectedKerjasama)) ? 'checked' : '' }}>
                                            {{ $kerjasama }} <br>
                                        @endforeach
                                    </div> </br>

                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <section id="footer">
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
    </section>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('sukses'))
            toastr.success('{{ Session::get('sukses') }}', 'Sukses');
        @endif
    </script>
</body>

</html>
