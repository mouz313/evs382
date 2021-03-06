<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model {

    public static function addProduct($params) {
//        dd($params);
        $final_data = array();
        $inserProductData = (array) $params;
//        dd($inserUserData);
        DB::table('eshop_products')->insert($inserProductData);

        $final_data['status'] = 200;
        $final_data['message'] = 'Product Successfully Added';
        $final_data['result'] = [];
        $final_data['count'] = '';
        return $final_data;
    }
    
    public static function getProducts($params){
        $final_data = array();
        $result   = DB::table('eshop_products')
                ->where('name', 'like' , "%$params->productSearch%")
                ->get();
        
        $final_data['status'] = 200;
        $final_data['message'] = 'Product Fetch Succesfully';
        $final_data['result'] = $result;
        return $final_data;
    }

}
