<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product

class ProductController extends Controller
{
    public function index() {
        $products = "Product list form in ProductController";
        return view('products.index', ['products' => $products]);
    }

    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move()

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description; 
        $product->image =
    }
}
