@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-5">

<div class="row mb-2 text-center">
 <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
 <input type="text" name="unit" class="form-control text-right" placeholder="الشعبه">
 </div> 
 <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
 <input type="text" name="class" class="form-control text-right" placeholder="الصف">
 </div> 
 <div class="col-lg-2 col-md-5 col-sm-12">
 <button type="button" class="btn btn-primary">اضافه</button>
 </div> 
</div>
<br>
<div class="row mb-1">
<div class="col-lg-10 col-md-11 col-sm-12 mb-1">
 <input type="text" name="class2" class="form-control text-right" placeholder="الصف">
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
    <th>الصف</th>
    <th>الشعبه</th>
    <th>التحرير</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>الاول</td>
    <td>ج</td>
    <td>
   <button class="btn btn-danger mb-1" style="width:60px">حذف</button>  
    </td>
</tr>
<tr>
    <td>2</td>
    <td>الثاني</td>
    <td>ب</td>
    <td>
  <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button>  
    </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection