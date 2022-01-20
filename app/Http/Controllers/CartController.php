<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    
    public function showMyCart(){
        $showCategory = Category::all();
        $total = 0;

        $shoppingCart = Cart::where('user_id', '=', Auth()->id())->get();
        $keyboards = collect();

        foreach($shoppingCart as $sc) {
            $pr = Keyboard::find($sc->keyboard_id);
            $keyboards->push($pr);
            $total += $pr->price * $sc->quantity;
        }

        $params['carts'] = $shoppingCart;
        $params['categories'] = $showCategory;
        $params['keyboards'] = $keyboards;
        $params['totalPrice'] = $total;
        
        return view('myCartPage', $params);
    }

    public function addToCart(Request $request){
        $pr = Keyboard::find($request->id);

        if($pr == null)
            return back();

        if($pr->stock <= 0)
            return back()->with('error', 'Stock Empty!');

        $validator = Validator::make($request->all(), [
            'quantity' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        if($pr->stock - $request->quantity < 0)
            return back()->with('error', 'Cannot exceed stock left');

        $pr->stock -= $request->quantity;
        $pr->save();

        $exists = Cart::firstWhere('keyboard_id', '=', $request->id);

        if($exists == null) {
            $cart = new Cart;
            $cart->user_id = Auth()->id();
            $cart->keyboard_id = $request->id;
            $cart->quantity = $request->quantity;
            $cart->imgPath = $request->imgPath;
            $cart->save();
        } else {
            $exists->quantity += $request->quantity;
            $exists->save();
        }

        session()->flash('success', 'Product is Added');

        return redirect('/cart');
    }
}
