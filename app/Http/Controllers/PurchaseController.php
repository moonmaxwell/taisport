<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function create()
    {
    	return view('purchases.create');
    }
}
