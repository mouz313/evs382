<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends ViewCompilingController
{
    public function getHomePage(){
//        dd('asd');
//        dd(strlen('$2y$10$RXHKGIFMPRlzP/Usj/CTMueb1pP4D0asquU0j9Rc8bZjAeE7Gqtjq'));
        return $this->buildPages('admin');
       
    }

}
