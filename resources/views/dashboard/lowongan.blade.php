<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKK SMK Negeri 2 Bangkalan</title>
    <link rel="shortcut icon" href="storage/tab-logo_smkn2bkl.png">
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
            background-color: #f5f5fa
        }

        .halo {
            font-weight: bold;
            padding-bottom: 10px;
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

        #footer {
            background-color: var(--warna-5);
            color: white;
            text-align: center;
            height: 150px;
            padding: 50px 0px;
        }

        #footer a {
            margin-right: 10px;
        }

        #nama-halaman {
            padding: 40px 0 20px 0;
            background-color: var(--warna-6);
            min-height: 40px;
            margin-top: 80px;
        }

        #nama-halaman .halaman {
            padding: 0 120px;
        }

        #nama-halaman h2 {
            font-size: 25px;
            font-weight: 350;
            margin: 0;
        }

        nav ul li a {
            font-size: 18px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="#"><img src="{{ asset('storage\logo-dashboard-bkk-smkn2.jpg') }}" alt="SMKN 2 Logo"
                    class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="#">Lowongan</a></li>
                    <li><a href="/dashboard/perusahaan">Perusahaan</a></li>
                    <li><a href="/dashboard/alumni">Alumni</a></li>
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
                                <h3 class="panel-title">Data Lowongan</h3>
                                <div class="right">
                                    <a href="/dashboard/lowongan/tambah" class="btn btn-primary"><i
                                            class="fa fa-plus"></i> Tambah Data</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="/dashboard/lowongan" method="get">
                                    <div class="input-group">
                                        <input name="cari" class="form-control" type="text"
                                            placeholder="Cari data lowongan" value="{{ request('cari') }}">
                                        <span class="input-group-btn"><button class="btn btn-primary"
                                                type="submit">Cari</button></span>
                                    </div>
                                </form> </br>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Perusahaan</th>
                                            <th>Tanggal</th>
                                            <th>posisi</th>
                                            <th>Penempatan</th>
                                            <th>Gaji</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($lowongan as $job)
                                            <?php
                                            $gaji = $job->gaji;
                                            ?>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $job->judul }}</td>
                                                <td>{{ $job->perusahaan }}</td>
                                                <td>{{ $job->tanggal }}</td>
                                                <td>{{ $job->posisi }}</td>
                                                <td>{{ $job->penempatan }}</td>
                                                <td><?= 'Rp' . number_format($gaji, 0, ',', '.') ?></td>

                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#modalLowongan{{ $job->id }}">
                                                        <i class="fa fa-info-circle" title="Detail"></i>
                                                    </button>
                                                    <a href="/dashboard/lowongan/edit/{{ $job->id }}"
                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            title="Edit Data"></i></a>
                                                    <form action="{{ route('lowongan.destroy', $job->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Yakin ingin menghapus data?')"><i
                                                                class="fa fa-trash" title="Hapus Data"></i></button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <div id="modalLowongan{{ $job->id }}" class="modal fade"
                                                role="dialog" aria-labelledby="modalLabel{{ $job->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title" id="modalLabel{{ $job->id }}">
                                                                <strong>{{ $job->judul }}</strong>
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5><strong>Judul</strong></h5>
                                                            <p>{{ $job->judul }}</p>

                                                            <h5><strong>Perusahaan</strong></h5>
                                                            <p>{{ $job->perusahaan }}</p>

                                                            <h5><strong>Tanggal</strong></h5>
                                                            <p>{{ $job->tanggal }}</p>

                                                            <h5><strong>Deskripsi</strong></h5>
                                                            <p>{{ $job->deskripsi }}</p>

                                                            <h5><strong>Posisi</strong></h5>
                                                            <p>{{ $job->posisi }}</p>

                                                            <h5><strong>Penempatan</strong></h5>
                                                            <p>{{ $job->penempatan }}</p>

                                                            <h5><strong>Gaji</strong></h5>
                                                            <p>Rp{{ number_format($job->gaji, 0, ',', '.') }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Tidak Tersedia.
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

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
