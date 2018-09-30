<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage(){
//         echo "My Home Page Function";
        return view('homepage');
       
    }

    public function getHomePage2(){
         echo "My Home Page Function";
       
    }
}
