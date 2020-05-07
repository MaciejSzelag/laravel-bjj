@extends('layouts\admin\adminApp', ['title' => $title])
@section('navLine')
    @include('layouts\admin\admin_pages\navLine')   
@endsection
@section('dashboard-content')

    <div class="dashboard_wrap activetimetable">
             @include('layouts\admin\admin_pages\asideMenu')
    </div>
@endsection
<section class="admin-content">
    <h1>Timetable</h1>
</section>