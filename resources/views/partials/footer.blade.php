<footer>

    {{-- footer top --}}
    <section id="footer-top">

        <div class="container">

            <div id="footer-top-links" class="d-flex flex-column flex-wrap align-items-start">

                @foreach ($footerLinks as $footerLink )
                
                <div class="link-list ">
                    
                    <strong class="link-list-title">{{$footerLink['title']}}</strong>
                    
                    <ul class="links">
                        
                        @foreach ($footerLink['links'] as $link )
                        
                        <li><a href="#">{{$link}}</a></li>
                        
                        @endforeach
                        
                    </ul>
                    
                </div>

                @endforeach
                
            </div>

            

            <div class="text">All Site content TM and © DC Entertainment, unless otherwise <a class="blue">noted here</a>. All rights reserved. </div>
            <div class="text"><a href="#">Cookie Settings</a></div>
            
        </div>

    </section>


    {{-- footer bottom --}}
    <section id="footer-bottom" class="d-flex align-items-center">

        <div class="container d-flex justify-content-between">

            
            {{-- footer bottom left --}}
            <div id="footer-bottom-left">
                
                <button>Sign-up Now!</button>
                
            </div>
            
            {{-- footer bottom right --}}
            <div id="footer-bottom-right" >
                <span>Follow Us</span>
                <img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="Facebook Logo">
                <img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="Twitter Logo">
                <img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="YouTube Logo">
                <img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="Pinterest Logo">
                <img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="Periscope Logo">
                
                
            </div>

        </div>
            
    </section>
</footer>