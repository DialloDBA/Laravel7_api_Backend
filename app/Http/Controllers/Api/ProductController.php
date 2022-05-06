<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();

        return $products;
    }

    
    public function store(Request $request)
    {
        $product = Product::create([
            "description"=>$request->description,
            "price"=>$request->price,
            "stock"=>$request->stock,
        ]);
    }

    public function show($product)
    {
        $product = Product::find($product);
        return $product;
    }

    
    public function update(Request $request, $id)
    {
        $p = Product::find($id);
        $product = $p->update([
            "description"=>$request->description,
            "price"=>$request->price,
            "stock"=>$request->stock,
        ]);
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $p = $product->delete();
        return $p;
    }
}
