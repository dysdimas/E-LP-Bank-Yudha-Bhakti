@extends('layouts.master_admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<?php
$data_user = \App\User::all();
$data_sugcom = \App\Opsugcom::all();
$data_videos = \App\OpvideosDpp::all();
$data_feature = \App\Opfeature::all();
$data_hotnews = \App\Ophot::all();
$data_branch = \App\Ibranch::all();
$data_divisi = \App\Idivision::all();
$data_tech = \App\Itech::all();
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('sukses')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <span>{{ $error }}|</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </ul>
        </div>
        @endif
        <!-- Main row -->
        <div class="row">
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-user"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Users</h5>
                            <h6>{{$data_user->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Suggest</h5>
                            <h6>{{$data_sugcom->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Videos</h5>
                            <h6>{{$data_videos->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fab fa-hubspot"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Feature</h5>
                            <h6>{{$data_feature->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Hot News</h5>
                            <h6>{{$data_hotnews->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Branch</h5>
                            <h6>{{$data_branch->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Division</h5>
                            <h6>{{$data_divisi->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <i class="fas fa-mobile"></i>
                            </div>
                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Tech</h5>
                            <h6>{{$data_tech->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection('content')