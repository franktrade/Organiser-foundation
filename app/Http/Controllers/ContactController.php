<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('website.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'string|min:5|max:255',
            'email' => 'email:dns|string|max:255',
            'message' => 'string|min:10|max:1500',
        ]);

        Mail::to(config('app.company_email'))->send(new ContactUsMail($request->only(['name', 'email', 'message'])));

        return back()->with(['message', 'Thanks for reaching out, our team get back to you soon.']);
    }
}
