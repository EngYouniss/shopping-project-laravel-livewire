<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\offers;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Order::factory()->count(10)->create();
        OrderDetail::factory()->count(10)->create();
        Offer::factory()->count(5)->create();
        Review::factory()->count(5)->create();
    }
}
