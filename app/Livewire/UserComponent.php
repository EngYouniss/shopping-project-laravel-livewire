<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreUser;
use App\Livewire\Forms\UserForm;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UserComponent extends Component
{
        use WithFileUploads;

    public UserForm $userform;
    public function store(){
        $this->validate();
        User::create($this->userform->all());
    }

    public function render()
    {
        return view('livewire.user-component');
    }
}
