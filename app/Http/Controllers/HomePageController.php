<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage(){
        dd(config('pages.home'));
        return view('home');
       
    }

}
