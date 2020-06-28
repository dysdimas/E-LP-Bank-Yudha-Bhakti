@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Edit Data</h4>
        <br>
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
        <!-- form start -->
        <form method="post" action="{{url('/ideprate/update/'.$edit_deprate->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->description}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 1 Bulan</label>
                    <input type="text" name="onem" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->onem}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 3 Bulan</label>
                    <input type="text" name="twom" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->twom}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 6 Bulan</label>
                    <input type="text" name="threem" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->threem}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Suku Bunga 12 Bulan</label>
                    <input type="text" name="twelm" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_deprate->twelm}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Time Post</label>
                    <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly required>
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