<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Purchase;

class ItemController extends Controller
{
	public function create()
	{
		return view('items.create');
	}

	public function store()
	{
		return request();
    	//save to purchase
		//Purchase::create(['amount'=>request('amount'), 'currency'=>request('currency')[0]]);

    	//get saved purchase id

    	//loop attach to item id with data
    	//return to create page
	}
}
