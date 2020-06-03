@extends('layouts.appMine',['title'=>$title])
@section('content')
<section class="timetable-wrap">
    <div class="timetable-wrap_container">
        <h1 class="t-title">Timetable</h1>
        <div class="container_t">
            <div class="day-card">
                <div class="day-card_name">Monday</div>
                <div class="day-card_times">
                    @foreach ($mondays as $monday)
                    <div class="day-time">
                        <p>{{$monday->start_hours}}:{{$monday->start_minutes}} -
                            {{$monday->end_hours}}:{{$monday->end_minutes}}</p>
                        <p class="className mx"
                            style="color:{{$monday->text_color}}; background-color:{{$monday->background_color}}">
                            {{$monday->class_name}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="day-card">
                <div class="day-card_name">Tuesday</div>
                <div class="day-card_times">
                  @foreach ($tuesdays as $tuesday)
                  <div class="day-time">
                      <p>{{$tuesday->start_hours}}:{{$tuesday->start_minutes}} -
                          {{$tuesday->end_hours}}:{{$tuesday->end_minutes}}</p>
                      <p class="className mx"
                          style="color:{{$tuesday->text_color}}; background-color:{{$tuesday->background_color}}">
                          {{$tuesday->class_name}}</p>
                  </div>
                  @endforeach
              </div>
            </div>
            <div class="day-card">
                <div class="day-card_name">Wednesday</div>
                <div class="day-card_times">
                  @foreach ($wednesdays as $wednesday)
                  <div class="day-time">
                      <p>{{$wednesday->start_hours}}:{{$wednesday->start_minutes}} -
                          {{$wednesday->end_hours}}:{{$wednesday->end_minutes}}</p>
                      <p class="className mx"
                          style="color:{{$wednesday->text_color}}; background-color:{{$wednesday->background_color}}">
                          {{$wednesday->class_name}}</p>
                  </div>
                  @endforeach
              </div>
            </div>
            <div class="day-card">
                <div class="day-card_name">Thursday</div>
                <div class="day-card_times">
                  @foreach ($thursdays as $thursday)
                  <div class="day-time">
                      <p>{{$thursday->start_hours}}:{{$thursday->start_minutes}} -
                          {{$thursday->end_hours}}:{{$thursday->end_minutes}}</p>
                      <p class="className mx"
                          style="color:{{$thursday->text_color}}; background-color:{{$thursday->background_color}}">
                          {{$thursday->class_name}}</p>
                  </div>
                  @endforeach
              </div>
            </div>
            <div class="day-card">
                <div class="day-card_name">Friday</div>
                <div class="day-card_times">
                  @foreach ($fridays as $friday)
                  <div class="day-time">
                      <p>{{$friday->start_hours}}:{{$friday->start_minutes}} -
                          {{$friday->end_hours}}:{{$friday->end_minutes}}</p>
                      <p class="className mx"
                          style="color:{{$friday->text_color}}; background-color:{{$friday->background_color}}">
                          {{$friday->class_name}}</p>
                  </div>
                  @endforeach
              </div>
            </div>
            <div class="day-card">
                <div class="day-card_name">Saturday</div>
                <div class="day-card_times">
                  @foreach ($saturdays as $saturday)
                  <div class="day-time">
                      <p>{{$saturday->start_hours}}:{{$saturday->start_minutes}} -
                          {{$saturday->end_hours}}:{{$saturday->end_minutes}}</p>
                      <p class="className mx"
                          style="color:{{$saturday->text_color}}; background-color:{{$saturday->background_color}}">
                          {{$saturday->class_name}}</p>
                  </div>
                  @endforeach
              </div>
            </div>
        </div>
        <h1 class="t-title">Class Information</h1>
        <div class="container_info">
            <div class="info-card info-card-big">
                <div class="info-card_title c-private">Private Sessions</div>
                <div class="info-card_desc">
                    <p>
                        Lead Coaches Ian and Amy are also available for 1:1 sessions or 2:1
                        sessions, these would be outside class times and would depend on
                        availability. 1:1 sessions allows complete private tuition between
                        you and your coach allowing you to work on what you want to. These
                        are ideal for personalised progression, honing technique, game
                        planning or gaining more confidence. 2:1 sessions are a great way to
                        get more private tuition but at a lower cost and with a friend to
                        train with. You can choose between you what you want to work on. If
                        you would like the 2:1 sessions but don’t have anyone to join you
                        please contact me and we can discuss options it is likely that your
                        not the only one and we can pair you up.
                    </p>
                    <div class="desc-img">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="info-card info-card-med">
                <div class="info-card_title c-beginner">
                    Beginners, Juniors & Adults
                </div>
                <div class="info-card_desc">
                    <p>
                        In this class students will be taught movements and drills that will
                        prepare them for the Mixed Level classes. There will be specific
                        training at the end of every session, this will give students time
                        to practice what they have learnt in the lesson with a live partner.
                        These classes are open to adults (age 16+) and juniors (age 12-15).
                        Adults and Juniors will be separated slightly by only training with
                        those in the same age bracket, this is to allow everyone to benefit
                        and get the most out of their training (exemptions may be made
                        dependant on specific circumstances).
                    </p>
                </div>
            </div>
            <div class="info-card info-card-small">
                <div class="info-card_title c-kids ">Kids</div>
                <div class="info-card_desc">
                    <p>
                        Kids Gi class suitable for children age between 7 and 11. We teach
                        BJJ, so the kids will be learning the same type of things as the
                        adults but in a way more suited to the age. There will be a mixture
                        of drilling technique, specific training and sparring. We aim to
                        make the classes enjoyable and fun whilst progressing in Brazilian
                        Jiu Jitsu. We cater for all interests from those who want to compete
                        to those who just want to come and have fun.
                    </p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_title c-mix">Mixed Levels</div>
                <div class="info-card_desc">
                    <p>
                        Mixed Level Gi class is where the instructor will go more in-depth
                        into technique, covering different scenarios and concepts. there
                        will be specific training and sparring in these sessions. This class
                        is only suitable for those above the age of 16.
                    </p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_title c-nogi">Drilling Gi/NoGi Mixed Level</div>
                <div class="info-card_desc">
                    <p>
                        Drilling class is where you get to work through your own personal
                        drills. Maybe you have a competition coming up and you want to work
                        on your game or there’s techniques you need/want to perfect. The
                        coach will be at hand to help, for you to ask questions or to
                        provide you with something to work on. This class is only suitable
                        for those above the age of 16.
                    </p>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_title c-open">Open Mat</div>
                <div class="info-card_desc">
                    <p>
                        This is an open mat session open to all members to come to, this
                        isn’t a taught session and therefore there is no cost to this for
                        paying members of the club. This is an opportunity to come and work
                        through what you have learnt in previous sessions, drill or roll.
                        Although not always, an instructor is usually there for you to ask
                        questions or advice regarding you game.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/timetable.js')}}"></script>
@endsection
