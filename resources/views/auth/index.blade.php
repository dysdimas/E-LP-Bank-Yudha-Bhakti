<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login E-LP Bank Yudha Bhakti</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{asset('vendor_user3/images/favicon.ico')}}">

    <link href="{{asset('vendor_admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="{{url('/')}}" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="wrapper-page">

        <div class="card overflow-hidden account-card mx-3">

            <div class="bg-danger p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">BYB E-LP</h4>
                <p class="text-white-50 mb-4">Login Page</p>
                <!-- <a href="index.html" class="logo logo-admin"><img src="{{asset('vendor_user/img/core-img/hay.ico')}}" height="55" alt="logo"></a> -->
            </div>
            <div class="account-card-content">

                <form action="{{url('/authentic')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="username">Nip</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Enter nip" required>
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('nik') ? ' has-error ' : '' }}">
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                    </div>

                    <div class="form-group row m-t-20 has-feedback{{ $errors->has('nik') ? ' has-error ' : '' }}">
                        <div class="col-sm-6 text-left">
                            <!-- <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a> -->
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-danger w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10 mb-0 row">

                    </div>
                </form>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p>PT. Bank Yudha Bhakti Powered by Digital Banking</p>
        </div>

    </div>
    <!-- end wrapper-page -->


    <!-- jQuery  -->
    <script src="{{asset('vendor_admin/assets/js/jquery.min.js')}}">
    </script>
    <script src="{{asset('vendor_admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('vendor_admin/assets/js/app.js')}}"></script>

</body>

</html>