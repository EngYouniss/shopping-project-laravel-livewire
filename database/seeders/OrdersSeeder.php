<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Order::factory()->count(10)->create()->each(function ($order) {
    OrderDetail::factory()->count(rand(1, 4))->create([
        'order_id' => $order->id,
    ]);
});


    }
}
