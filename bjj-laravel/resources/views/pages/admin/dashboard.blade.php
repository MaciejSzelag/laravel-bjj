@extends('layouts.admin.adminApp', ['title' => $title])
<div class="navLine">
    {{-- <div class="name" id="id-name"><a href="logout">Logout</a></div> --}}
    <div class="date">{{date('d / M / Y')}}</div>
</div>
<aside class="dashoard-menu-wrap">
    <div class="dashoard-menu">
        <div class="topId">
            <h1 id="admin-id">Admin - {{Auth::user()->name}} </h1>
        </div>
       {{-- <div class="dashoard-loged"></div> --}}
       <h2>Main Navigation</h2>
       <div class="block Home  active">Home</div>
       <div class="block Members">Members</div>
       <div class="block Prices ">Prices</div>
       <div class="block Timetable">Timetable</div>
       {{-- <div class="block Seminar">Seminar</div>
       
       <div class="block News">News</div>
       <div class="block About">About</div> --}}
     
    </div>


</aside>
<section class="admin-content">
   <section class="adminPanel home boardActive">  {{--   boardActive --}}
        @include('/pages/admin/dashboard/d-home')
    </section>
    <section class="adminPanel members ">
        @include('/pages/admin/dashboard/d-members')
     </section>
    <section class="adminPanel price ">
        @include('/pages/admin/dashboard/d-prices')
    </section>
    <section class="adminPanel timetable ">
      @include('/pages/admin/dashboard/d-timetable')
      </section>
    <section class="adminPanel seminar ">
        @include('/pages/admin/dashboard/d-seminar')
     </section>
       <section class="adminPanel news ">
        @include('/pages/admin/dashboard/d-news')
     </section>
     <section class="adminPanel about ">
        @include('/pages/admin/dashboard/d-about')
     </section>
     {{-- <section class="adminPanel home ">
        @include('home')
     </section> --}}
</section>

<script src="{{asset('/../js/dashboard/functions.js')}}"></script>
<script src="{{asset('/../js/dashboard/admin.js')}}"></script>

