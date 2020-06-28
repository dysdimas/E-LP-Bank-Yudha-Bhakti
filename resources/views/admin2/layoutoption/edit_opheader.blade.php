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
        <form method="post" action="{{url('/opheader/update/'.$edit_header->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_header->url}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Menu</label>
                    <input type="text" name="menu" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_header->menu}}">
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