@extends('layouts/main-layout')


@section('content')

<div id="new-comic-info">

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-3">
          <label for="title">Titolo</label>
          <input type="text" id="title" name="title" value="{{$comic->title}}">
        </div>
    
        <div class="mb-3">
          <label for="description">Descrizione</label>
          <textarea id="description" name="description">{{$comic->description}}</textarea>
        </div>
    
        <div class="mb-3">
          <label for="thumb">Copertina</label>
          <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
    
        <div class="mb-3">
          <label for="price">Prezzo</label>
          <input type="text" id="price" name="price" value="{{$comic->price}}">
        </div>
    
        <div class="mb-3">
          <label for="series">Serie</label>
          <input type="text" id="series" name="series" value="{{$comic->series}}">
        </div>
    
        <div class="mb-3">
          <label for="sale_date">Data di vendita (anno-mese-giorno)</label>
          <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type">Tipo Fumetto</label>
            <input type="text" id="type" name="type" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="artists">Artista/i</label>
            <input type="text" id="artists" name="artists" value="{{$comic->artists}}">
        </div>

        <div class="mb-3">
            <label for="writers">Scrittore/i</label>
            <input type="text" id="writers" name="writers" value="{{$comic->writers}}">
        </div>
          
    
        <button class="btn btn-primary" type="submit">Modifica</button>
      </form>
</div>

@endsection