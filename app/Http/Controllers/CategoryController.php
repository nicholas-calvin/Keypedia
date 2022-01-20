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
                            ->where('categories.id', 'LIKE', $category_id)->simplePaginate(8);
        $categoryName = Category::find($category_id)->name;

        return view('keyboard', ['keyboardCategories' => $keyboardCategory, 'categories' => $showCategory, 'categoryName' => $categoryName, 'category_id' => $category_id]);
    }

    public function showKeyboard(Request $request){
        $showCategory = Category::all();
        $keyboardCategory = DB::table('categories')
                            ->join('keyboards', 'categories.id', '=', 'keyboards.category_id')
                            ->where('categories.id', 'LIKE', $request->keyboardCategory)->simplePaginate(8);
        $categoryName = Category::find($request->keyboardCategory)->name;

        return view('keyboard', ['keyboardCategories' => $keyboardCategory, 'categories' => $showCategory, 'categoryName' => $categoryName, 'category_id' => $request->keyboardCategory]);
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

    public function updateCategory(Request $request){

        dd($request->categoryName);
        $showCategory = Category::all();
        return view('manageCategories', ['categories' => $showCategory])->with('success', 'Item successfully deleted.');
    }

    public function deleteCategory($category_id){

        $delete = Category::findOrFail($category_id);
        $delete->delete();

        return redirect('manageCategories')->with('success', 'Item successfully deleted.');
    }
}
