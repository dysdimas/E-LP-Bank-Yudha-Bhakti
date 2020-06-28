@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Suggestion</h4>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable_sugcom" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- @foreach($data_sugcom as $ds)
                                        <tr>
                                            <td><b>{{$loop->iteration}}</b></td>
                                            <td>{{$ds->nik}}</td>
                                            <td>{{$ds->name}}</td>
                                            <td>{{$ds->message}}</td>
                                            <td>{{$ds->time_post}}</td>
                                            <td>
                                                &nbsp;
                                                <a href="{{url('/opsugcom/delete/'.$ds->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach -->
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
        $('#datatable_sugcom').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.sugcom')}}",
            columns: [{
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