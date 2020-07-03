@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>{{$title}}</h4>
        <hr>
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
        <!-- /.row (main row) -->

        <div class="modal-body">
            <!-- form start -->
            <form method="post" action="{{url('/manualrcreport/update/'.$edit_manualrc->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_manualrc->title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload File</label>
                        <input type="file" name="pdf" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                    <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
</section>
<!-- /.content -->
@endsection('content')