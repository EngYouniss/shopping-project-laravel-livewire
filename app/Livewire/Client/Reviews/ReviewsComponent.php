<?php

namespace App\Livewire\Client\Reviews;

use App\Models\Review;
use Livewire\Component;

class ReviewsComponent extends Component
{
    public function render()
    {
        return view('client.reviews.reviews-component',[
            'reviews'=>Review::latest()->take(3)->get()

        ]);
    }
}
