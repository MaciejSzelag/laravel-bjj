<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Are you looking to train Brazilian Jiu Jitsu / BJJ in Plymouth? Have a look at what others are saying about our club, Checkmat Plymouth.">
        <meta name="robots" content="index, follow, max-image-preview:large">
        <link rel="canonical" href="http://bjjplymouthseminar.co.uk/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Brasilian Jiu Jitsu | the best place for jiu jitsu">
        <meta property="og:locale" content="en_GB">
        <meta property="og:url" content="http://bjjplymouthseminar.co.uk/">
        <meta property="og:title" content="Brazilian Jiu jitsu / Homepage / Checkmat Plymouth">
        <meta property="og:site_name" content="Brasilian Jiu jitsu Plymouth">
        <meta property="og:site_name" content="BJJ Plymouth Seminar">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
       <title>    
             @isset($title)
                  {{ $title }}
             @endisset
       </title>
    </head>
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
                {{-- <li><a href="?page=log" class="si">Sign in</a></li>  --}}
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <div class="feet">Copyrights &copy;  BJJ Plymouth - All Rights Reserved</div>
            <div class="feet">Website made by Maciej Szeląg</div>
        </footer>
       
        <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>
