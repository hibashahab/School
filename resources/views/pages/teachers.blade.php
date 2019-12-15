@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container pt-5 pl-5 pr-5">
<div class="row mb-2 text-center">

 <div class="col-lg-6 col-md-6 col-sm-6 mb-1">
 <input type="text" name="subject" class="form-control text-center" placeholder="الماده">
 </div> 
 <div class="col-lg-6 col-md-6 col-sm-6">
 <input type="text" name="TeacherName" class="form-control text-center" placeholder="اسم الاستاذ">
 </div> 

</div>
<div class="row" style="margin-right:.5px;margin-left:.5px">

 <div class="col-lg-12 col-md-12 col-sm-12 custom-file">
 <input type="file" class="custom-file-input" name="Teacherphoto">
 <label class="custom-file-label text-center" for="customFile">صوره</label>
</div>

</div>
<button type="button" class="btn btn-primary mt-3 mb-3  btn-block" style="width:67%;margin:auto">اضافه</button>
<hr>

<div class="row">
<div class="col-lg-10 col-md-11 col-sm-12 mb-1">
 <input type="text" name="TeacherName2" class="form-control text-center" placeholder="اسم الاستاذ">
</div>
<div class="col-lg-2 col-md-1 col-sm-12 text-center">
<button class="btn btn-primary btn-block text-center" style="width:100%;margin:auto">بحث</button>
</div>

</div>
</div>
<div class="row">

  <div class="col-lg-1 col-md-1 cpl-sm-1"></div>
<div class="col-lg-10 col-md-12 col-sm-12">
<div class="table-responsive">
<table class="table mt-2 table-borderless" style="direction:rtl">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>اسم الاستاذ</th>
    <th>الماده</th>
    <th>التحرير</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>علي</td>
    <td>رياضيات</td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/Updateteacher" class="text-light">تعديل</a></button>  
    <button class="btn btn-danger mb-1" style="width:60px">حذف</button>  
    </td>
</tr>
<tr>
    <td>2</td>
    <td>علي</td>
    <td>رياضيات</td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/Updateteacher" class="text-light" style="text-decoration: none;">تعديل</a></button>  
    <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button>  
    </td>
</tr>
</tbody>

</table>
</div>

 <div class="col-lg-1 col-md-1 col-sm-1 custom-file"></div></div>
</div>

</div>
</div>

@endsection