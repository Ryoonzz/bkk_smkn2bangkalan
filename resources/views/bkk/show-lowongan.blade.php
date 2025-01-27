<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKK SMK Negeri 2 Bangkalan</title>
    <link rel="shortcut icon" href="storage/tab-logo_smkn2bkl.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        .container {
            margin-top: 50px;
        }

        h6 {
            font-weight: 350;
        }

        p {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Detail Lowongan
                    </div>
                    <div class="card-body">
                        <h6>Judul</h6>
                        <p>{{ $lowongan->judul }}</p>
                        <h6>Perusahaan</h6>
                        <p>{{ $lowongan->perusahaan }}</p>
                        <h6>tanggal</h6>
                        <p>{{ $lowongan->tanggal }}</p>
                        <h6>Deskripsi</h6>
                        <p>{{ $lowongan->deskripsi }}</p>
                        <h6>Posisi</h6>
                        <p>{{ $lowongan->posisi }}</p>
                        <h6>Penempatan</h6>
                        <p>{{ $lowongan->penempatan }}</p>
                        <h6>Gaji</h6>
                        <p>{{ $lowongan->gaji }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/lowongan" class="btn btn-md btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>