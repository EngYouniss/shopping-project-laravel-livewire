<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginComponent extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;

    public function login()
    {

        $this->validate();


        // محاولة تسجيل الدخول
        $isLoggedIn = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        if (!$isLoggedIn) {
           session()->flash('error','الايميل او الباسورد خطا ');
           return;
        }

        // نجاح تسجيل الدخول
        return redirect()->route('admin.dashboard'); // غيّرها لمسار لوحة تحكم الإدمن مثلاً: admin.dashboard
    }

    public function render()
    {
        return view('admin.auth.login-component');
    }
}
