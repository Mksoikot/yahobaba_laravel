<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ShowUser(){
        // return "<h1>My Name is Mk Soikot Bhuiyan</h1>";
        return view("welcome");
    }

    public function About(){
        return view("about");
    }
    public function Contact(){
        return view("contact");
    }
    public function Blog(){
        return view("blog");
    }
    public function User(string $id){
        return view("user",compact("id"));
    }
}
