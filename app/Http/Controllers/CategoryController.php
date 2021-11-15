<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view('admin.categories.list', compact('categories'));
    }

    function create()
    {
    
        return view('admin.categories.create');
    }

    function store(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->lk;
        $categories->save();
        return redirect()->route('categories.index');

    }

    function update($id) {
        $categories = Category::findOrFail($id);
        return view('admin.categories.update', compact( 'categories'));
    }

    function edit(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('categories.index');
    }

    function delete(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        
        $categories->delete();

        return redirect()->route('categories.delete');
    }
}
