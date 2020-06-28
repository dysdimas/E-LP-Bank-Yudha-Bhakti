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
        <form method="post" action="{{url('/opbreaking/update/'.$edit_breaking->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description" value="{{$edit_breaking->description}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter link url" value="{{$edit_breaking->link}}" required>
                </div>
                <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" hidden readonly>
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