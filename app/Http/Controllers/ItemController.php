<?php

namespace App\Http\Controllers;

use App\Imports\ItemsImport;
use App\Exports\ItemsExport;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ItemController extends Controller
{
    //
    public function index(Item $items)
    {
        $items = Item::latest()->paginate(5);
        return view('pages.item.index', compact('items'));
    } 

    public function import(Request $request)
    {
        $request->validate([
            'import_file' =>[
                'required',
                'file'
            ],
        ]);
        Excel::import(new ItemsImport, $request->file('import_file'));

        return redirect()->back()->with('status', 'Imported Sucessfully');
    } 

    public function export() 
    {
        $filename = "User.xlsx";
        return item::query()->downloadExcel($filename);
    }
    
    public function create(Category $categories)
    {
        $categories = Category::all();
        return view('pages.item.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable',
            'category_id' => 'required|exists:categories,id',
            'year_purchased' => 'required|integer',
            'quantity' => 'required|integer',
            'quantity_type' => 'required|string',
            'condition' => 'required|string',
            'location' => 'required|string'
        ]);

        Item::create($request->all());

        return redirect()->route('item.index')->with('success', 'Item created successfully');
    }

    public function show(Item $item)
    {
        //
        return view('pages.item.show', compact('item'));
    }

    public function edit(Item $item, Category $categories)
    {
        $categories = Category::all();
        return view('pages.item.edit', compact('item', 'categories'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer',
            'location' => 'required|string'
        ]);

        $item->update($request->all());

        return redirect()->route('item.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('item.index')->with('success', 'Item deleted successfully');
    }
}
