<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class EventListener extends Component
{
    protected $listeners=[
        'fire'
    ];
    #[On('post-deleted')]
    public function fire(){
        dd("hiring");
    }
    public function render()
    {
        return view('livewire.event-listener');
    }
}
