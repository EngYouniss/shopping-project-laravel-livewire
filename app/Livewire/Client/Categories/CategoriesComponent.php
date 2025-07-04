<?php

namespace App\Livewire\Client\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CategoriesComponent extends Component
{
    public function render()
    {
        return view('client.categories.categories-component', [
            'categories' => Cache::remember('categories', now()->addMinutes(5), function () {
                return Category::whereNotNull('image')->latest()->take(4)->get();
            }),
            
            ]);
    }
}
