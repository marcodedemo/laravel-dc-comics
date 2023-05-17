@extends('layouts/main-layout')


@section('content')

<div id="single-comic-container">

    <div class="container">

        <h1>{{$comic->title}}</h1>
        
        <div id="img-container">
            <img src="{{$comic->thumb}}" alt="Comic Thumb">
        </div>
        
        <ul>
            
            <li><strong>Series: </strong>{{$comic->series}}</li>
            <li><strong>Sale Date: </strong>{{$comic->sale_date}}</li>
            <li><strong>Type: </strong>{{$comic->type}}</li>
            <li><strong>Artists: </strong>{{$comic->artists}}</li>
            <li><strong>Writers: </strong>{{$comic->writers}}</li>
            <li><strong>Description: </strong>{{$comic->description}}</li>
            <li><strong>Price: </strong>{{$comic->price}}</li>
            
            
            
        </ul>

        <div id="button-container" class="text-center">
            <a href="{{route('comics.edit', $comic->id )}}" ><button class=" mt-5 mb-5">Modifica fumetto</button></a>
        </div>
        
        <div id="button-container" class="text-center">
            <a href="{{route('comics.index')}}" ><button class="mb-5">Torna alla lista fumetti</button></a>
        </div>
        
    </div>
</div>
@endsection