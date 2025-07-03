<?php

namespace App\Livewire\Client\Offers;

use App\Models\Offer;
use Livewire\Component;

class OffersComponent extends Component
{
    public function render()
    {
        return view('client.offers.offers-component',[
          'offers'=>  Offer::where('status', 'active')
     ->where('start_date', '<=', now())
     ->where('end_date', '>=', now())
     ->first()

        ]);
    }
}
