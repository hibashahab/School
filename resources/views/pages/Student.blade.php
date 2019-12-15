@extends('layout.main')
@section('content')
@include('navbar.nav')

<div class="content">
<div class="container" style="direction:rtl">

  <ul class="nav nav-tabs" role="tablist" style="width:50%">
    <li class="nav-item">
      <a class="nav-link text-primary active" data-toggle="tab" href="#home">تسجيل الطلاب</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu1"> تسجيل الاباء</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu2"> الطلاب</a>
    </li>
  </ul>
  <br><br>
  <div class="tab-content">
<div id="home" class="container tab-pane active">
<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-4 col-md-4 col-sm-12 mb-1">
 <input type="text" class="form-control text-right text-right" placeholder="اسم الطالب">
 </div> 
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input list="gurdian" placeholder="ولي امر الطالب" class="text-center form-control" name="gurdian">
<datalist id="gurdian">
<option value="الاب">الاب
<option value="الام">الام
</datalist>
 </div> 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
  
<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2 mn-1"></div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input type="date" class="form-control ">
 </div> 
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" class="form-control text-right" placeholder="المدرسه السابقه">
 </div> 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-4 col-md-4 col-sm-12 mb-1">
 <input type="text" class="form-control text-right" placeholder="الصف">
 </div> 
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" class="form-control text-right" placeholder="الشعبه">
 </div> 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
  </div>
  
<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-12 mb-1">
 <input type="text" class="form-control text-right" placeholder="عنوان السكن">
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
 </div> 
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">
<div class="col-lg-2 col-md-2 col-sm-2 "></div>
<div class="col-lg-4 col-md-4 col-sm-4 custom-file mb-1">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label text-center pr-5" for="customFile">صوره الجنسيه الاماميه</label>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 custom-file mb-1">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label text-center pr-5" for="customFile" >صوره الجنسيه الخلفيه</label>
  </div>
  
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-4 col-md-4 col-sm-12 custom-file mb-1">
 <input type="file" class="custom-file-input">
 
 <label class="custom-file-label text-center pr-5" for="customFile">بطاقه التموينيه</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 custom-file mb-1">
 <input type="file" class="custom-file-input">
 
 <label class="custom-file-label text-center pr-5" for="customFile">شهاده الجنسيه</label>
</div>

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">
  <div class="col-lg-2 col-md-2 col-sm-2 mb-1"></div>
 <div class="col-lg-4 col-md-4 col-sm-12 custom-file mb-1">
 <input type="file" class="custom-file-input">
 <label class="custom-file-label text-center pr-5" for="customFile">بطاقه السكن الاماميه</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 custom-file mb-1">
 <input type="file" class="custom-file-input">
 <label class="custom-file-label text-center pr-5" for="customFile">بطاقه السكن الخلفيه</label>
</div>

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-12 custom-file mb-1">
 <input type="file" class="custom-file-input">
 <label class="custom-file-label text-center  pr-5" for="customFile">صوره الطالب</label>
</div>
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<button type="button" class="btn btn-success mt-2" style="width:30%">تسجيل</button>
</div>

<div id="menu1" class="container tab-pane fade">
  <form action="">
 <div class="row mb-2">
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div class="col-lg-8 col-md-8 col-sm-12">
  <input type="text" name="fatherName" class="form-control text-center" placeholder="اسم ولي امر الطالب">
  </div> 
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  </div>
  <div class="row mb-2" style="margin-left:.5px;margin-right:.5px">
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div class="col-lg-4 col-md-4 col-sm-4 custom-file mb-1">
  <input type="file" class="custom-file-input" name="FfrontCard">
  <label class="custom-file-label text-center" for="customFile">بطاقه الجنسيه الاماميه</label>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 custom-file mb-1">
  <input type="file" name="FbacktCard" class="custom-file-input">
  <label class="custom-file-label text-center" for="customFile">بطاقه الجنسيه الخلفيه</label>
 </div>
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
 </div>


<div class="row mb-1" style="margin-left:.5px;margin-right:.5px">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-8 custom-file">
 <input type="file" class="custom-file-input" name="Fphoto">
 <label class="custom-file-label text-center" for="customFile">صوره الشخصيه</label>
</div>
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
 </div>
 <button type="button" class="btn btn-primary mt-2" style="width:30%">تسجيل</button>
</div>
</form>



<div id="menu2" class="container tab-pane fade"><br>
<form action="">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-7 col-md-11 col-sm-12 mb-1">
 <input type="text" name="TeacherName2" class="form-control text-center" placeholder="اسم الطالب">
</div>
<div class="col-lg-1 col-md-1 col-sm-12 text-center">
<button class="btn btn-primary btn-block text-center" style="width:100%;margin:auto">بحث</button>
</div>

<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
</form>
<div class="row">

  <div class="col-lg-2"></div>
<div class="col-lg-8">
<div class="table-responsive">
<table class="table mt-2 table-borderless" style="direction:rtl">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>اسم الطالب الثلاثي</th>
    <th>اسم ولي امر الطالب</th>
    <th>الصف</th>
    <th>الشعبه</th>
    <th>التحرير</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>علي محمد علي</td>
    <td>علي محمد علي</td>
    <td>الاول</td>
    <td>ب</td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/UpdateStudent" class="text-light">تعديل</a></button>  
    <button class="btn btn-danger mb-1" style="width:60px">حذف</button>  
    </td>
</tr>
<tr>
    <td>2</td>
    <td>علي محمد علي</td>
    <td>علي محمد علي</td>
    <td>الاول</td>
    <td>ب</td>
    <td>
    <button class="btn btn-success mb-1" style="width:60px"><a href="/UpdateStudent" class="text-light">تعديل</a></button>  
    <button class="btn btn-danger mb-1" style="width:60px">حذف</button>  
    </td>
</tr>
</tbody>

</table>
</div>

<div class="col-lg-2"></div>
</div>

</div>
  </div>

</div>
</div>
@endsection

