<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('items')->insert([
    		'code' => '001',
    		'name' => 'iPhone',
    		'price' => 1000,
    		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    	]);
    }
}
