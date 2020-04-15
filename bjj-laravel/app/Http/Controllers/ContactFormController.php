<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contactForm(){
        $title = 'Contact Form | Contact | e-mail';
        return view('pages/contactForm', compact('title'));
    }
}
