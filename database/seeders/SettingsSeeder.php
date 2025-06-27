<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::updateOrCreate([
            'name'=>'shopping'
        ],
            [
                'logo'=>'logo',
                'facebook'=>'www.shopping.facbook.com',
                'instegram'=>'www.shopping.instegram.com',
                'x'=>'www.shopping.x.com',
                'email'=>'shopping@gmail.com'
            ]
        );
    }
}
