@extends('layout')
@section('body')

    <!-- <form action="/student/update/{{ $student->id }}" method="post">
        @csrf
        <label for="Name">
        {!!$errors->has('fullname')?'<p style = "color:red">'.$errors->get("fullname")[0].'</p>':null!!}
            Fullname:
            <input type="text" name="fullname" value="{{ $student->fullname }}">
        </label><br><br>
        <label for="Email">
        {!!$errors->has('birthday')?'<p style = "color:red">'.$errors->get("birthday")[0].'</p>':""!!}
            Birthday:
            <input type="text" name="birthday" value="{{ $student->birthday }}">
        </label><br><br>
        <label for="Password">
            Address:
            <input type="text" name="address" value="{{ $student->address }}">
        </label><br><br>
        <button type="submit">Edit student</button>
    </form> -->
    <div class="row mx-auto" style = "display:flex;justify-content: center">
    <form class = "col-md-6" action="/student/update/{{ $student->id }}" method="post">
    <h2>Edit user</h2>
    @csrf
  <div class="form-group">
    <label>Full name</label>
    {!!$errors->has('fullname')?'<p style = "color:red">'.$errors->get("fullname")[0].'</p>':null!!}
    <input class="form-control" placeholder="Your Fullname" name="fullname" value="{{ $student->fullname }}">
  </div>
  <div class="form-group">
    <label >Birthday (YYYY-mm-dd)</label>
    {!!$errors->has('birthday')?'<p style = "color:red">'.$errors->get("birthday")[0].'</p>':""!!}
    <input  class="form-control" placeholder="Your birthday" name = "birthday" value="{{ $student->birthday }}">
  </div>
  <div class="form-group">
  <label >Birthday (YYYY-mm-dd)</label>
  {!!$errors->has('address')?'<p style = "color:red">'.$errors->get("address")[0].'</p>':""!!}
    <input  class="form-control" placeholder="Your Address" name = "address" value="{{ $student->address }}">
  </div>
  <button type="submit" class="btn btn-primary">Edit Student</button>
</form>
</div>
@endsection