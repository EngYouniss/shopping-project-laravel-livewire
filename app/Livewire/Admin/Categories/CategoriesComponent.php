<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class CategoriesComponent extends Component
{
    use WithPagination,WithoutUrlPagination;
    public $searchCategory;

    public $listeners=['productAdded'];
    public function render()
    {
        return view('admin.categories.categories-component',[
            'categories'=>Category::where('name','like','%' . $this->searchCategory . '%')->paginate(5)
        ]);
    }
}
