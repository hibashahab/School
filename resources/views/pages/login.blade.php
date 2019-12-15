@extends('layout.main')
@push('show')
   <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@section('content')

<div class="container">
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer mb-3">
      <span class="font-weight-bold">Sign In</span><br><br>
      <img src="../img/logo.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container text-center pl-3 pr-3">
      <input type="email" placeholder="Email" name="uname" required class="form-control text-center mb-2 " style="background:rgba(202, 202, 202, 0.822);color:black">
      <input type="password" placeholder="Password" name="psw" required class="form-control text-center mb-2" style="background:rgba(202, 202, 202, 0.822);color:black">
      <button type="submit" class="btn btn-info mt-3" style="width:30%">Login</button>
    </div>
<br><br>
    <div class="container text-center" style="background-color:#f1f1f1">
      <h6 class="text-black font-weight-bold">Copyright:CoreIT</h6>
    </div>
  </form>
  </div>
@endsection