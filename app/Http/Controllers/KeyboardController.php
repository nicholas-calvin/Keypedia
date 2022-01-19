<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        return view('addKeyboard', ['categories' => $showCategory]);
    }

    public function addKeyboard(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:keyboards,name|min:5',
            'category_id' => 'required',
            'price' => 'required|min:0',
            'description' => 'required|min:20',
            'image' => 'required'
        ]);

        if($validator->fails())
            return back()->withErrors($validator);

        $product = new Keyboard();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;

        $file = $request->file('image');
        $fileName = uniqid().File::extension($file->getClientOriginalName());
        $relativePath = 'assets/img/'. date('Y') . '/' . date('m');
        $destinationPath = public_path().'/'.$relativePath;
        $file->move($destinationPath, $fileName);

        $product->imgPath = $relativePath.'/'.$fileName;
        $product->save();

        return redirect('/home')->with('success', 'Item successfully added.');
    }
}
