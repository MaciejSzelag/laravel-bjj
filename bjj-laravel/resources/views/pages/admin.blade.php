@extends('layouts.head', ['title' => $title])
<section class="admin-log">
    <div class="wrap-log">
    
        <h2>Hello Ian</h2>
        <p>{{Date(' d  M  Y - H:i' )}}</p>

        <form action="pages/admin/dashboard" method="POST">
            @csrf
            <div class="imgcontainer">
                <img src="{{asset('images/avatar/avatar_img_1.png')}}" alt="Avatar" class="avatar" id="logImgAdmin">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                    
                <button type="submit">Login</button>
                <label class="checkbox">
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container small">
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
</section>