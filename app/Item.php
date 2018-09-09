<?php

namespace App;


class Item extends Model
{
	public function purchases()
	{
		return $this->belongsToMany('App\Purchase')
						->withTimeStamps()
						->withPivot('price', 'quantity')
						->as('item_purchase');
	}
}
