<?php

namespace App\Livewire\Client\Sliders;

use App\Models\Slider;
use Livewire\Component;

class SliderComponent extends Component
{
    public function render()
    {
        return view('client.sliders.slider-component',[
            'sliders'=>Slider::all()
        ]);
    }
}
