<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;

class UserController extends ViewCompilingController
{
    public function getRegistrationPage(Request $request){
//        dd($request->all());
        return $this->buildPages('registration');
    }
    public function postRegistrationForm(Request $request){
//        dd($_POST);
        
        $rules  = [
            'name' => 'required|min:3|max:10',
            'user_name' => 'required|alpha_num|min:3|max:10',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'retype_password' => 'required|same:password',
            'gender' => 'required|min:4',   
            'dob' => 'required|date',   
            'country' => 'required',   
            'image' => 'mimes:jpg,jpeg,png',   
        ];
        
        $messages = [
            'name.min' => '3 char req',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        
        // check pending on fail case
//        dd($validator->fail());
        
        $image = $request->file('image');
        
        
        $image_process = Image::make($request->file('image'));
        
        $filename = $request->get('user_name') . '.' . $image->getClientOriginalExtension();
        
        
        if(!is_dir(public_path('/users'))){
            mkdir(public_path('/users'));
        }
        
        if(!is_dir(public_path('/users/'.$request->get('user_name')))){
            mkdir(public_path('/users/'.$request->get('user_name')));
        }
        
        $user_uploading_path = public_path('/users/'.$request->get('user_name'));

        $watermark = Image::make(public_path('/img/wmark.png'));
        $image_process->resize(200, 100);
        
        $image_process->insert($watermark, 'center');

        
        
        $image_process->save($user_uploading_path.'/'.$filename);
        dd('here');
//        $image->move($user_uploading_path , $filename);
        dd('here');
        dd($request->all());
    }
}
