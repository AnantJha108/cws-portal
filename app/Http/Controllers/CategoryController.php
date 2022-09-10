<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $data['category'] = Category::all();
        return view("admin.manageCategory",$data);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
       $data = $request->validate([
         'cat_title' => 'required',
         'cat_description' => 'required',
       ]);
       Category::create($data);
       return redirect()->route("category.index");
    }

    
    public function show(Category $category)
    {
        //
    }

    
    public function edit(Category $category)
    {
        $data['category'] = $category;
        return view("admin.editCategory",$data);
    }

    
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'cat_title' => 'required',
            'cat_description' => 'required',
          ]);

          $category->cat_title = $request->cat_title;
          $category->cat_description = $request->cat_description;
          $category->save();
          return redirect()->route("category.index");

    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route("category.index");
    }
}
