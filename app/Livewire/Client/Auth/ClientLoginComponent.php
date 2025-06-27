<?php

namespace App\Livewire\Client\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ClientLoginComponent extends Component
{
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;

    // public function messages(){
    //     return [
    //         'email.required'=>'هذا الحقل مطلوب',
    //         'password.required'=>'هذا الحقل مطلوب'
    //     ];
    // }
    public function login() {
        $isLoggedIn=Auth::attempt(['email'=>$this->email,'password'=>$this->password]);
        if($isLoggedIn){
            return to_route('home');
        }
        else{
        return redirect()->back()->with(['error'=>'the email or password is wrong']);
        }
    }



    public function render()
    {
        return view('client.auth.client-login-component');
    }


}
