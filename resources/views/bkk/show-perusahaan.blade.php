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
                        Detail Perusahaan
                    </div>
                    <div class="card-body">
                        <h6>Nama Perusahaan</h6>
                        <p>{{ $perusahaan->nama }}</p>
                        <h6>Kode</h6>
                        <p>{{ $perusahaan->kode }}</p>
                        <h6>Alamat</h6>
                        <p>{{ $perusahaan->alamat }}</p>
                        <h6>Kota</h6>
                        <p>{{ $perusahaan->kota }}</p>
                        <h6>Tahun Gabung</h6>
                        <p>{{ $perusahaan->tahun_gabung }}</p>
                        <h6>Standar</h6>
                        <p>{{ $perusahaan->standar }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/perusahaan" class="btn btn-md btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>