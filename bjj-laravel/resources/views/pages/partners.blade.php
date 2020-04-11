@extends('layouts.app',['title'=>'BJJPlymouth | Parners | Students | Adults | Kids'])
@section('content')
<section class="partners-wrap">
    <h1 class="partners_h1">Partners</h1>
    <p class="partners_p">We also team with Rice Champ Martial Arts & Mythic Martial Arts to offer joint memberships for
        those that want to
        train in another martial art too. <br /> (Contact for further details)</p>
    <div class="partners_container">
        <div class="partners-box">
            <div class="box-img">
                <a href="https://mythicmartialarts.co.uk/"><img src="{{asset('images/partners/mythic-跆拳x4.png')}}" alt="mythicmartialarts - logo"></a>
            </div>
            <div class="box-desc">
                <h1><a href="https://mythicmartialarts.co.uk/">Mythic Martial Arts</a></h1>
                <p>Over the years Mythic Martial Arts are always offering the top quality session to our students. There
                    are
                    over 20 Kids Martial Arts sessions, together with more than 15 classes to adult with our partner
                    school-Rice Champ MMA and Checkmat BJJ.</p>
            </div>


        </div>
        <div class="partners-box">
            <div class="box-img">
            <a href="https://ricechampmartialarts.com/"> <img src="{{asset('images/partners/rcma-logo.jpg')}}" alt="rcma-logo"></a>
            </div>
            <div class="box-desc">
                <h1><a href="https://ricechampmartialarts.com/">Rice Champ Martial Arts</a></h1>
                <p>
                    We teach Beginner and Advanced classes that are fantastic for learning essential self defence
                    skills, techniques and methods perfect for competition and most importantly that is just a great way
                    to have an exciting workout for both body and mind.
                </p>
            </div>

        </div>
        <div class="partners-box">
            <div class="box-img">
            <a href="https://www.sportstherapyplymouth.com/"> <img src="{{asset('images/partners/ah_st.webp')}}" alt="Amy Harrop's Sports Therapy - logo"></a>
            </div>
            <div class="box-desc">
                <h1><a href="https://www.sportstherapyplymouth.com//">Amy Harrop's Sports Therapy</a></h1>
                <p>
                    Sports Therapy is not just for sports injuries It's a great way to treat a wide variety of
                    musculoskeletal injuries. A wide variety of techniques are used in order to treat each individual
                    and each injury. Common treatments include: Massage, stretching, activation, rehabilitation
                    exercises & Taping.
                    <br />
                    <span> Full treatments will be available for a reduced rate of £25 for any current member of
                        Checkmat Plymouth.</span>
                </p>
            </div>

        </div>



    </div>
  </section>
@endsection