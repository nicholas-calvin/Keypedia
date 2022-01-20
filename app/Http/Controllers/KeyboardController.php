<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KeyboardController extends Controller
{
    public function getKeyboardDetails($keyboardId){
        $details = DB::table('keyboards')
                        ->where('keyboards.id', 'LIKE', $keyboardId)
                        ->get();
        $showCategory = Category::all();
        return view('keyboardDetail', ['keyboardDetail'=>$details, 'categories' => $showCategory]);
    }

    public function showAddKeyboardPage(){
        $showCategory = Category::all();
        return view('keyboardAdd', ['categories' => $showCategory]);
    }

    public function addKeyboard(Request $request){
        
        $validator = Validator::make($request->all(), [
            'keyboardName' => 'required|unique:keyboards,name|min:5',
            'keyboardCategory' => 'required',
            'keyboardPrice' => 'required|integer|min:0',
            'keyboardDescription' => 'required|min:20',
            'keyboardImage' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        // $request->file('image')->store('public');
        
        $keyboard = new Keyboard();
        $keyboard->name = $request->keyboardName;
        $keyboard->category_id = $request->keyboardCategory;
        $keyboard->price = $request->keyboardPrice;
        $keyboard->description = $request->keyboardDescription;
        $keyboard->imgPath = $request->keyboardPath;
        
        $keyboard->save();

        return redirect('/home')->with('success', 'Item successfully added.');
    }

    public function updateKeyboard(Request $request){
        $showCategory = Category::all();
        return view('updateKeyboard', ['categories' => $showCategory]);
    }

    public function deleteKeyboard($keyboard_id){

        $delete = Keyboard::findOrFail($keyboard_id);
        $delete->delete();

        return redirect('manageCategories')->with('success', 'Item successfully deleted.');
    }

}
