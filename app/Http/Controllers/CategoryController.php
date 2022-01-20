<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

    public function manageCategoriesPage(){
        $showCategory = Category::all();
        return view('manageCategories', ['categories' => $showCategory]);
    }

    public function showUpdateCategoryPage($category_id){
        $showCategory = Category::all();
        $category = Category::find($category_id);
        return view('updateCategory', ['categories' => $showCategory, 'category' => $category]);
    }

    public function updateCategory($category_id){


        $showCategory = Category::all();
        return view('manageCategories', ['categories' => $showCategory]);
    }

    public function deleteCategory($category_id){

        $delete = Category::findOrFail($category_id);
        $delete->delete();

        return redirect('manageCategories')->with('success', 'Item successfully deleted.');
    }
}
