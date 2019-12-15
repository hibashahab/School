@extends('layout.main')

@section('content')

@include('navbar.nav')
<div class="content">
<div class="container" style="direction:rtl">

  <ul class="nav nav-tabs" role="tablist" style="width:50%">
    <li class="nav-item">
      <a class="nav-link text-primary " data-toggle="tab" href="/student">تسجيل الطلاب</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="/student"> تسجيل الاباء</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary active" data-toggle="tab" href="#Ustudent"> تعديل الطلاب</a>
    </li>
  </ul>
<br>
  <div class="tab-content">

<div id="Ustudent" class="container tab-pane active">
<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" class="form-control text-right text-right" placeholder="اسم الطالب">
 </div> 
 <div class="col-lg-4 col-md-4 col-sm-12">
  <select name="cars" class="custom-select">
    <option selected disable>ولي امر الطالب</option>
    <option value="volvo">الاب</option>
    <option value="fiat">الام</option>
  </select>
 </div> 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
  
<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
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
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" class="form-control text-right" placeholder="الصف">
 </div> 
 <div class="col-lg-4 col-md-4 col-sm-12">
 <input type="text" class="form-control text-right" placeholder="الشعبه">
 </div> 
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
  </div>
  
<div class="row mb-1">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-12">
 <input type="text" class="form-control text-right" placeholder="عنوان السكن">
 <div class="col-lg-2 col-md-2 col-sm-2"></div>
 </div> 
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-4 col-md-4 col-sm-4 custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label text-center" for="customFile">صوره الجنسيه الاماميه</label>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label text-center" for="customFile">صوره الجنسيه الخلفيه</label>
  </div>
  
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-4 col-md-4 col-sm-12 custom-file">
 <input type="file" class="custom-file-input">
 
 <label class="custom-file-label text-center" for="customFile">بطاقه التموينيه</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 custom-file">
 <input type="file" class="custom-file-input">
 
 <label class="custom-file-label text-center" for="customFile">شهاده الجنسيه</label>
</div>

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-4 col-md-4 col-sm-12 custom-file">
 <input type="file" class="custom-file-input">
 <label class="custom-file-label text-center" for="customFile">بطاقه السكن الاماميه</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 custom-file">
 <input type="file" class="custom-file-input">
 <label class="custom-file-label text-center" for="customFile">بطاقه السكن الخلفيه</label>
</div>

  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<div class="row mb-1" style="margin-right:.5px;margin-left:.5px">
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
 <div class="col-lg-8 col-md-8 col-sm-12 custom-file">
 <input type="file" class="custom-file-input">
 <label class="custom-file-label text-center" for="customFile">صوره الطالب</label>
</div>
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>

<button type="button" class="btn btn-success mt-2" style="width:30%"> <a href="/student" style="text-decoration:none" class="text-light">حفظ</a></button>
</div>
</div>
</div>
@endsection