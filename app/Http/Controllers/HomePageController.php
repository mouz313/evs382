<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewCompilingController
{
    public function getHomePage(){
        
        return $this->buildPages('home');
       
    }

}
