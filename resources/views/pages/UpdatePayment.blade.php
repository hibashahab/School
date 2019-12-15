@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-3">
<div class="row mb-2 text-center">
 <div class="col-lg-4 col-md-4 col-sm-12 mb-1">  
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
 <input type="text" name="fatherName" class="form-control text-center" placeholder="ولي امر الطالب">
 </div> 
 <div class="col-lg-4 col-md-4 col-sm-12 mb-1">
 <input type="text" name="studentName" class="form-control text-center" placeholder="اسم الطالب">
</div> 
</div>
<div class="row mb-2 text-center">
 <div class="col-lg-12 col-md-12 col-sm-12 mb-1">
 <input type="text" name="money" class="form-control text-center" placeholder="المبلغ">
</div>
<button class="btn btn-success btn-block mb-5 mr-3 ml-3 mb-2"><a href="/payment" class="text-light" style="text-decoration: none;">حفظ</a></button>
</div>
</div>
@endsection