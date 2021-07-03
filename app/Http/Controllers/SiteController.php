<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return \view('ecommerce.pages.index');
    }


    public function latest_product_json(Request $request)
    {
        $collection = Product::where('status',1)->orderBy('id', 'DESC')->paginate(6);
        return $collection;
    }
    public function search_product_json(Request $request,  $key){
        $collection = Product::where('status',1)
        ->where('name', $key)
        ->orWhere('price', $key)
        ->orWhere('name','LIKE','%'. $key . '%')
       ->orderBy('id','DESC')->paginate(6);
        return $collection;
    }
}
