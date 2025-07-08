<?php

namespace App\Livewire\Admin\Message;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class MessagesComponent extends Component
{
    use WithPagination,WithoutUrlPagination;
    public $search;
    public function render()
    {
        return view('admin.message.messages-component',[
            'messages'=>Message::where('name','like','%'.$this->search.'%')->paginate(5),
        ]);
    }
}
