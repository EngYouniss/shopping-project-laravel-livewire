<?php

namespace App\Livewire\Admin\Offers;

use App\Models\Offer;
use Livewire\Component;

class OffersComponent extends Component
{

    public $searchOffer;
    public $listeners = ['productAdded'];
    public function render()
    {
        return view('admin.offers.offers-component', [
            'offers' => Offer::where('status', 'active')
                ->where('title', 'like', '%' . $this->searchOffer . '%')
                ->paginate(5)
        ]);
    }
}
