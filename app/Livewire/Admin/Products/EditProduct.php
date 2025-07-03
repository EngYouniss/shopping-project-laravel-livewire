<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;

    public $productId;
    public $name, $description, $price, $image, $currentImage, $category_id, $is_featured;

    protected $listeners = ['Edit' => 'loadProduct', 'deleteProduct' => 'confirmDelete'];

    public function loadProduct($id)
    {
        $product = Product::findOrFail($id);

        $this->productId     = $product->id;
        $this->name          = $product->name;
        $this->description   = $product->description;
        $this->price         = $product->price;
        $this->category_id   = $product->category_id;
        $this->currentImage  = $product->image;
        $this->is_featured   = $product->is_featured;
        $this->dispatch('edit-product'); // لفتح المودال
    }

    public function Edit()
    {
        $product = Product::findOrFail($this->productId);

        $validated = $this->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|max:2048',
            'is_featured' => 'nullable|boolean',
        ]);

        // إذا رفع صورة جديدة
        if ($this->image) {
            $imagePath = $this->image->store('products', 'public');
            $validated['image'] = $imagePath;
        } else {
            $validated['image'] = str_replace('http://127.0.0.1:8000/storage/', '', $this->currentImage);
        }

        $updated = $product->update($validated);
        $this->reset();
        $this->dispatch('close-edit-modal');
        if ($updated) {
            $this->dispatch(
                'swal:success',
                message: "تم التعديل بنجاح"
            );
        } else {
            $this->dispatch(
                'swal:error',
                message: "حدث خطا اثناء التعديل!!"
            );
        }
        $this->dispatch('productAdded');
    }


    #----------------------delete
    public function confirmDelete($id)
    {
        $this->dispatch('show-delete-confirmation', id: $id);
    }
    #[On('deleteConfirmed')]
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $deleted = $product->delete();
        if ($deleted) {
            $this->dispatch(
                'swal:success',
                message: "تم الحذف بنجاح"
            );
        } else {
            $this->dispatch(
                'swal:error',
                message: "حدث خطا اثناء الحذف!!"
            );
        }
        $this->dispatch('productAdded');
    }


    public function render()
    {
        return view('admin.products.edit-product', [
            'categories' => Category::all(),
        ]);
    }
}
