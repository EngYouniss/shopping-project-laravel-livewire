<?php

namespace App\Livewire\Client\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ClientLogoutComponent extends Component
{
    public function logout(){
        Auth::logout();
        return redirect()->route('user.login');
    }
    public function render()
    {
        return view('client.auth.client-logout-component');
    }
}
