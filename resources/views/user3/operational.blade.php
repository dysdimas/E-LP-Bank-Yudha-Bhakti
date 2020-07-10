@extends('layouts.single_user3')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h3 align="center">Operational Files</h3>
                <hr>
                <marquee behavior="10" direction="10" scrollamount="10" style="color:red;">Tindakan apapun yang dilakukan user pada website ini akan tercatat di activity log kami, maka bijaksana dan jangan menyalahgunakan berkas-berkas penting tersebut</marquee>
                <!-- The button used to copy the text -->

                <!-- <input type='text' id='input' onkeyup='searchTable()'> -->
                <!-- The text field -->


                <!-- The button used to copy the text -->


                <hr>

                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Search" id='input' onkeyup='searchTable()'>
                </div>
                <table id='table' class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title Files</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_operational as $fun)
                        <tr>
                            <td><a href="{{$fun->url}}" target="_blank" style="color:red;">{{$fun->title}}</a></td>

                            <td>

                                <button class="thm-btn" style="font-size: 12px;"><a style="color: white;" href="{{$fun->url}}" target="_blank" style="color: red;width: 100%;height: 100%;">Read</a></button>
                                <!-- <embed src="{{url('/readfunding/'.$fun->filename.'')}}#toolbar=0&navpanes=0&scrollbar=0" width="425" height="425" oncontextmenu="return false" style="pointer-events:none;" /> -->

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