<?php

namespace App\Livewire\Client\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class ProductsComponent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $searchProduct;
    public $selectedCategory = null; // صنف مختار
    public $sortBy = 'newest'; // حالة الترتيب
    public function updating($searchProduct)
    {
        $this->resetPage();
    }

    public function selectCategory($categoryId = null)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage();
    }
    public function updatingSortBy()
{
    $this->resetPage();
}


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
    $query = Product::query();

    if ($this->searchProduct) {
        $query->where('name', 'like', '%' . $this->searchProduct . '%');
    }

    if ($this->selectedCategory) {
        $query->where('category_id', $this->selectedCategory);
    }

    // ترتيب المنتجات حسب قيمة $this->sortBy
    switch ($this->sortBy ?? 'newest') {
        case 'asc':
            $query->orderBy('price', 'asc');
            break;
        case 'desc':
            $query->orderBy('price', 'desc');
            break;
        case 'newest':
            $query->orderBy('created_at', 'desc');
            break;
        default:
            $query->latest(); // ترتيب افتراضي حسب الأحدث
    }

    $products = $query->paginate(8);
    $categories = Category::all();

    return view('client.products.products-component', compact('products', 'categories'));
}

}
