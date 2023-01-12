<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 23:44:08 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Swift - University </title>
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
        <h1 class="title"><span>Swift University</span>Register <span class="msg">Register a new membership</span></h1>
        @foreach ($errors->all() as $err)
        <p class="text-danger text-center">{{ $err }}</p>
    @endforeach
        <div class="col-sm-12">
            <form id="sign_up" action="{{ route('add.lecturer') }}" method="POST" enctype="multipart/form-data"> @csrf
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" value="2"  name="role_id" placeholder="Role" required="" readonly>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                </span>
                <div class="form-line">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                </div>
            </div>
            <div >
                <div class="dz-message">
                    <div class="drag-icon-cph"> <i class="material-icons">Upload Lecturer
                            Image</i> </div>
                </div>
                <div class="fallback">
                    <input name="image" type="file" />
                </div>
            </div>
            <div class="input-group">
                <div class="form-group drop-custum">
                    <select name="course_id" class="form-control show-tick">
                        <option>-- Select Lecturer Course --</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}"> {{ $course->name }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="form-group drop-custum">
                    <select name="semester_id" class="form-control show-tick">
                        <option>-- Select Semester --</option>
                        @foreach ($semesters as $semester)
                            <option value="{{ $semester->id }}"> {{ $semester->name }} </option>
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-lock"></i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-lock"></i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password" required="">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
            </div>
            <div class="text-center">
                <button class="btn btn-raised waves-effect g-bg-blush2" >SAVE</button>
                <a href="{{route('dashboard')}}" class="btn btn-raised waves-effect" > CANCEL</a>
            </div>

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

<!-- Mirrored from thememakker.com/templates/swift/university/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 23:44:08 GMT -->
</html>
