<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\offers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Offer::Factory()->count(5)->create();
    }
}
