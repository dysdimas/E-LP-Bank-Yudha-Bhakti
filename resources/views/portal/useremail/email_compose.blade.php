@extends('portal.useremail.layouts_email.master_email')
@section('inbox_mail')
<div class="card">
    <div class="card-body">

        <form>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="To">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
                <div class="summernote">
                    <form method="post" action="{{url('/upfeature')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="description" id="post" class="form-control-file" required>Type here .....</textarea>
                        </div>
                        <div class="btn-toolbar form-group mb-0">
                            <div class="">
                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-save"></i></button>
                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="far fa-trash-alt"></i></button>
                                <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane m-l-10"></i> </button>
                            </div>
                        </div>
                    </form>
                    <script>
                        CKEDITOR.replace('post', {
                            height: 400,
                            baseFloatZIndex: 10005
                        });
                    </script>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection('inbox_mail')