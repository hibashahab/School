@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-3">

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

<div class="row"  style="margin-left:.5px;margin-right:.5px">
 <div class="col-lg-12 col-md-12 col-sm-12 custom-file" >
 <input type="file" class="custom-file-input" name="result" >
 <label class="custom-file-label text-center" for="customFile">النتيجه</label>
</div>
</div>

<button type="button" class="btn btn-primary mt-2 text-center mb-3" style="width:50%">ارسال</button>

<div class="row mb-3 mt-3">
<div class="col-lg-10 col-md-11 col-sm-12 mb-1">
 <input type="text" name="class2" class="form-control text-right" placeholder="اسم الطالب">
</div>
<div class="col-lg-2 col-md-1 col-sm-12 text-center">
<button class="btn btn-primary btn-block">بحث</button>
</div>
</div>


<div class="row mb-1">
<div class="col-lg-12 col-md-11 col-sm-12 mb-1">
<div class="table-responsive">
<table class="table mt-2" style="direction:rtl">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>اسم الطالب</th>
    <th>الصف</th>
    <th>الشعبه</th>
    <th>النتيجه</th>
    <th>التحرير</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>الاول</td>
    <td>ج</td>
    <td>1</td>
    <td><a href="">download</a></td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="Updategrade" class="text-light" style="text-decoration: none;">تعديل</a></button>  
    <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button>  
    </td>
</tr>
<tr>
    <td>2</td>
    <td>الثاني</td>
    <td>ب</td>
    <td>1</td>
    <td><a href="">download</a></td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/Updateteacher" class="text-light" style="text-decoration: none;">تعديل</a></button>  
    <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection