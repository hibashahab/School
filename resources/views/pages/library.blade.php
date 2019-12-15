@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5">
<div class="row mb-2 mt-3">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-4 col-md-4 col-sm-12">
 <input type="url" name="studentName" class="form-control text-center" placeholder="link">
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" name="studentName" class="form-control text-center" placeholder="اسم الكتاب">
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-2">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-8 col-md-8 col-sm-8">
<input type="text" name="studentName" class="form-control text-center" placeholder="نبذه عن الكتاب">
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
<div class="row mb-2" style="margin-right:1.5px;margin-left:1.5px">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-8 custom-file">
 <input type="file" class="custom-file-input" name="photo">
 <label class="custom-file-label text-center" for="customFile">صوره</label>
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-8">
 <input list="teacher" placeholder="اسم الاستاذ" class="text-center form-control" name="teacher">
<datalist id="teacher">
<option value="استاذ ا">استاذ ا
    <option value="استاذ ب">استاذ ب
    <option value="استاذ  ج">استاذ ج
    <option value="استاذ د">استاذ د
</datalist>
 </div> 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>



<div class="row mt-3">
<div class="col-lg-2 col-md-6 col-sm-12">
</div>
  <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
  <button class="btn btn-primary"><a href="/library" class="text-light" style="text-decoration:none">قائمه الكتاب</a></button>  
 </div>
  <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
  <button class="btn btn-secondary text-light" >اضافه</button>
  </div>
  <div class="col-lg-2 col-md-6 col-sm-12">
</div>
  </div>


</div>
</div>
@endsection