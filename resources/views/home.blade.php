@extends('Layouts.main')
@section('title', 'Homepage')

@section('content')
<div class="container">
    <div class="konten-1">
        <h1>Assignment II Web Programing LA01</h1>
        <h3>by Leonardo Caprio</h3>
    </div>
    <div class="konten">
        <div>
            <img src={{$picture}} alt="" width="200">
        </div>
        <div>
            <h4>Name: {{$name}}</h4>
            <h4>NIM: {{$nim}}</h4>
            <h4>Class: {{$class}}</h4>
            <h4>Email: {{$email}}</h4>
        </div>
    </div>
</div>
@endsection
