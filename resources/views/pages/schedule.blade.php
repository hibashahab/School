@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-3">
<div class="row mb-5">
 <div class="col-lg-4 col-md-4 col-sm-12 mb-1">
<button class="btn btn-primary btn-block">اضافه</button>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12 custom-file mb-1" >
 <input type="file" class="custom-file-input" name="photo" >
 <label class="custom-file-label text-center" for="customFile">صوره</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 text-center">
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
</div>
<hr>
<div class="row mb-3 mt-3">
<div class="col-lg-10 col-md-11 col-sm-12 mb-1">
 <input type="text" name="class" class="form-control text-right" placeholder="الصف">
</div>
<div class="col-lg-2 col-md-1 col-sm-12 text-center">
<button class="btn btn-primary btn-block">بحث</button>
</div>
</div>

<div class="table-responsive">
<table class="table mt-2" style="direction:rtl">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>الصف</th>
    <th>صوره الجدول</th>
    <th>تحرير</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>الاول ا</td>
    <td><a href="" style="text-decoration: none;">download</a></td>
    <td>
    <button class="btn btn-danger mb-1" style="width:60px">حذف</button>  
    </td>
</tr>
<tr>
    <td>2</td>
    <td>الرابع ا</td>
    <td><a href="" style="text-decoration: none;">download</a></td>
    <td>
   <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button>  
    </td>
</tr>
</tbody>

</table>
</div>




</div>
</div>
@endsection