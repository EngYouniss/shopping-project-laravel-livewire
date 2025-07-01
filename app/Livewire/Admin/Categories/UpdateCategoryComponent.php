<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateCategoryComponent extends Component
{


    public $categoryId;
    public $name, $description;

    protected $listeners = ['updateProduct' => 'loadProduct', 'deleteProduct' => 'confirmDelete'];

    public function loadProduct($id)
    {
        $category = Category::findOrFail($id);

        $this->categoryId     = $category->id;
        $this->name          = $category->name;
        $this->description   = $category->description;

        $this->dispatch('edit-category-model'); // لفتح المودال
    }

    public function updateProduct()
    {
        $category = Category::findOrFail($this->categoryId);

        $validated = $this->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',

        ]);

        // إذا رفع صورة جديدة


        $updated = $category->update($validated);
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
        $product = Category::findOrFail($id);
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
        return view('admin.categories.update-category-component');
    }
}
