<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    
    public static function addToUser($params){
        
        $rules  = [
            'name' => 'required|min:3|max:10',
            'user_name' => 'required|alpha_num|min:3|max:10|unique:eshop_users',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'retype_password' => 'required|same:password',
            'gender' => 'required|min:4',   
            'dob' => 'required|date',   
            'country' => 'required',   
            'image' => 'mimes:jpg,jpeg,png',   
        ];
        
        
        $inserUserData = (array) $params;
//        dd($inserUserData);
        DB::table('eshop_users')->insert($inserUserData);
//        dd($params);
    }
    
}
