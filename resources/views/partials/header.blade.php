

<header>

    {{-- header top section links --}}
    <div id="top-links">

        <div class="container d-flex justify-content-end gap-4">

            <a href="#">DC POWER<sup>SM</sup> VISA©</a>
            <a href="#">ADDICTIONAL DC SITES <i class="fa-solid fa-caret-down"></i></a>
        </div>
    </div>


    {{-- navbar --}}
    <nav class="d-flex justify-content-center align-items-center">


        <div class="container d-flex justify-content-center align-items-center gap-4">


            {{-- logo --}}
            <div id="nav-logo">
                <img class="w-100" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC Logo">
            </div>


            {{-- links --}}
            <div id="nav-links">
                <ul class="d-flex align-items-center justify-content-center">

                    @foreach ($links as $link )
                    
                    <li><a href="#">{{$link}}</a></li>
                    
                    @endforeach

                </ul>
            </div>


            {{-- search bar --}}
            <div id="nav-search">
                <input type="text" placeholder="Search">
            </div>

        </div>

    </nav>

</header>