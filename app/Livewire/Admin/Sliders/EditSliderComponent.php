<?php

namespace App\Livewire\Admin\Sliders;

use App\Models\Slider;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditSliderComponent extends Component
{
    use WithFileUploads;
    public function render()
    {
        return view('admin.sliders.edit-slider-component');
    }



    public $sliderId;
    public $title, $description, $button_text, $image, $status;

    protected $listeners = ['editSlider' => 'loadProduct', 'deleteProduct' => 'confirmDelete'];

    public function loadProduct($id)
    {
        $slider = Slider::findOrFail($id);

        $this->sliderId     = $slider->id;
        $this->title          = $slider->title;
        $this->description   = $slider->description;
        $this->button_text   = $slider->button_text;
        $this->image         = $slider->image;
        $this->status        = $slider->status;

        $this->dispatch('edit-slider-model'); // لفتح المودال
    }

    public function editSlider()
    {
        $category = Slider::findOrFail($this->sliderId);

        $validated = $this->validate([
            'title'        => 'required|string|max:255',
            'description' => 'nullable|string',

        ]);

        // إذا رفع صورة جديدة


        $updated = $category->update($validated);
        $this->reset();
        $this->dispatch('close-edit-modal');
        if ($updated) {
            $this->dispatch(
                'swal:success',
                message: "تم التعديل بنجاح"
            );
        } else {
            $this->dispatch(
                'swal:error',
                message: "حدث خطا اثناء التعديل!!"
            );
        }
        $this->dispatch('productAdded');
    }


    #----------------------delete
    public function confirmDelete($id)
    {
        $this->dispatch('show-delete-confirmation', id: $id);
    }
    #[On('deleteConfirmed')]
    public function delete($id)
    {
        $product = Slider::findOrFail($id);
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
        $this->dispatch('productAdded');
    }





}
