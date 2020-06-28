@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>{{$title}}</h4>
        <br>
        <hr>
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
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title m-b-20">Reset Password</h4>
                <form class="outer-repeater" method="post" action="{{url('/updatepassworduser/'.Session::get('id').'')}}">
                    {{ csrf_field() }}
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="form-group">
                                <label for="formemail">New Password :</label>
                                <input type="password" class="form-control" name="password" id="formemail" placeholder="Enter your new password...">
                            </div>
                            <div class="form-group">
                                <label for="formemail">Repeat Your Password :</label>
                                <input type="password" class="form-control" name="password2" id="formemail" placeholder="Enter your new password...">
                            </div>
                            <button type="submit" class="btn btn-warning">Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
</section>
<!-- /.content -->
@endsection('content')