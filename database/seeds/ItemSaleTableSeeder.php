<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_sale')->insert([
    		'item_id' => 1,
    		'sale_id' => 1,
    		'price' => 1000,
    		'quantity' => 5,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	]);
    }
}
