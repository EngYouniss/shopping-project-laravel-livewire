<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ShowProducts extends Component
{
    #[On('post-deleted')]
public function eve(){
    dd("Event fired");
}

    public function render()
    {
        return view('livewire.show-products');
    }
}
