<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // --- GET /api/categories
    public function getCategories(){
        $categories = Category::all();
        return $categories;
    }
    
    // --- POST /api/categories
    public function createCategory(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return [ "message" => "success", "data" => $category ];
    }

    // --- GET /api/categories/{categoryId}
    public function getCategory($categoryId){
        $category = Category::find($categoryId);
        if ($category) {
            return $category;
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }

    // --- PATCH /api/categories/{categoryId}
    public function updateCategories($categoryId){
        $categoryFound = Category::find($categoryId);
        if ($categoryFound) {
            $categoryFound->name = $request->get('name');
            $categoryFound->save();

            return $categoryFound;
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }

    // --- DELETE /api/categories/{categoryId}
    public function deleteCategories($categoryId){
        $categoryFound = Category::find($categoryId);

        if ($categoryFound) {
            $categoryFound->delete();

            return ["message" => "delete success"];
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }

}
