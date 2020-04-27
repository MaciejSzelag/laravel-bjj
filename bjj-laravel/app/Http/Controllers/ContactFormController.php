<?php

namespace App\Http\Controllers;

use App\Models\ContactUS;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

use Mail;
use App\Mail\NewcontactRequest;

class ContactFormController extends Controller
{
    public function contactForm()
    {
        $title = 'Contact Form | Contact | e-mail';
        return view('pages/contactForm', compact('title'));
    }

    public function mail(ContactRequest $request)
    {

        ContactUS::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            // 'message' => 'Darek Test',
        ]);

        // dd(333);


        Mail::to('setUpaddress@gmail.com')->send(new NewcontactRequest($request));

        // return view('pages/contact');
        return back()->with('status', 'Thank you! Your message has been received.');
    }

}
