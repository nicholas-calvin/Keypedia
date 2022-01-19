<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        $keyboardList = Keyboard::all();
        $showCategory = Category::all();
        return view('home', ['keyboards' => $keyboardList, 'categories' => $showCategory]);
    }
}
