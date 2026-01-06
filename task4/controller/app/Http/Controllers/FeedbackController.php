<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/*Resource controllers automatically generate CRUD routes using conventions, unlike normal controllers where routes are defined manually. 
Route names are auto-generated to provide consistency and make routing easier to reference and maintain. 
Resource controllers are useful for standard CRUD operations but are not suitable for applications with many custom or non-CRUD actions.
 */

/*A route without name() is accessed using a hardcoded URL, for example:
Route::get('/profile', ...);
<a href="/profile">

A route with name() is accessed using its route name, for example:
Route::get('/profile', ...)->name('profile.show');
<a href="{{ route('profile.show') }}">

Using route('name') is preferred because it avoids hardcoded URLs, improves maintainability, and prevents broken links when URLs change.
 */

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          $feedback = session('feedback');
        return view('feedback/index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("feedback.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    
       $feedback = [
            'name' => $request->name,
            'message' => $request->message,
        ];


        return redirect()->route('feedback.index')->with('feedback',$feedback);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
