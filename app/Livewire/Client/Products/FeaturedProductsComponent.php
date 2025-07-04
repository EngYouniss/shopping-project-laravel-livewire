<?php

namespace App\Livewire\Client\Products;

use App\Models\Product;
use Livewire\Component;

class FeaturedProductsComponent extends Component
{

         public function addToCart($productId)
{
    $product = Product::find($productId);

    if (!$product) {
        $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Product not found']);
        return;
    }

    $cartProduct = [
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'image' => $product->image,
    ];

    $this->dispatch('productAddedToCart', $cartProduct);
}

    public function render()
    {
        return view('client.products.featured-products-component',[
            'featuredProducts'=>Product::where('is_featured',1)->get()
        ]);
    }
}
