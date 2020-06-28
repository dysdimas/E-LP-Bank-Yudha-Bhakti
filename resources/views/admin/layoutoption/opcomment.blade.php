@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Full Comment</h4>
        <br>
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

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Full comment from branch news
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_commentbranch" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Comment For ?</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Full comment from division news
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_commentdivisi" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Comment For ?</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Full comment from feature news
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_commentfeature" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Comment For ?</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Full comment from hot news
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_commenthotnews" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Comment For ?</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Full comment from tech news
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_commenttech" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Comment For ?</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row (main row) -->
</section>
<!-- /.content -->
<script>
    $(document).ready(function() {
        $('#datatable_commentbranch').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.commentbranch')}}",
            columns: [{
                    data: 'cabang',
                    name: 'cabang'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'comment',
                    name: 'comment'
                },
                {
                    data: 'time_post',
                    name: 'time_post'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
        $('#datatable_commentdivisi').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.commentdivisi')}}",
            columns: [{
                    data: 'divisi',
                    name: 'divisi'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'comment',
                    name: 'comment'
                },
                {
                    data: 'time_post',
                    name: 'time_post'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
        $('#datatable_commentfeature').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.commentfeature')}}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'comment',
                    name: 'comment'
                },
                {
                    data: 'time_post',
                    name: 'time_post'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
        $('#datatable_commenthotnews').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.commenthotnews')}}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'comment',
                    name: 'comment'
                },
                {
                    data: 'time_post',
                    name: 'time_post'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
        $('#datatable_commenttech').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.commenttech')}}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'comment',
                    name: 'comment'
                },
                {
                    data: 'time_post',
                    name: 'time_post'
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