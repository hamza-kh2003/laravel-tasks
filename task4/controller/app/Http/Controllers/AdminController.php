<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    // compact(): shortest syntax, used when variable names in controller and view are the same
    // with(): chain-style syntax, useful when passing a small number of variables
   // array syntax: most explicit and flexible, used when you want full control over variable names  
    public function dashboard(){

        $title="Admin Dashboard";
        $usersCount=120;

        return view("admin.dashboard",compact('title', 'usersCount'));
        //return view("admin.dashboard",['title' => 'Admin Dashboard','usersCount' => 120]);
        //return view("admin.dashboard") ->with('title', 'Admin Dashboard')->with('usersCount', 120);;
    }
}
