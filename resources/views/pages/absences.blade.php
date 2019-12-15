@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-4">
<div class="row">

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-4 col-md-4 col-sm-12">
<input list="class" placeholder="الصف" class="text-center form-control" name="class">
<datalist id="class">
<option value="الاول">الاول
    <option value="الثاني">الثاني
    <option value="الثالث">الثالث
    <option value="الرابع">الرابع
    <option value="الخامس">الخامس
    <option value="السادس">السادس
</datalist>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" name="sudent" class="form-control text-right" placeholder="اسم الطالب">
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
<div>
<div class="mt-5 text-center text-primary">
<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input mr-4" id="radio1" name="example" value="absences">
    <label class="custom-control-label" for="radio1">غياب</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input mr-4" id="radio2" name="example" value="avacation">
    <label class="custom-control-label" for="radio2">اجازه</label>
  </div>
  </div>

  <div class="row mt-5">
  
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div class="col-lg-4 col-md-4 col-sm-4">
  <button class="btn btn-danger"><a href="/viewAbsence" class="text-light" style="text-decoration:none">عرض الغيابات</a></button>  
   
 </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
  <button class="btn btn-primary text-light" ><a href="/viewAbsence" class="text-light" style="text-decoration:none">اضافه</a></button>
  </div>
  
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  </div>
  </div>
</div>
</div>
@endsection