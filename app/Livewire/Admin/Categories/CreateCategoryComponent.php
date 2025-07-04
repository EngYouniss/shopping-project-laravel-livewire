<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateCategoryComponent extends Component
{
    use WithFileUploads;
    #[Validate('required|unique:categories,name')]
    public $name;
    #[Validate('required')]
    public $description;
    #[Validate('nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048')]
    public $image;

    public function submit()
    {
        $this->validate();
        $imagePath=$this->image->store('categories','public');
        $created = Category::create([
            'name' => $this->name,
            'image' => $imagePath,
            'description' => $this->description,
        ]);
        if ($created) {
            $this->dispatch(
                'swal:success',
                message: 'Category created successfully!'
            );
        } else {
            $this->dispatch(
                'swal:error',
                message: 'There is an error occured!!'
            );
        }
            Cache::forget('categories');

        $this->dispatch('close-create-modal');
        $this->dispatch('productAdded');
        $this->reset();
    }
    public function render()
    {
        return view('admin.categories.create-category-component');
    }
}
