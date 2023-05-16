
@extends('layouts/main-layout')

@section('content')

<main>


    {{-- jumbo main (series list) section --}}
    <section id="series-list">

        <div class="container">

            <div id="tag">Current Series</div>

            {{-- series container --}}
            <div id="series" class="d-flex flex-wrap gap-3">

                {{-- @foreach ($comics as $comic)

                <div class="comic-card d-flex flex-column gap-2 pt-3">

                    <div class="comic-img">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>

                    <div class="comic-title">
                        {{$comic['series']}}
                    </div>

                </div>
                    
                @endforeach --}}

                

            </div>

            <div id="button-container" class="text-center">
                <a href="#"><button>Load More</button></a>
            </div>

        </div>
            
    </section>
    

    {{-- buy link section --}}
    <section id="buy-links">

        <div class="container d-flex justify-content-center align-items-center">

            <div class="buy-link-container d-flex justify-content-center align-items-center">
                
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="Digital Comics Logo">
                </div>
                
                <div class="text">Digital Comics</div>
                
            </div>
            
            <div class="buy-link-container d-flex justify-content-center align-items-center">
                
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="Merchandise Logo">
                </div>
                
                <div class="text">Dc Merchandise</div>
                
            </div>
            
            <div class="buy-link-container d-flex justify-content-center align-items-center">
                
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="Subscription Logo">
                </div>
                
                <div class="text">Subscription</div>
                
            </div>
            
            <div class="buy-link-container d-flex justify-content-center align-items-center">
                
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="Shop Locator Logo">
                </div>
                
                <div class="text">Comic Shop Locator</div>
                
            </div>
            
            <div class="buy-link-container d-flex justify-content-center align-items-center">
                
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="Power Visa Logo">
                </div>
                
                <div class="text">Dc Power Visa</div>
                
            </div>
            
        </div>
            

    </section>

</main>

@endsection