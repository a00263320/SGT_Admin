<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductExtend extends Controller
{
    //product all 繼承方法
    public function pro_all()
    {
        $pro = Product::all();
        return $pro;
    }

    //product create 繼承方法
    public function pro_create($request)
    {
        $pro_c = Product::create($request);
        return $pro_c;
    }

    //product id 繼承方法
    public function pro_id($id)
    {
        $pro_id = Product::find($id);
        return $pro_id;
    }


}
