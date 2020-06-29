@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Feature</h4>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            Post New Feature
        </button>
        <br>
        <hr>
        <!-- Main row -->
        <div class="d-flex justify-content-center">
            <div>
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
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_opfeature" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">sub-Title</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Create New Post Feature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- form start -->
                        <form method="post" action="{{url('/upfeature')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SubTitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter sub-title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Time</label>
                                    <input type="text" name="time" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Thumbnail</label>
                                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" multiple="true" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Description</label>
                                    <textarea name="description" id="post" class="form-control-file" required>Type here .....</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        <script>
                            CKEDITOR.replace('post');
                        </script>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->

</section>
<!-- /.content -->
<script>
    $(document).ready(function() {
        $('#datatable_opfeature').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.opfeature')}}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'subtitle',
                    name: 'subtitle'
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'time',
                    name: 'time'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });
</script>
@endsection('content')