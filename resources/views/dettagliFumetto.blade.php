@extends('layouts.default');

@section('pageTitle',$comics["title"])



@section('content')
<h2>{{ $comics["title"] }}</h2>
<img src="{{ $comics["thumb"] }}"</img>

@endsection