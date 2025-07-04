<?php

namespace App\Livewire\Client\Products;

use App\Models\Product;
use Livewire\Component;

class LatestProductsComponent extends Component
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
        return view('client.products.latest-products-component',[
            'latestProducts'=>Product::with('category')->latest()->take(5)->get()
        ]);
    }
}
