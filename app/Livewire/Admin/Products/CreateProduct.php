<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateProduct extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $category_id;

    #[Validate('nullable|image|max:2048')]
    public $image;
    #[Validate('nullable')]
    public $description;
    #[Validate('nullable')]
    public $is_featured;
    // public $status;

    public function submit()
    {
        $validated = $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['description'] = $this->description;
        // $validated['stock'] = $this->stock;
        // $validated['status'] = $this->status;
        $validated['price'] = $this->price;
        $validated['category_id'] = $this->category_id;
        $validated['is_featured'] = $this->is_featured;
        $isCreated = Product::create($validated);
        if ($isCreated) {
            $this->dispatch(
                'swal:success',
                message: 'تم اضافة المنتج بنجاح'
            );
        } else {
            // ممكن تعملها أيضًا بـ dispatchBrowserEvent بدل session
            $this->dispatch(
                'swal:error',
                message: 'حدث خطأ أثناء اضافة المنتج'
            );
        }
        $this->dispatch('close-create-modal');
        $this->dispatch('productAdded');
        $this->reset();
    }

    public function render()
    {
        return view('admin.products.create-product', [
            'categories' => Category::all(),
        ]);
    }
}
