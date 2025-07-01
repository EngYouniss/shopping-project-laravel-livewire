<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCategoryComponent extends Component
{
    #[Validate('required|unique:categories,name')]
    public $name;
    #[Validate('required')]
    public $description;

    public function submit()
    {
        $this->validate();
        $created = Category::create([
            'name' => $this->name,
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
        $this->dispatch('close-create-modal');
        $this->dispatch('productAdded');
        $this->reset(); 
    }
    public function render()
    {
        return view('admin.categories.create-category-component');
    }
}
