<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterComponent extends Component
{
    #[Validate('required|min:3')]
    public $username;
    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|min:6')]
    public $password;
    #[Validate('required|same:password')]
    public $password_confirmation;

    public $errorMessage = '';
    public $successMessage = '';

    public function register()
    {
        $this->validate();

        // Simulate a registration process
        // In a real application, you would save the user to the database here
        // For example:
     $registerd=   User::create([
            'name' => $this->username                       ,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        if(!$registerd) {
            $this->errorMessage = 'Registration failed. Please try again.';
            $this->successMessage = '';
            return;
        }
        $this->successMessage = 'Registration successful! You can now log in.';
        $this->errorMessage = '';


        // Redirect or perform other actions after successful registration
        return redirect()->route('login'); // Assuming 'login' is the route name for the login page
    }

    public function render()
    {
        return view('livewire.register-component');
    }
}
