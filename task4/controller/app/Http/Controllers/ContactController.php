<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

/*
What does @csrf mean?

@csrf stands for Cross-Site Request Forgery protection.
It generates a hidden input field containing a unique security token that is attached to the form.

Why is @csrf required?

@csrf is required to protect the application from CSRF attacks, where malicious websites attempt to submit unauthorized requests on behalf of an authenticated user.
Laravel validates the CSRF token on every POST, PUT, PATCH, and DELETE request. If the token is missing or invalid, the request is rejected. */

    public function create() {

        return view("contact");
    }


    public function store(Request $request) {

    
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

    
         return redirect()->route('contact.result', compact('name','email','message'));
    }

    public function result(Request $request)
{
      $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];
    return view('result', compact('data'));
}
}
