@extends('layouts.app')

@section('content')
<div class="about-wrap">
    <div class="about_content">
        <div class="about-logo-head">
            <img src="{{asset('images/png/IMG_2627-980x380.jpg')}}" alt="Checkmat and Ian Harrop Logo">
        </div>
        <h1 class="about_title">Checkmat Plymouth</h1>
        <p class="about_p">We are one of the leading brazilian jiu jitsu schools in the Plymouth area.
            Checkmat represented by Ian Harrop is one of the leading, recognisable Brazilian Jiu-Jitsu teams, with
            affiliates world wide.
            Coach Ian Harrop is the black belt under Marco Canha (head of Fight Zone London). Marco who is under 9x
            world champion Ricardo Vieira.
            The
            affiliation was started by Leo Vieira in 2008 and we are now proud to be part of this BJJ family from 2018.
            Lead instructor Ian Harrop trains up in London regularly with Marco, where other members are welcome too.
            Marco
            is also invited down for seminars.</p>
         <div class="about-logo-head ">
            <img src="{{asset('images/83772168_10214457481382565_1254744768194281472_o.jpg')}}" alt="Ian Harrop with Marco Canha"
                title="Ian Harrop with Marco Canha" class="small">
        </div>
        <p class="about_p1">Brazilian jiu jitsu is for everyone. It doesn't matter how old are you.
            If you are young you
            can improve your body and become stronger than other people.
            You will be able to compare with another fighters on many competitions in UK or world wide.

            If you are fourty or fifty you can train brazilan jiu jitsu as well. By coming on sessions
            you
            will
            improve your body and mobility.
            Everyone will become better and better with their own mind and body.
            Brazilian jiu jitsu members build great familiar atmosphere.
            We are not only people which train together; We are the Family. We always help each other
            and we
            develop each other.
            <p class="about_p1"><span>We are equal. </span></p>
            <p class="about_p1">The older brothers on higher level always help and they consistently give important
                advices.

                Big fun, laugth, great people, great atmosphere and special attitiude make our academy the
                best place to train BJJ. We are not just fighters - <span>WE ARE WARRIORS!</span></p>
            <hr>

            <h3 class="h3-top-title">Lead Instructor</h3>
            <h1 class="name-IH">Ian Harrop</h1>
            <div class="about-logo-head ">
                <img src="{{asset('images/ian_and_CH_brothers_cut_2.png')}}" alt="Ian Harrop with Vieira brothers"
                    title="Leo Vieira Ian Harrop Ricardo Vieira" class="small">
            </div>

            <p class="about_p"> Ian has been training in many arts from a young age but then found Brazilian Jiu Jitsu
                in
                2007 and pursued this.
                He competes and trains all over the UK, Europe and the U.S. Ian is the lead Brazilian Jiu Jitsu Black
                Belt
                instructor at Checkmat Plymouth under his Black belt coach Marco Canha (Head of Fight Zone London).
                <br />
                Ian improves his skills with the best warrriors on our planet like: </p>
            <p class="about_p1">
                <a href="https://www.fightzonelondon.co.uk/coach-marco-canha">Marco Canha</a>,
                <a href="https://www.bjjheroes.com/bjj-fighters/jackson-sousa">Jackson Sousa </a>,
                <a href="https://bernardofariaacademy.com/about-bernardo-faria/">Bernardo Faria</a>,
                <a href="https://www.bjjheroes.com/bjj-fighters/ricardo-ricardinho-vieira">Ricardo Vieira</a>,
                <a href="https://www.bjjheroes.com/bjj-fighters/leo-vieira-facts-and-bio">Leo Vieira</a>.

            </p>

            <p class="about_p1">He has over <span id="coaching" class="time_p"></span> years experience coaching BJJ to
                adults, juniors and
                kids. He has also worked as a Strength and Conditioning coach at Plymouth Performance Gym.</p>
            <hr>
            <h3 class="h3-top-title">Instructor</h3>
            <h1 class="name-IH">Amy Harrop</h1>
            <div class="about-logo-head ">
            <img src="{{asset('images/amy_and_CH_brother_cut.png')}}" alt="Amy Harrop with Vieira brothers"
                    title="Leo Vieira Amy Harrop Ricardo Vieira" class="small">
            </div>
            <p class="about_p">
                Amy has been training Brazilian Jiu Jitsu since November 2009 and has been coaching since the Gym
                opened in 2016 & has now started a Ladies only class to support ladies, that may be apprehensive about
                mixed
                classes, who want to pursue . She has trained at many places in the UK and USA and has competed
                throughout
                the UK and Europe winning many medals. Amy is also a sports therapist running her own business Amy
                Harrop’s
                Sports Therapy.
            </p>
            <hr>
            <h3 class="h3-top-title">Our Facilities</h3>
            <p class="about_p">
                We offer a simple clean safe environment to train and have fun. Our focus is on our large matted area
                with
                padded flooring for comfort and safety. There are changing facilities and adequate storage for bags.
                There
                is also a large reception area with coffee facilties where you can watch the training on the big screen.
                This is ideal for watching your children training without them being distracted by seeing you. Hygiene
                is
                important in a gym environment so we have simple rules about cleanliness e.g. making sure training gear
                is
                washed after each session, not wearing shoes on the mats, wearing shoes to the bathroom and we make sure
                mats are cleaned and disinfected regularly.
            </p>
            <hr>
    </div>

</div>
<script src="{{asset('js/about.js')}}"></script>
<!-- script na server z ukosnikiem -->


@endsection