@extends('layouts.admin.adminHead', ['title'=> $title])
<body class="admin-dashboard-body">
    @yield('navLine')
    @yield('dashboard-content')
 
</body>
</html>