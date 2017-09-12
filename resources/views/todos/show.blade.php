@extends('layouts.app')

@section('content')

    <a class="btn btn-success" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <div class="label label-danger"> {{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>
@endsection