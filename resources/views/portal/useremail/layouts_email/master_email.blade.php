@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>{{$title}}</h4>
        <br>
        <hr>
        <!-- Main row -->
        <div class="container-fluid">

            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <!-- Left sidebar -->
                    <div class="email-leftbar card">
                        <a href="{{url('/compose')}}" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>

                        <div class="mail-list m-t-20">
                            <a href="{{url('/email')}}" class="active">Inbox <span class="ml-1">(18)</span></a>
                            <a href="#">Draft</a>
                            <a href="#">Sent Mail</a>
                            <a href="#">Trash</a>
                        </div>
                    </div>
                    <!-- End Left sidebar -->


                    <!-- Right Sidebar -->
                    <div class="email-rightbar mb-3">
                        @yield('inbox_mail')
                    </div> <!-- end Col-9 -->

                </div>

            </div><!-- End row -->


        </div>
        <!-- container-fluid -->

</section>
<!-- /.content -->

@endsection('content')