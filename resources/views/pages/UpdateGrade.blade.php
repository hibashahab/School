@extends('layout.main')
@section('content')
@include('navbar.nav')

<div class="content">
<div class="container pt-5 pl-5 pr-5">
<div class="row mb-2 text-center">
 <div class="col-lg-4 col-md-4 col-sm-12 mb-1">
 <input list="part" placeholder="الشعبه" class="text-center form-control" name="part">
<datalist id="part">
<option value="ا">ا
    <option value="ب">ب
    <option value="ج">ج
    <option value="د">د
</datalist>
</div> 
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
 <input type="text" name="studentName" class="form-control text-center" placeholder="اسم الطالب">
  </select>
 </div> 
</div>

<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 custom-file">
 <input type="file" class="custom-file-input " name="result">
 <label class="custom-file-label text-center ml-3 mr-3" for="customFile">النتيجه</label>
</div>
</div>

<button type="button" class="btn btn-success mt-2 text-center mb-3"><a href="/grade" class="text-light" style="text-decoration: none;">حفظ</a></button>


</div>
</div>
@endsection