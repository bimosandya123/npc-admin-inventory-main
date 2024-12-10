<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(Category $categories)
    {
        $categories = Category::latest()->paginate(5);
        return view('pages.category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable'
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function show(Category $category)
    {
        return view('pages.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        //
        return view('pages.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable'
        ]);

        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        //
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
