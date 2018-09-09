<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(ItemPurchaseTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(ItemSaleTableSeeder::class);
    }
}
