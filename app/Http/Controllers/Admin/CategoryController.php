<?php

namespace App\Http\Controllers\Admin;;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');

        $category->save();
        return redirect('/dashboard')->with('status'. "Category Added Successfully");
        
    }
}
