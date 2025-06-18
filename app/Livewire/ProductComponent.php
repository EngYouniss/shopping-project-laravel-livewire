<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductComponent extends Component
{
    use \Livewire\WithFileUploads;
    public $prod_name;
    public $prod_desc;
    public $prod_price;
    public $prod_image;

    public function addProduct(){
                $imagepath = $this->prod_image->store('products', 'public');

        Product::create([
            'name' => $this->prod_name,
            'description' => $this->prod_desc,
            'price' => $this->prod_price,

            'image' => $imagepath,
        ]);
        session()->flash('message', 'Product added successfully!');
    }
    public function render()
    {
        return view('livewire.product-component');
    }
}
