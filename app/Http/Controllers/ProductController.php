<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // --- GET /api/products
    public function getProducts(){
        Product::all();
    }
    
    // --- POST /api/products
    public function createProducts(){
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->categoryId;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        $product->images = $request->images;
        $product->save();
    }

    // --- GET /api/products/{productId}
    public function getProducts($productId){
        $product = Product::find($productId);
    }

    // --- PATCH /api/products/{productId}
    public function updateProducts($productId){
        $product = Product::find($productId);
        $product->name = $request->name;
        $product->category_id = $request->categoryId;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        $product->images = $request->images;
        $product->save();
    }

    // --- DELETE /api/products/{productId}
    public function deleteProducts($productId){
        $product = Product::find($productId);
        $product->delete();
    }

    // --- GET /api/categories/{categoryId}/products
    public function getAllProducts($categoryId){
        Product::where('category_id',$categoryId);

    }
}
