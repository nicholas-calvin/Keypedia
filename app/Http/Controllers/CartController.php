<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function showMyCart(){
        $showCategory = Category::all();
        $total = 0;

        $shoppingCart = Cart::where('user_id', '=', Auth()->id())->get();
        $products = collect();

        foreach($shoppingCart as $sc) {
            $pr = Keyboard::find($sc->product_id);
            $products->push($pr);
            $total += $pr->price * $sc->quantity;
        }

        $params['carts'] = $shoppingCart;
        $params['categories'] = $showCategory;
        $params['products'] = $products;
        $params['totalPrice'] = $total;
        
        return view('myCartPage', $params);
    }
}
