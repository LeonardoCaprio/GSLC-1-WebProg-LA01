@extends('layouts.main')
@section('title', 'Course')

@section('content')
<table class="table">
    <thead class="nav-table">
      <tr>
        <th scope="col">Course Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Class</th>
      </tr>
    </thead>

    @foreach ($listcourse as $course)
    <tbody class="bodytable">
        <tr>
          <td>{{$course["Course Code"]}}</td>
          <td>{{$course["Course"]}}</td>
          <td>{{$course["Class"]}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
