@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center pl-5 pr-5 pt-4">

<div class="row  pr-5 pl-5">
<div class="col-lg-1 col-md-1 col-sm-12 p-0">
<button class="btn btn-primary mb-2"><a href="/absence" class="text-light">رجوع</a></button>
 </div>

 <div class="col-lg-10 col-md-8 col-sm-12" >
 <input type="text" name="name" class="form-control text-right mb-2" placeholder="اسم الخبر">
</div>

<div class="col-lg-1 col-md-2 col-sm-12 text-center p-0">
<button class="btn btn-primary mb-2">بحث</button>
</div>
</div>

<div class="details pr-5 pl-5 d-flex flex-row justify-content-between flex-wrap-reverse ">
<div class="d-flex flex-column justify-content-center flex-wrap text-right first">
      <h3>العنوان</h3>
    <p style="text-align:ceter ;text-align:justify;padding:3px">
        يجب بدالمقدمه بالتعريف عن الكتاب بشكل عام ولكن ليش بشكل واسع جدا بحيث يجب على المقدمه 
             ان تضهر للقارى ما يجب توقعه عند قراءه الكتاب, وليس شرح تفصيلي لكل جزء من الكتاب 
                              , لذلك يمكن بدء الكتابه بشكل واسع وعام ومن ثم تضيق النطاق قليلا
        يجب بدالمقدمه بالتعريف عن الكتاب بشكل عام ولكن ليش بشكل واسع جدا بحيث يجب على المقدمه 
             ان تضهر للقارى ما يجب توقعه عند قراءه الكتاب, وليس شرح تفصيلي لكل جزء من الكتاب 
                              , لذلك يمكن بدء الكتابه بشكل واسع وعام ومن ثم تضيق النطاق قليلا
        يجب بدالمقدمه بالتعريف عن الكتاب بشكل عام ولكن ليش بشكل واسع جدا بحيث يجب على المقدمه 
             ان تضهر للقارى ما يجب توقعه عند قراءه الكتاب, وليس شرح تفصيلي لكل جزء من الكتاب 
                              , لذلك يمكن بدء الكتابه بشكل واسع وعام ومن ثم تضيق النطاق قليلا
    </p>
    <div class="d-flex flex-row justify-content-end">
    <button class="btn btn-success mb-1 mr-5" style="width:60px"><a href="/UpdateNews" class="text-light" style="text-decoration: none;">تعديل</a></button>  
    <button class="btn btn-danger mb-1" class="text-light"  style="width:60px">حذف</button>  
    </div>
</div>
<div class="book">
<img src="../img/books.jpg" alt="">
</div>

</div>


</div>
</div>
@endsection