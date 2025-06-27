<?php

namespace App\Livewire\Client\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ClientRegisterComponent extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:8')]
    public $password;


    public function register(){
        $this->validate();
        User::create(
            [
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=>Hash::make($this->password)
            ]
            );
            session()->flash('success','user created succesfully.');
            return  redirect()->route('user.login');

    }

    public function render()
    {
        return view('client.auth.client-register-component');
    }
}
