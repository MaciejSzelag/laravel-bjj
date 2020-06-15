@extends('layouts.app',['title'=>$title])
@section('content')
<section class="gallery-container">
    <div class="gallery_wrap">
        <div class="gallery_wrap_header">
            <div class="slide-img">
                <div class="slide-img-title">
                    <div class="wrap-p">
                        <p>"Big Family!"</p>
                    </div>

                </div>
            </div>
        </div>
        <p class="memories_p">Gallery</p>
        <div class="gallery_wrap_main_wrap">

            <div class="img-wrap">
                <div class="desc">
                    <p>Our warriors always work hard and win many medals at competitions!
                    </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-1.jpg')}}" alt="Golden boys">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Beginners 🔥🔥🔥everyone working hard! On every single session warriors learn something new😁</p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-2.jpg')}}" alt="Beginner class">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Adults and juniors work hard with every singe detail. Big fun on first place. </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-3.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Coach Amy always focuses on small details. When students need help Amy always is ready to help.
                    </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-4.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Every single session brings new experience and new skills.That's why after sparrings warriors are
                        so happy!!!</p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-5.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Coach Amy always check how students improve their own skills. If they need help she always is
                        ready to help. </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-6.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Sparrings are one of the best way to check and developing skills. It doesn't matter who win or
                        who
                        lose. Respect and fun always work together. </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-7.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Morning classes three times a week: Monday, Wednesday & Friday. Good time to improve
                        small things. </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-8.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Lead coach of the Rice Champ Martial Arts regularly comes to improve his own skills.<br />Hard
                        work
                        with the
                        best always teach something new.</p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-9.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Ben and Ricky are the leading warriors of our academy. They love competitions. They compete
                        in UK and around the world. </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-10.jpg')}}" alt="">
                </div>
            </div>
            <div class="img-wrap">
                <div class="desc">
                    <p>Our instructors always train with Marco Canha in his academy at London (Fight Zone London) and
                        where
                        our members are welcome too.

                    </p>
                </div>
                <div class="img-container">
                    <img src="{{asset('images/img_gallery/img-11.jpg')}}" alt="">
                </div>
            </div>


        </div>
    </div>
</section>
<script src="{{asset('js/gallery.js')}}"></script>
@endsection
