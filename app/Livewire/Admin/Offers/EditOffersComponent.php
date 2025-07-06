<?php

namespace App\Livewire\Admin\Offers;

use App\Models\Offer;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditOffersComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $discount_price;
    public $status;
    public $start_date;
    public $end_date;
    public $product_id;
    public $offer_id;
    public $image;
    protected $listeners = ['Edit' => 'loadProduct', 'deleteProduct' => 'confirmDelete'];

    public function loadProduct($id)
    {
        $offer = Offer::find($id);
        $this->title = $offer->title;
        $this->description = $offer->description;
        $this->discount_price = $offer->discount_price;
        $this->status = $offer->status;
        $this->start_date = $offer->start_date;
        $this->end_date = $offer->end_date;
        $this->product_id = $offer->product_id;
        $this->offer_id = $offer->id;
        $this->image = $offer->image;
        $this->dispatch('edit-category-model'); // لفتح المودال
    }
    public function Edit()
    {
        $offer = Offer::find($this->offer_id);

        // فقط إذا تم رفع صورة جديدة
        if ($this->image && is_object($this->image)) {
            $offer->image = $this->image->store('offers', 'public');
        }

        // باقي الحقول
        $offer->title = $this->title;
        $offer->description = $this->description;
        $offer->discount_price = $this->discount_price;
        $offer->status = $this->status;
        $offer->start_date = $this->start_date;
        $offer->end_date = $this->end_date;
        $offer->product_id = $this->product_id;

        $updated = $offer->save();

        if ($updated) {
            $this->dispatch('swal:success', message: "تم التعديل بنجاح");
        } else {
            $this->dispatch('swal:error', message: "حدث خطأ أثناء التعديل!!");
        }

        $this->dispatch('close-edit-modal');
        $this->dispatch('productAdded');
        $this->reset();
    }

    #----------------------delete
    public function confirmDelete($id)
    {
        $this->dispatch('show-delete-confirmation', id: $id);
    }
    #[On('deleteConfirmed')]
    public function delete($id)
    {
        $product = Offer::findOrFail($id);
        $deleted = $product->delete();
        if ($deleted) {
            $this->dispatch(
                'swal:success',
                message: "تم الحذف بنجاح"
            );
        } else {
            $this->dispatch(
                'swal:error',
                message: "حدث خطا اثناء الحذف!!"
            );
        }
        Cache::forget('categories');

        $this->dispatch('productAdded');
    }
    public function render()
    {
        return view('admin.offers.edit-offers-component', [
            'products' => Product::all()
        ]);
    }
}
