@extends('layouts.admin.adminApp', ['title' => "Update | Timetable"])
<section class="dashboard-home-wrap">
<div class="h-s-wrap-block">
    <div class="add-newMember">
        <p>Update the Class</p>


        <form action="{{route('pages.admin.updateClass', ['id' => $findIdMember->id])}}" method="post">
            {{-- {{route('pages.admin.updateClass', ['id' => $findIdMember->id])}} --}}
            @csrf
            <label for="" class="time-label">Day of the week<sup>*</sup></label>
            <div class="input-label  ">

                <select name="day_of_the_week" required class="time-lab">
                    <option value="{{$findIdMember->day_of_the_week}}">{{$findIdMember->day_of_the_week}}</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
            </div>
            <label for="" class="time-label">Class Name<sup>*</sup></label>
            <div class="input-label">
                <input type="text" name="class_name" placeholder="Class Name" required maxlength="50" title="Class Name"
            class="time-lab" value="{{$findIdMember->class_name}}">
            </div>

            <label for="" class="time-label">Start time<sup>*</sup></label>
            <div class="input-label">
                <input type="text" name="start_hours" placeholder="hour" required maxlength="2" class="time"
                    title="hours" value="{{$findIdMember->start_hours}}">
                <label for="">:</label>
                <input type="text" name="start_minutes" placeholder="minute" required maxlength="2" class="time"
                    title="minutes" value="{{$findIdMember->start_minutes}}">
            </div>
            <label for="" class="time-label ">Finish time<sup>*</sup></label>
            <div class="input-label">
                <input type="text" name="end_hours" placeholder="hour" required maxlength="2" class="time" title="hours"
                    min="1" max="24" value="{{$findIdMember->end_hours}}">
                <label for="">:</label>
                <input type="text" name="end_minutes" placeholder="minute" required maxlength="2" class="time"
                    title="minutes" min="00" max="60" value="{{$findIdMember->end_minutes}}">
            </div>
            <label for="" class="time-label">Text color<sup>*</sup></label>
            <div class="input-label">
                <select name="text_color" required class="time-lab">
                    <option value="{{$findIdMember->text_color}}">{{$findIdMember->text_color}}</option>
                    <option value="white">White</option>
                    <option value="black">Black</option>
                </select>
            </div>
            <label for="" class="time-label ">Background color<sup>*</sup></label>
            <div class="input-label">
                <select name="background_color" required class="time-lab">
                    <option value="{{$findIdMember->background_color}}">
                        @if($findIdMember->background_color=="rgb(0, 100, 17)")
                        Green
                        @elseif($findIdMember->background_color=="rgb(156, 0, 0)")
                        Red
                        @elseif($findIdMember->background_color=="rgb(223, 208, 0)")
                        Yellow
                        @elseif($findIdMember->background_color=="rgb(0, 112, 156)") 
                        Blue
                        @elseif($findIdMember->background_color=="rgb(250, 112, 0)") 
                        Orange
                        @endif
                    
                    </option>
                    <option value="rgb(0, 100, 17)">Green</option>
                    <option value="rgb(156, 0, 0)">Red</option>
                    <option value="rgb(223, 208, 0)">Yellow</option>
                    <option value="rgb(0, 112, 156)">Blue</option>
                    <option value="rgb(250, 112, 0)">Orange</option>
                </select>
            </div>

            {{-- {{$findIdMember->background_color}} --}}
            <div class="input-label">
                <input type="submit" class="submitMember">
            </div>
        </form>
    </div>
</div>
</section>
