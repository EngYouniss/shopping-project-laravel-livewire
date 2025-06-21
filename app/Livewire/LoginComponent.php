<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginComponent extends Component
{

    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $password;


    public $remember = false;

    public $errorMessage = '';

    public $successMessage = '';

    public function login(){
        $this->validate();
        $isLoggedIn= Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);
        if ($isLoggedIn) {
            $this->successMessage = 'Login successful!';
            $this->errorMessage = '';
            return to_route('home'); // Assuming 'home' is the route name for the home page
            // Redirect or perform other actions after successful login
        } else {
            $this->errorMessage = 'Invalid credentials. Please try again.';
            $this->successMessage = '';
            return;
        }
        // Simulate a login process

    }

    // public function logout()
    // {
    //     Auth::logout();
    //     $this->successMessage = 'You have been logged out successfully.';
    //     $this->errorMessage = '';
    //     return to_route('login'); // Redirect to login page after logout
    // }
    public function render()
    {
        return view('livewire.login-component');
    }
}
