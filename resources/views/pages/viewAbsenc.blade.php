@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-3">

<div class="row mr-1 ml-1">
<div class="col-lg-2 col-md-1 col-sm-12 mb-1">
<button class="btn btn-success mb-2"><a href="/absence" class="text-light">رجوع</a></button>
 </div>

 <div class="col-lg-9 col-md-8 col-sm-12" >
 <input type="text" name="name" class="form-control text-right mb-2" placeholder="اسم الطالب">
</div>

<div class="col-lg-1 col-md-2 col-sm-12 text-center">
<button class="btn btn-primary mb-2">بحث</button>
</div>
</div>
<div class="mt-2 ml-3 mr-3 ">
<div class="table-responsive">
<table class="table" style="direction:rtl">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>اسم الطالب</th>
    <th>الصف</th>
    <th>ايام الغياب</th>
    <th>ايام الاجازه</th>
    <th>تحرير</th>
</tr>
</thead>
<tbody>
<tr class="bg-danger">
    <td>1</td>
    <td>محمد</td>
    <td>الاول ب</td>
    <td>10</td>
    <td>20</td>
    <td>
    <button class="btn btn-danger mb-1" style="width:60px">حذف</button>  
    </td>
</tr>
<tr class="bg-warning">
    <td>2</td>
    <td>علي</td>
    <td>الاول ب</td>
    <td>20</td>
    <td>10</td>
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
</div>
@endsection