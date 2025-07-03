<?php

namespace App\Livewire\Client\Products;

use App\Models\Product;
use Livewire\Component;

class LatestProductsComponent extends Component
{
    public function render()
    {
        return view('client.products.latest-products-component',[
            'latestProducts'=>Product::latest()->take(5)->get()
        ]);
    }
}
