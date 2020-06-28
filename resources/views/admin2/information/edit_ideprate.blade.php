@extends('layouts.master_admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Data</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- form start -->
        <form method="post" action="{{url('/ideprate/update/'.$edit_deprate->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 1 Bulan</label>
                    <input type="text" name="onem" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->onem}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 3 Bulan</label>
                    <input type="text" name="twom" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->twom}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 6 Bulan</label>
                    <input type="text" name="threem" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->threem}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 12 Bulan</label>
                    <input type="text" name="twelm" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->twelm}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Time Post</label>
                    <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
        <script>
            CKEDITOR.replace('post');
        </script>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection('content')