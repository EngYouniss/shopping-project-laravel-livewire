<?php

namespace App\Livewire\Client\About;

use App\Models\Settings;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('client.about.about-component',[
            'about_us'=>Settings::get()
        ]);
    }
}
