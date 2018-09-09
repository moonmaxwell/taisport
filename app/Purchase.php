<?php

namespace App;


class Purchase extends Model
{
	public function items()
	{
		return $this->belongsToMany('App\Item')->withTimeStamps();
	}
}
