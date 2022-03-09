@extends('layouts.default')

@section('pageTitle')
 Laravel comics
@endsection

@section('content')
 <h2>Laravel comics</h2>

 <ul>

    <!--stampo il titolo e l'immagine-->

    @foreach($data as $fumetto)
    <li>  {{$fumetto["title"]}}</li>
    <img src= {{$fumetto["thumb"] }}>
    @endforeach
</ul>
@endsection