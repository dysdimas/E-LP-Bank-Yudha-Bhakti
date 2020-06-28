@extends('layouts.single_user3')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h3 align="center">OJK Files</h3>
                <hr>
                <!-- <input type='text' id='input' onkeyup='searchTable()'> -->
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Search" id='input' onkeyup='searchTable()'>
                </div>
                <br>
                <table id='table' class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title Files</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_ojk as $ojk)
                        <tr>
                            <td>{{$ojk->title}}</td>
                            <td>
                                <a href="{{url('/downloadojk/'.$ojk->filename.'')}}" style="color: red;">Link</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<script>
    function searchTable() {
        var input;
        var saring;
        var status;
        var tbody;
        var tr;
        var td;
        var i;
        var j;
        input = document.getElementById("input");
        saring = input.value.toUpperCase();
        tbody = document.getElementsByTagName("tbody")[0];;
        tr = tbody.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                    status = true;
                }
            }
            if (status) {
                tr[i].style.display = "";
                status = false;
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>
@endsection('content')