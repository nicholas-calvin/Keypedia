<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'username' => 'required|min:5',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required',
            'dob' => 'required'
        ]);

        if($validate->fails()){
            return back()->with('error', 'Please fill the form correctly')->withErrors($validate);
        }

        //create new customer
        $new_user = new User;
        $new_user->username = $request->username;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->address = $request->address;
        $new_user->gender = $request->gender;
        $new_user->dob = $request->dob;

        $cust_role_id = Role::firstWhere('name', '=', 'Customer')->id;
        $new_user->role_id = $cust_role_id;

        $new_user->save();

        return redirect('/login');
    }

    public function showChangePasswordPage(){
        $category = Category::all();
        return view('changePassword', ['categories' => $category]);
    }

    public function changePassword(Request $request){
        $validate = Validator::make($request->all(), [
            'currentPassword' => 'required|password',
            'newPassword' => 'required|confirmed|min:8',
            'newPassword_confirmation' => 'required'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate);
        }
        $user = Auth()->user();
        // $user->password = $request->newPassword;
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return back()->with('success', 'Password Changed!');
    }
}
