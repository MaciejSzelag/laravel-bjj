@extends('layouts.app',['title'=>$title])
@section('content')
<div class="contact-form-wrap ">
<h1>Contact Us</h1>
<div class="contact_container">
   
    <div class="contact-form">
    
        <form action="/contact" method="POST">
            @csrf
          <label for="name">Name <span>*</span></label>
          <input type="text" id="name" required name="name" placeholder="Enter your name..">
      
          <label for="emial">E-mail <span>*</span></label>
          <input type="text" id="email" required name="email" placeholder="Enetr your e- mail">
      
     
      
          <label for="message">Your Message</label>
          <textarea id="message" required name="message" placeholder="Enetr your message..." ></textarea>
      
          <input type="submit" value="Send" class="send">
        </form>
   
    </div>
    <div class="contact-info_wrap">
        <div class="contact-details">
            <ul>
                <li>
                    <span><i
                            class="far fa-paper-plane"></i></span><a href="mailto:info@bjjplymouth.co.uk?Subject=Hello%20Ian" target="_top"> info@bjjplymouth.co.uk</a>
                </li>
                <li><span><i class="fas fa-mobile-alt"></i></span><a href="tel:+447983683491">07983 683491</a></li>
                <li><span><i class="fas fa-map-marker-alt"></i></span><a href="https://www.google.com/maps/@50.3690509,-4.1152498,149m/data=!3m1!1e3">Unit 34, Faraday Mill Business Park,
                PL4 0ST</a></li>
            </ul>
            <ul class="socialmedia">
                <li><a href="https://www.facebook.com/BJJPlymouth/"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="https://www.instagram.com/bjjplymouth/?hl=en"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</div>


@endsection