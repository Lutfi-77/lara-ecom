<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategorySellerController extends Controller
{
    //

    public function index()
    {
        $categories = Category::all();
        return view('seller.allCategory', compact('categories'));
    }

    public function addCategory()
    {
        return view('seller.addCategory');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->categoryName;
        $category->description = $request->categoryDesc;
        $category->save();

        return redirect()->route('seller.categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('seller.categories');
    }


}
