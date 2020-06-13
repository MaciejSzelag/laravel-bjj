
    @extends('layouts.head')
    <body>
         <div class="bars-wrap" id="mobile-menu">
            <div class="bars">
                <div class="bar top"></div>
                <div class="bar bottom"></div>
            </div>
        </div>
        <nav class="screen mobile">
            <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/seminar">Seminars</a></li>
                <li><a href="/timetable">Timetable</a></li>
                <li><a href="/prices">Prices</a></li>
                <li><a href="/partners">Partners</a></li>
                <li><a href="/contactForm">Contact Us</a></li>
                <li><a href="/login">ADMIN</a></li>
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <div class="feet">Copyrights &copy;2018 - {{date('Y')}}  BJJ Plymouth - All Rights Reserved</div>
            <div class="feet">Website made by Maciej Szeląg</div>
        </footer>
        {{-- <script src="{{asset('js/loadPage.js')}}"></script> --}}
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>