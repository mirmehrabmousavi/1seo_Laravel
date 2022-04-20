@extends('layouts.app')

@section('content')
    @foreach($internalLink as $a)
    <a style="float: left" href="{{$a}}">{{$a}}</a>
        <br>
    @endforeach
    <br>
    <br>
    <br>
    @foreach($externalLink as $a)
    <a style="float: left" href="{{$a}}">{{$a}}</a>
        <br>
    @endforeach
@endsection
