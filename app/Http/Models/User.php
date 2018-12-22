<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model {

    public static function addToUser($params) {

//        $rules  = [
//            'name' => 'required|min:3|max:10',
//            'user_name' => 'required|alpha_num|min:3|max:10|unique:eshop_users',
//            'email' => 'required|email',
//            'password' => 'required|min:5',
//            'retype_password' => 'required|same:password',
//            'gender' => 'required|min:4',   
//            'dob' => 'required|date',   
//            'country' => 'required',   
//            'image' => 'mimes:jpg,jpeg,png',   
//        ];
//        
        $final_data = array();
        $inserUserData = (array) $params;
//        dd($inserUserData);
        DB::table('eshop_users')->insert($inserUserData);

        $final_data['status'] = 200;
        $final_data['message'] = 'User Successfully Registered';
        $final_data['result'] = [];
        $final_data['count'] = '';
        return $final_data;
//        dd($params);
    }
    
    public static function getToUser($arg){
//        dd($arg->email);
        $final_data = array();
        $all_users = DB::table('eshop_users')
                ->where([
                    ["email" ,  '=' , $arg->email],
                    ["password" ,  '=' , $arg->password]
                ])
                ->first();
        $final_data['status'] = 200;
        $final_data['message'] = 'User Successfully fetched';
        $final_data['result'] = $all_users;
        $final_data['count'] = '';
        return $final_data;
//        dd($all_users);
    }

}
