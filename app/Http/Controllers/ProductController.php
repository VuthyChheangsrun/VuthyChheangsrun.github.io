<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // --- GET /api/products
    public function getProducts(){
        $products = Product::all();
        return $products;
    }
    
    // --- POST /api/products
    public function createProducts(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->categoryId;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        $product->images = $request->images;
        $product->save();

        return [ "message" => "success", "data" => $product ];
    }

    // --- GET /api/products/{productId}
    public function getProduct($productId){
        $product = Product::find($productId);
        if ($product) {
            return $product;
        } else {
            return response([ "message" => "product not found"], 400);
        }
    }

    // --- PATCH /api/products/{productId}
    public function updateProducts($productId){
        $product = Product::find($productId);
        
        if ($product) {
            $product->name = $request->name;
            $product->category_id = $request->categoryId;
            $product->pricing = $request->pricing;
            $product->description = $request->description;
            $product->images = $request->images;
            $product->save();

            return $product;
        } else {
            return response([ "message" => "product not found"], 400);
        }
    }

    // --- DELETE /api/products/{productId}
    public function deleteProducts($productId){
        $productFound = Product::find($productId);
        if ($categoryFound) {
            $categoryFound->delete();

            return ["message" => "delete success"];
        } else {
            return response([ "message" => "product not found"], 400);
        }
    }

    // --- GET /api/categories/{categoryId}/products
    public function getAllProductsOfCategory($categoryId){
        $category = Category::find($categorId);
        if ($category) {
            return $category->products;
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }
}
