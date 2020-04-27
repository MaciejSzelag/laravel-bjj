@extends('layouts.appMine',['title'=>$title])
@section('content')
<div class="price-wrap">
    <div class="b-kids">
        <div class="button" id="button1"></div>
        <div class="priv" id="priv">Private</div>
        <div class="adults " id="adults">Main</div>
        <div class="kids" id="kids">Kids</div>
    </div>
    <div class="price-container" id="pr-con">

        <div class="price_private price_small_container">
            <div class="p_container_title">
                <p class="title-price">Private lessons with Black Belt Coaches Ian or Amy Harrop </p>
            </div>
            <div class="price_cards">
                <div class="card">
                    <div class="topCard ">
                        <p class="card-title ">Single Session</p>
                    </div>
                    <p>1:1 </p>
                    <p class="cardPrice"> £40</p>
                    <p>Privet Session</p>
                </div>
                <div class="card popularCard">
                    <div class="topCard">
                        <p class="card-title ">Block of 5</p>
                    </div>
                    <p>1:1</p>
                    <p class="cardPrice"> £150</p>
                    <p>£30 for Session</p>
                </div>
                <div class="card ">
                    <div class="topCard ">
                        <p class="card-title ">Single Session</p>
                    </div>
                    <p>2:1 </p>
                    <p class="cardPrice"> £50</p>
                    <p>£25 per person</p>
                </div>
                <div class="card ">
                    <div class="topCard ">
                        <p class="card-title ">Block of 5</p>
                    </div>
                    <p>2:1 </p>
                    <p class="cardPrice"> £200</p>
                    <p>£100 per person = £20 per session</p>
                </div>



            </div>
        </div>
        <div class="price_adults price_small_container">
            <div class="p_container_title">
                <p class="title-price">Adults and Juniors (age 12+)</p>
            </div>
            <div class="price_cards">
                <div class="card">
                    <div class="topCard ">
                        <p class="card-title ">Plan 1</p>
                    </div>
                    <p>2 Classes a Week</p>
                    <p class="cardPrice"> £40</p>
                    <p>Monthly</p>
                </div>
                <div class="card">
                    <div class="topCard">
                        <p class="card-title ">Plan 2</p>
                    </div>
                    <p>3 Classes a Week</p>
                    <p class="cardPrice"> £50</p>
                    <p>Monthly</p>
                </div>
                <div class="card popularCard">
                    <div class="topCard ">
                        <p class="card-title ">Plan 3</p>
                    </div>
                    <p>Unlimited</p>
                    <p class="cardPrice"> £60</p>
                    <p>Monthly</p>
                </div>
                <div class="card">
                    <div class="topCard ">
                        <p class="card-title ">Plan 4</p>
                    </div>
                    <p>Block of 10</p>
                    <p class="cardPrice"> £60</p>
                    <p> Every £10 Sessions</p>
                </div>
                <div class="card">
                    <div class="topCard ">
                        <p class="card-title ">Plan 5</p>
                    </div>
                    <p>1 Class</p>
                    <p class="cardPrice"> £8</p>
                    <p>Each Class</p>
                </div>

            </div>
        </div>
        <div class="price_kids price_small_container">
            <div class="p_container_title">
                <p class="title-price">Kids (age 7-11) </p>
            </div>
            <div class="price_cards">
                <div class="card">
                    <div class="topCard ">
                        <p class="card-title ">Warrior 1</p>
                    </div>
                    <p>Block of 10</p>
                    <p class="cardPrice"> £55</p>
                    <p>Every £10 Sessions</p>
                </div>
                <div class="card popularCard">
                    <div class="topCard">
                        <p class="card-title ">Warrior 2</p>
                    </div>
                    <p>2 Classes a Week</p>
                    <p class="cardPrice"> £35</p>
                    <p>Monthly</p>
                </div>
                <div class="card ">
                    <div class="topCard ">
                        <p class="card-title ">Warrior 3</p>
                    </div>
                    <p>1 Class </p>
                    <p class="cardPrice"> £7</p>
                    <p>Each class</p>
                </div>



            </div>
        </div>
    </div>

</div>
<script src="{{asset('js/price.js')}}"></script>

@endsection