
@extends('layouts/main-layout')

@section('content')

<main>


    {{-- go to comic page  --}}
    <section id="go-to-comics">

        <div class="container pb-0">

            <div id="tag">Current Series</div>

            <div id="button-container" class="text-center">
                <a href="{{route('comics.index')}}" ><button class="mt-5 mb-5">Vai alla pagina dei Fumetti</button></a>
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