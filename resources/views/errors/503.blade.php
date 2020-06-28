<!-- @extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable')) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Opps !!!</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{asset('vendor_user/img/core-img/hay.ico')}}">

    <link href="{{asset('vendor_admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <div class="ex-pages">
        <div class="content-center">
            <div class="content-desc-center">
                <div class="container">
                    <div class="card mo-mt-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-1">
                                    <div class="ex-page-content">
                                        <h4 class="mb-4">Sorry, something wrong</h4>
                                        <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{ url()->previous() }}"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <img src="{{asset('vendor_admin/assets/images/error.png')}}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end container -->
            </div>
        </div>

    </div>
    <!-- end error page -->

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