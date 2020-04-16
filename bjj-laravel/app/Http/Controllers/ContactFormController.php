<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest; 

use Mail;
use App\Mail\NewcontactRequest;
class ContactFormController extends Controller
{
    public function contactForm(){
        $title = 'Contact Form | Contact | e-mail';
        return view('pages/contactForm', compact('title'));
    }

    public function mail(ContactRequest  $request){
        Mail::to('szelag.maciej@gmail.com')->send(new NewcontactRequest($request));
      
    return view('pages/contact');
    }

}
