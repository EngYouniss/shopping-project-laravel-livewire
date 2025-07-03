<?php

namespace App\Livewire\Client\Products;

use App\Models\Product;
use Livewire\Component;

class FeaturedProductsComponent extends Component
{
    public function render()
    {
        return view('client.products.featured-products-component',[
            'featuredProducts'=>Product::where('is_featured',1)->get()
        ]);
    }
}
