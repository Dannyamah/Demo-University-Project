<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 23:43:04 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title> Swift - University </title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/d_assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Custom Css -->
<link rel="stylesheet" href="/d_assets/css/main.css">
<link href="/d_assets/css/login.css" rel="stylesheet">

<link rel="stylesheet" href="/d_assets/css/themes/all-themes.css"/>
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">

        <h1 class="title"><span>Swift University</span>Login <span class="msg">Sign in to start your session</span></h1>
        @foreach ($errors->all() as $err)
        <p class="text-danger text-center">{{ $err }}</p>
    @endforeach
        <div class="col-sm-12">
            <form id="sign_in" action="{{ route('login') }}" method="POST"> @csrf
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="">
                    <input type="checkbox" id="rememberme" class="filled-in chk-col-pink">
                    <label for="rememberme">Remember Me</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-raised waves-effect g-bg-blush2" >SIGN IN</button>
                    <a href="{{route('register')}}" class="btn btn-raised waves-effect" >SIGN UP</a>
                </div>
                <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
            </form>
        </div>
    </div>
</div>
<div class="theme-bg"></div>
<!-- Jquery Core Js -->
<script src="/d_assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/d_assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/d_assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 23:43:06 GMT -->
</html>
