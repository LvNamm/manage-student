@extends('layout')
@section('body')
<div class="row mx-auto" style = "display:flex;justify-content: center">
    <form class = "col-md-6" action="/student/addstudent" method="post">
    <h2>Create Student</h2>
    @csrf
  <div class="form-group">
    <label>Full name</label>
    {!!$errors->has('fullname')?'<p style = "color:red">'.$errors->get("fullname")[0].'</p>':null!!}
    <input class="form-control" placeholder="Your Fullname" name="fullname">
  </div>
  <div class="form-group">
    <label >Birthday (YYYY-mm-dd)</label>
    {!!$errors->has('birthday')?'<p style = "color:red">'.$errors->get("birthday")[0].'</p>':""!!}
    <input  class="form-control" placeholder="Your birthday" name = "birthday">
  </div>
  <div class="form-group">
  <label >Address</label>
  {!!$errors->has('address')?'<p style = "color:red">'.$errors->get("address")[0].'</p>':""!!}
    <input  class="form-control" placeholder="Your Address" name = "address">
  </div>
  <button type="submit" class="btn btn-primary">Add Student</button>
</form>
</div>
@endsection