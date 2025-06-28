<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{
    use WithPagination;

    public $searchProduct;
    public function updating(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.products.products-component',[
            'products'=>Product::where('name','like','%'.$this->searchProduct.'%')-> paginate(1)
        ]);
    }
}
