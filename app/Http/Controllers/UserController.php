<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends ViewCompilingController
{
    public function getRegistrationPage(Request $request){
//        dd($request->all());
        return $this->buildPages('registration');
    }
    public function postRegistrationForm(Request $request){
//        dd($_POST);
        dd($request->all());
    }
}
