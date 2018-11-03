<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends ViewCompilingController
{
    public function getAddProductsPage(){
//        dd('asd');
//        dd(strlen('$2y$10$RXHKGIFMPRlzP/Usj/CTMueb1pP4D0asquU0j9Rc8bZjAeE7Gqtjq'));
        return $this->buildPages('add_products');
       
    }
    
    public function postAddProductsPage(Request $request){
         $apiData = array();
        dd($request->all());
        $rules  = [
            'p_name' => 'required|min:3|max:20',
            'p_description' => 'required|min:50',
            'p_brand' => 'required',
            'p_category' => 'required',   
            'wronty_s' => 'required|date',   
            'wranty_e' => 'required|date',   
            'p_quantity' => 'required',   
            'p_image' => 'mimes:jpg,jpeg,png',   
        ];
        
        $messages = [
            'p_name.min' => '3 char req',
            'p_description.required' => 'your product description is empty',
            'p_description.min' => 'your product description length is less then 50'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        
        // check pending on fail case
//        dd($validator->fail());
        
        $image = $request->file('image');
        
        
        $image_process = Image::make($request->file('image'));
        
        $filename = $request->get('user_name') . '.' . $image->getClientOriginalExtension();
        
        
        if(!is_dir(public_path('/products'))){
            mkdir(public_path('/products'));
        }
        
        if(!is_dir(public_path('/products/'.$request->get('user_name')))){
            mkdir(public_path('/products/'.$request->get('user_name')));
        }
        
        $user_uploading_path = public_path('/users/'.$request->get('user_name'));

        $watermark = Image::make(public_path('/img/wmark.png'));
        $image_process->resize(200, 100);
        
        $image_process->insert($watermark, 'center');

        
        
        $image_process->save($user_uploading_path.'/'.$filename);
//        dd($request->all());
        $apiData['name'] = $request->get('name');
        $apiData['user_name'] = $request->get('user_name');
        $apiData['email'] = $request->get('email');
        $apiData['password'] = md5($request->get('password'));
        $apiData['gender'] = $request->get('gender');
        $apiData['dob'] = $request->get('dob');
        $apiData['country'] = $request->get('country');
        $apiData['image'] = $filename;

        
        // Api Call 
        
        $apiCall = new ApiCall();
        
        $data = array();
        
        $data['params'] = $apiData;
        $data['m'] = 'user';
        $data['f'] = 'addToUser';
        
        // Assignment
//        $apiCall->runApiCall('user', 'addToUser' ,  $apiData);
        $user_result = $apiCall->runApiCall($data);
        
//        $result = User::addToUser($apiData);
//        dd($user_result);
        $this->viewData['registered_message'] = !empty($user_result->message) ? $user_result->message : '';
        
        return $this->buildPages('add_products');
    }

}
