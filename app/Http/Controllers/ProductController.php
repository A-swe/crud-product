<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $products  = "Product controller";
        return view('products.index',['products' => $products]);
    }

    public function create() {
        return view('products.create');
    }
}
