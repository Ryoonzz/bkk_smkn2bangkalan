<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login | BKK SMKN 2 Bangkalan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/tab-logo_smkn2bkl.png') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div data-aos-duration="2000" data-aos="flip-right" class="logo text-center"><img src="{{ asset('storage/logo-bkk-smkn2.jpg') }}"
                                        alt="Logo BKK SMKN 2 Bangkalan" style="height: 80px"></div>
                                <p class="lead">Login ke akun mu</p>
                            </div>

                            <form class="form-auth-small" action="{{ route('postlogin') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="role" class="control-label sr-only">Login sebagai:</label>
                                    <select name="role" class="form-control">
                                        <option value="alumni">Alumni</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="signin-username" class="control-label sr-only">Username</label>
                                    <input name="username" type="text" class="form-control" id="signin-username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password" class="form-control" id="signin-password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group clearfix">

                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text"><a href="/"><i class="fa fa-home"></i> Kembali ke
                                            halaman utama</a></span>
                                </div>
                                {{-- <a href="/" class="btn btn-warning btn-lg btn-block">KEMBALI</a> --}}
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text" data-aos="fade-right" data-aos-duration="2000">
                            <h1 class="heading" style="font-weight: bold;">Bursa Kerja Khusus</h1>
                            <p>SMK Negeri 2 Bangkalan</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	  </script>
</body>

</html>
