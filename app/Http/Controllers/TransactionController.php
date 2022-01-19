<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactionHistoryPage(){
        $showCategory = Category::all();
        return view('transactionHistory', ['categories'=>$showCategory]);
    }
}
