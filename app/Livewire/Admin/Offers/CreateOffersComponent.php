<?php

namespace App\Livewire\Admin\Offers;

use App\Models\Offer;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class CreateOffersComponent extends Component
{
    use WithFileUploads,WithPagination;

    #[Validate('required', 'string', 'max:255')]
    public $title;

    #[Validate('nullable', 'string', 'max:500')]
    public $description;

    #[Validate('required', 'numeric')]
    public $discount_price;
    #[Validate('required', 'string', 'max:255')]
    public $status;
    #[Validate('required', 'date')]
    public $start_date;

    #[Validate('required', 'date')]
    public $end_date;

    #[Validate('required', 'exists:products,id')]
    public $product_id;

    #[Validate('required', 'image', 'max:2048')]
    public $image;

    public function submit()
    {
        $this->validate();

        $imagePath = $this->image->store('offers', 'public');

        $created = Offer::create([
            'title' => $this->title,
            'description' => $this->description,
            'discount_price' => $this->discount_price,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'product_id' => $this->product_id,
            'image' => $imagePath,
        ]);

        if ($created) {
            $this->dispatch('swal:success', message: 'Offer created successfully!');
        } else {
            $this->dispatch('swal:error', message: 'There was an error during creation!');
        }

        Cache::forget('offers'); // تأكد أن اسم الكاش صحيح

        $this->dispatch('close-create-modal');
        $this->dispatch('productAdded');

        $this->reset();
    }

    public function render()
    {
        return view('admin.offers.create-offers-component', [
            'products' => \App\Models\Product::all(),
        ]);
    }
}
