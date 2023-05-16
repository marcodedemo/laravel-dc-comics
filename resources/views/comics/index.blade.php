@extends('layouts/main-layout')

@section('content')


<section id="series-list">

    <div class="container pb-0">

        {{-- series container --}}
        <div id="series" class="d-flex flex-wrap gap-3">

            @foreach ($comics as $comic)

            <a href="{{route('comics.show', $comic->id)}}" class="comic-card d-flex flex-column gap-2 pt-3">

                <div class="comic-img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>

                <div class="comic-title">
                    {{$comic['series']}}
                </div>

            </a>
                
            @endforeach



        </div>

        <div id="button-container" class="text-center">
            <a href="{{route('comics.create')}}" ><button class="mt-5 mb-5">Aggiungi un fumetto</button></a>
        </div>

        <div id="button-container" class="text-center">
            <a href="{{route('homepage')}}" ><button class="mb-5">Torna alla Homepage</button></a>
        </div>

    </div>
        
</section>

                

@endsection