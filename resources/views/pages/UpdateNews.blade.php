@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5">

<div class="row mb-2 mt-3">

<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-8 col-md-8 col-sm-8">
 <input type="text" name="subject" class="form-control text-center" placeholder="العنوان">
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>


<div class="row mb-2 mt-3">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-8 col-md-8 col-sm-8 ">
 <input type="text" name="content" class="form-control text-center" placeholder="الموضوع">
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-2" style="margin-right:.5px;margin-left:.5px">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-8 custom-file">
 <input type="file" class="custom-file-input" name="photo">
 <label class="custom-file-label text-center" for="customFile">صوره</label>
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>


<div class="row mb-2" style="margin-right:.5px;margin-left:.5px">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-8 custom-file">
 <input type="file" class="custom-file-input" name="video">
 <label class="custom-file-label text-center" for="customFile">فيديو</label>
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>


<div class="row mb-2" style="margin-right:.5px;margin-left:.5px">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-8 custom-file">
 <input type="file" class="custom-file-input" name="files">
 <label class="custom-file-label text-center" for="customFile">ملفات</label>
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<button type="button" class="btn btn-success text-center" style="width:67%"><a href="/news" class="text-light" style="text-decoration: none;">حفظ</a></button>
</div>
</div>
@endsection