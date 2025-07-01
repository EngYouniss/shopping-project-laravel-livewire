<?php

namespace App\Livewire\Admin\Sliders;

use App\Models\Slider;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class SlidersComponent extends Component
{
    use WithPagination,WithoutUrlPagination;
    public $search;
    public $listeners = ['productAdded'];
    public function updating(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.sliders.sliders-component',
        [
            'sliders' =>Slider::where('title', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
