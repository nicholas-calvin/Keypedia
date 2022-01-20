<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helper;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $validator = Validator::make($request->all(), [
            'quantity' => 'required'
        ]);
        if($validator->fails()){
            return back()->with('error', 'Quantity must not be empty');
        }

        $exists = Cart::firstWhere('keyboard_id', '=', $request->keyboardId);
        if($exists == null){
            $cart = new Cart;
            $cart->user_id = Auth()->user()->role_id;
            $cart->keyboard_id = $request->keyboardId;
            $cart->quantity = $request->quantity;
            if($request->quantity <= 0){
                return back()->with('error', 'Quantity must not be empty');
            } 
            $cart->save();
        }
        else{
            $exists->quantity += $request->quantity;
            $exists->save();
        }

        session()->flash('success', 'Product is Added');

        return redirect('/cart');
    }

    public function updateQuantityItem(Request $request){
        $exists = Cart::firstWhere('keyboard_id', '=', $request->keyboardId);

        if($request->quantity <= 0){
            return back()->with('error', 'Quantity must not be empty');
        }

        $exists->update([
            'quantity' => $request->quantity
        ]);

        session()->flash('success', 'Quantity is updated');

        return redirect('/cart');
    }
}
