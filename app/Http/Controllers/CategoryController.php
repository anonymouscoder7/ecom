<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.category',compact('categories'));
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->category;
        $category->save();
        return back();
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->category;
        $category->update();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
