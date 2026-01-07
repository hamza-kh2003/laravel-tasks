<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
     $title ="Home Page";
     $message ="Welcome to Laravel Controllers";

       return view('page.home',compact('title','message'));
    }
    public function about(){
        $title ="about Page";
     $message ="Welcome to Laravel Controllers";

       return view('page.about',compact('title','message'));

    }
    public function contact(){

            $title ="contact Page";
           $message ="Welcome to Laravel Controllers";

       return view('page.contact',compact('title','message'));
    }

    public function user($name)
{
        return view('page.user', ['username' =>$name]);
}

public function product(){
    $products = [
    ['name' =>'Laptop','price' =>800],
    ['name' =>'Phone','price' =>500],
];
return view('page.products',compact('products'));
}
public function details($product){
  
return view('page.details',compact('product'));
}


}
