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

        </div>


        <!-- Button trigger modal -->
        <div id="button-container" class="mb-5">
            <button type="button" id="delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Elimina Fumetto</button>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                
                <h2 class="modal-title fs-5" id="staticBackdropLabel">Attenzione!</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Sei sicuro di voler eliminare il fumetto?</div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>

                </div>
            </div>

            </div>

        </div>
  
          
        
        <div id="button-container" class="text-center">
            <a href="{{route('comics.index')}}" ><button class="mb-5">Torna alla lista fumetti</button></a>
        </div>
        
    </div>
</div>
@endsection