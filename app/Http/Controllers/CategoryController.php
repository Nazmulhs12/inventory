<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('admin.category.category',[
            'categories'=>$categories
        ]);
    }
    public function addCategory() {
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request) {
        //Category::create($request->all());

        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_desc = $request->cat_desc;
        $category->save();

        return back();
    }
    public function editCategory($id) {
        $category = Category::find($id);
        //return $category;
        return view('admin.category.edit-category',[
            'category'=> $category
        ]);
    }
    public function updateCategory(Request $request) {
        $category = Category::find($request->id);
        $category->cat_name = $request->cat_name;
        $category->cat_desc = $request->cat_desc;
        $category->save();

        return back();
    }
    

}
