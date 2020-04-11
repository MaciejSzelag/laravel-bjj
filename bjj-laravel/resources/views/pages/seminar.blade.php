@extends('layouts.app',['title'=>'BJJPlymouth | Bjj | Brazilian jiu jitsu | Students | Adults | Kids'])
@section('content')
<div class="seminar-wrap">
    <div class="seminar_header">
        <div class="header_img">
        <img src="{{asset('images/man-1533854_640.jpg')}}" alt="BJJ big men">
        </div>
        <div class="header_greeting">
        <img src="{{asset('images\png\IMG_2627-980x380.jpg')}}" alt="Logo checkmat Ian Harrop">
            <h1>BJJ PLYMOUTH</h1>
            <h3>PRESENTS</h3>
        </div>
    </div>
    <div class="seminar_content next_seminar ">
        <div class="content-title">
            <h3>Next Seminar - 10/10/2020</h3>
            <h1>Adam Wardzinski</h1>
        </div>
        <div class="content-txt">
            <div class="txt-picture">
                <img src="{{asset('images/adam_wardzinski_golds.webp')}}" alt=" Adam Wardzinski - Next Seminar" title="Adam Wardzinski">
            </div>
            <div class="txt-desc">
                <p> <span class="name"> <u>Adam Wardzinski</u> - </span> Last night we had the pleasure to host
                    '@wardziak_bjj' for a seminar. Everyone had a great time learning a part of Adams games, we covered
                    the butterfly 🦋 guard. Massive thank you to Adam for coming to '@bjjplymouth'</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus, dolores dolorem ipsa
                </p>
            </div>
        </div>
    </div>
    <div class="seminar_content">
        <div class="content-title">
            <h3>Last Seminar - 05/03/2020</h3>
            <h1>Adam Wardziński</h1>
        </div>
        <div class="content-txt">
            <div class="txt-picture">
                <img src="{{asset('images/AW-seminar.jpg')}}" alt="Group photo - Adam Wardzinski - Seminar">
            </div>

            <div class="txt-desc">
                <p> <span class="name">Adam Wardziński - </span> Thursday 05/03/2020 we had the pleasure to host
                    '@wardziak_bjj' for a seminar. Everyone had a great time learning a part of Adams games, we covered
                    the butterfly 🦋 guard. Massive thank you to Adam for coming to '@bjjplymouth'</p>
            </div>
        </div>
    </div>
</div>
@endsection