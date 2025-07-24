<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latset()->paginate(10);
        return view('products.index', compact('products'));
    }
}
