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
        Item::factory()->times(20)->create();
        Sale::factory()
            ->times(200)
            ->hasAttached(
                Item::factory()->count(rand(1,20)),
                ['Item_Sold' => rand(1,20)]
            )
            ->create();
    }
}
