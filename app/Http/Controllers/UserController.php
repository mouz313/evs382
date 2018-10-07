<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends ViewCompilingController
{
    public function getRegistrationPage(){
        return $this->buildPages('registration');
    }
}
