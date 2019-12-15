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
<button class="btn btn-primary btn-block mb-5 mr-3 ml-3 mb-2">اضافه</button>
</div>

<div class="row">
<div class="col-lg-10 col-md-11 col-sm-12 ">
 <input type="text" name="TeacherName2" class="form-control text-center" placeholder="اسم الاستاذ">
</div>
<div class="col-lg-2 col-md-1 col-sm-12">
<button class="btn btn-primary btn-block">بحث</button>
</div>
</div>


<div class="table-responsive">
<table class="table mt-2" style="direction:rtl">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>اسم الطالب</th>
    <th>الصف</th>
    <th>المبلغ</th>
    <th>التحرير</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>علي</td>
    <td>الاول</td>
    <td>600$</td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/Updatepayment" class="text-light" style="text-decoration: none;">تعديل</a></button>  
    <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button>  
    </td>
</tr>
<tr>
    <td>2</td>
    <td>باسم</td>
    <td>الثاني</td>
    <td>1000$</td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/Updatepayment" class="text-light" style="text-decoration: none;">تعديل</a></button>  
    <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button> </td>
</tr>
</tbody>
</table>

</div>
</div>
</div>
@endsection