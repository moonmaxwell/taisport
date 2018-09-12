<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
	public function create()
	{
		return view('items.create');
	}

	public function store()
	{
		//return request();
    	//save to item
    	Item::create([
    		'code'=>request('code'),
    		'name'=>request('name')
,    		'price'=>request('price'),
    		'currency'=>request('currency')
    	]);

    	//return back
    	return back();
	}
}
