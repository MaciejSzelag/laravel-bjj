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
            @foreach($classInfos as $classInfo)
            <div class="info-card info-card-big" >
            <div class="info-card_title" style="color:{{$classInfo->title_text_color}}; background-color:{{$classInfo->title_background_color}};background-image:{{$classInfo->title_background_color}}">{{$classInfo->title}}</div>
                <div class="info-card_desc">
                    <p>
                      {{$classInfo->content}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="{{asset('js/timetable.js')}}"></script>
@endsection


