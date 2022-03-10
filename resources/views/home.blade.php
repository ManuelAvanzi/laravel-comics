@extends('layouts.default')

@section('pageTitle')
 Laravel comics
@endsection

@section('content')

<main>
    <div class="cards-container">

    
        <!--stampo il titolo e l'immagine-->
        @foreach($data as $fumetto)
        <div class="card">
            <img src= {{$fumetto["thumb"] }}>
            <li>  {{$fumetto["title"]}}</li>
            <a href="{{ route('comics.details', $loop->index) }}" class="details-link">Details</a> 
        </div>
            
            
        @endforeach
       
@endsection

    </div>


</main>
 