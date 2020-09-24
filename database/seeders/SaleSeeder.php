<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = rand(1,20);
        $itemSold = rand(1,20);
        Item::factory()->times(200)->create();
        Sale::factory()
            ->hasAttached(
                Item::factory()->count($items),
                ['Item_Sold' => $itemSold]
            )
            // ->hasItems($items)
            ->times(5)
            ->create();
    }
}
