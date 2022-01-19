<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showKeyboardCategory($category_id)
    {
        $showCategory = Category::all();
        $keyboardCategory = DB::table('categories')
                            ->join('keyboards', 'categories.id', '=', 'keyboards.category_id')
                            ->where('categories.id', 'LIKE', $category_id)->get();
        $categoryName = Category::find($category_id)->name;

        return view('category', ['keyboardCategories' => $keyboardCategory, 'categories' => $showCategory, 'categoryName' => $categoryName]);
    }
}
