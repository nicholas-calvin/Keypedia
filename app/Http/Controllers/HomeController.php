<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        // $productList = Product::all();
        $showCategory = Category::all();
        return view('home', [ 'categories' => $showCategory]);
    }
}
