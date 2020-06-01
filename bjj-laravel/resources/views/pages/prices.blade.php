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
                @foreach ($privates as $private)
                    <div class="card card-priv">
                        <div class="topCard ">
                            <p class="card-title ">  
                                {{$private->plan_name}}
                            </p>
                        </div>
                        <p class="plan-description">{{$private->description}}</p>
                        <p class="cardPrice"> £{{$private->price}}</p>
                        <p>{{$private->frenquency}}</p>
                    </div>
                @endforeach 
            </div>



            
        </div>
        <div class="price_adults price_small_container">
            <div class="p_container_title">
                <p class="title-price">Adults and Juniors (age 12+)</p>
            </div>
          
            <div class="price_cards">
                @foreach ($adults as $adult)
                <div class="card card-main">
                    <div class="topCard ">
                        <p class="card-title ">  
                            {{$adult->plan_name}}
                        </p>
                    </div>
                    <p class="plan-description">{{$adult->description}}</p>
                    <p class="cardPrice"> £{{$adult->price}}</p>
                    <p>{{$adult->frenquency}}</p>
                </div>
                @endforeach 
            </div>
           </div>
        <div class="price_kids price_small_container">
            <div class="p_container_title">
                <p class="title-price">Kids (age 7-11) </p>
            </div>
            <div class="price_cards">
                @foreach ($kids as $kid)
                <div class="card card-kids">
                    <div class="topCard ">
                        <p class="card-title ">  
                            {{$kid->plan_name}}
                        </p>
                    </div>
                    <p class="plan-description">{{$kid->description}}</p>
                    <p class="cardPrice"> £{{$kid->price}}</p>
                    <p>{{$kid->frenquency}}</p>
                </div>
                @endforeach 
            </div>
        </div>
    </div>

</div>
<script src="{{asset('js/price.js')}}"></script>

@endsection