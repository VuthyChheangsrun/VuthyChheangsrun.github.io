<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // --- GET /api/categories
    public function getCategories(){
        Category::all();
    }
    
    // --- POST /api/categories
    public function createCategories(){
        $category = new Category;
        $category->name = $request->name;
        $category->save();
    }

    // --- GET /api/categories/{categoryId}
    public function getCategories($categoryId){
        $category = Category::find($categoryId);
    }

    // --- PATCH /api/categories/{categoryId}
    public function updateCategories($categoryId){
        $category = Category::find($categoryId);
        $category->name = $request->name;
        $category->save();
    }

    // --- DELETE /api/categories/{categoryId}
    public function deleteCategories($categoryId){
        $category = Category::find($categoryId);
        $category->delete();
    }

}
