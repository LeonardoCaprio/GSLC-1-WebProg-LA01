@extends('layouts.main')
@section('title', 'Score Course')

@section('content')
<table class="table">
    <thead class="nav-table">
      <tr>
        <th scope="col">Course Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Score</th>
        <th scope="col">Grade</th>
      </tr>
    </thead>

    @foreach ($listscore as $score)
    <tbody class="bodytable">
        <tr>
          <td>{{$score["Course Code"]}}</td>
          <td>{{$score["Course"]}}</td>
          <td>{{$score["Score"]}}</td>
            @if (($score["Score"]>=90) and ($score["Score"]<=100))
                <td>A</td>
            @elseif (($score["Score"]>=80) and ($score["Score"]<90))
                <td>B</td>
            @elseif (($score["Score"]>=70) and ($score["Score"]<80))
                <td>C</td>
            @else
                <td>D</td>
          @endif
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
