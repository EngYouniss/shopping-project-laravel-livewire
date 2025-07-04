<?php

namespace App\Livewire\Admin\Sliders;

use App\Models\Slider;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $button_text;
    public $image;
    public $status;
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'nullable|string',
        ];
    }
    public function submit()
    {
        $validated = $this->validate();
        if ($this->image) {
            $validated['image'] = $this->image->store('sliders', 'public');
        }
        $isCreated = Slider::create($validated);
        if ($isCreated) {
            $this->dispatch(
                'swal:success',
                message: 'تم اضافة السلايدر بنجاح'
            );
        } else {
            // ممكن تعملها أيضًا بـ dispatchBrowserEvent بدل session
            $this->dispatch(
                'swal:error',
                message: 'حدث خطاءثناء اضافة السلايدر'
            );
        }
        $this->dispatch('productAdded');

        $this->dispatch('close-create-modal');
        $this->reset();
    }
    public function render()
    {
        return view('admin.sliders.create-slider-component');
    }
}
