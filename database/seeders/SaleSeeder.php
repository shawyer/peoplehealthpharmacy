<?php

namespace Database\Seeders;

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
        Sale::factory()
            ->times(100)
            ->hasItemSales($items)
            ->create();
    }
}
