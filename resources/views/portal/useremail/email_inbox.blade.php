@extends('portal.useremail.layouts_email.master_email')
@section('inbox_mail')
<div class="card">
    <div class="btn-toolbar p-3" role="toolbar">
        <div class="btn-group mo-mb-2">
            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
        </div>
    </div>
    <ul class="message-list">

        <li>
            <div class="col-mail col-mail-1">
                <div class="checkbox-wrapper-mail">
                    <input type="checkbox" id="chk20">
                    <label for="chk20" class="toggle"></label>
                </div>
                <a href="#" class="title">me, Susanna (7)</a><span class="star-toggle far fa-star"></span>
            </div>
            <div class="col-mail col-mail-2">
                <a href="#" class="subject"><span class="badge-warning badge mr-2">Freelance</span>Since you asked... and i'm
                    inconceivably bored at the train station –
                    <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                </a>
                <div class="date">Mar. 6</div>
            </div>
        </li>
    </ul>
</div> <!-- card -->
@endsection('inbox_mail')