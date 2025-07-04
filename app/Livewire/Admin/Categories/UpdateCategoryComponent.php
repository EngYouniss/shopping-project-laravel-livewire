<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UpdateCategoryComponent extends Component
{
    use WithFileUploads;

    public $categoryId;
    public $name, $description, $image, $currentImage;

    protected $listeners = ['Edit' => 'loadProduct', 'deleteProduct' => 'confirmDelete'];

    public function loadProduct($id)
    {
        $category = Category::findOrFail($id);

        $this->categoryId     = $category->id;
        $this->name          = $category->name;
        $this->description   = $category->description;

        $this->dispatch('edit-category-model'); // لفتح المودال
    }

    public function Edit()
    {
        $category = Category::findOrFail($this->categoryId);
         $validated = $this->validate([
            'name'        => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',

        ]);
        if ($this->image) {
            $imagePath = $this->image->store('categories', 'public');
            $validated['image'] = $imagePath;
        } else {

        $validated['image'] = str_replace('http://127.0.0.1:8000/storage/', '', $this->currentImage);
        }



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
            Cache::forget('categories');

        $this->dispatch('productAdded');
    }



    public function render()
    {
        return view('admin.categories.update-category-component');
    }
}
