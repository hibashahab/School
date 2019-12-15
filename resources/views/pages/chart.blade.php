@extends('layout.main')
@section('content')
@include('navbar.nav')
<div class="content">
<div class="container text-center  pr-5 pt-5">
<div class="top">
<ul>
<li>
<span><i class="fa fa-user"></i><span>0</span><span>الطلاب</span></span>
</li>
<li>
<span><i class="fa fa-user"></i><span>0</span><span>الاساتذه</span></span>

</li>
<li>
<span><i class="fa fa-user"></i><span>0</span><span>الصفوف</span></span>
</li>
<li>
<span><i class="fa fa-users"></i><span>0</span><span>المستخدمون</span></span>
</li>
</ul>
</div>
<div class="pr-5 pl-5 d-flex flex-row justify-content-around flex-wrap" style="margin:auto;width:960">
<div style="width:500px" class="mt-3">
<canvas width="500" id="myChart"></canvas>
</div>

<div class="wrapper">
		
        <div class="skill ">
            <p class="text-secondary text-left mb-3 mt-5 text-right">الصفوف الفارغه</p>
            <div class="skill-bar skill1 wow slideInLeft animated">
                <span class="skill-count1 text-secondary">25%</span>
            </div>
        </div>
        <div class="skill">
            <p class="text-secondary text-left mt-1 mb-3 text-right">المقاعد الفارغه</p>
            <div class="skill-bar skill2 wow slideInLeft animated">
                <span class="skill-count1 text-secondary">50%</span>
            </div>
        </div>
    </div>


</div>

<script>
$(document).ready(function(){
var ctx = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["المبلغ المدفوع $54000","المبلغ الكلي $85000"],
        datasets: [{    
            data: [200,	600], 
          
            borderColor: ['red', '#3421c0'], 
            backgroundColor: ['red', '#3421c0'], 
            borderWidth: 1 
        }]},         
    options: {
      responsive: true, 
      maintainAspectRatio: false, 
    }
});});
</script>
</div>
</div>
@endsection