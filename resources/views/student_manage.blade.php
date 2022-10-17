
@extends('layout')
@section('body')
<table class="table table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full name</th>
      <th scope="col">Birthday</th>
      <th scope="col">Address</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td id = "td:{{ $student->id }}">{{ $student->fullname }}</td>
                <td>{{ $student->birthday }}</td>
                <td>{{ $student->address }}</td>
                <td><a href="/student/edit/{{$student->id}}">Edit</a></td>
                <td><a onclick = "confirmdelete({{$student->id}})" href ="#">Delete</a></td>
            </tr>
        @endforeach
  </tbody>
</table>
<br>
<br>
<form action="/student/create" style="float:right;margin-right:20px">
  <button type="submit" class="btn btn-info"> Create Student</button>
</form>
<script>
  function confirmdelete(id){
    name = document.getElementById("td:"+id).textContent
    e="/student/delete/{{$student->id}}"
    if (confirm("would you like delete "+name+"?") == true) {
      window.location = "/student/delete/"+id
    }
      
  }
</script>
@endsection