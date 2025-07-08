<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Settings;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateSettings extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone_number;
    public $facebook;
    public $instagram;
    public $x;
    public $whatsapp;
    public $fax;
    public $logo; // الشعار الجديد
    public $about;

    public function mount()
    {
        $settings = Settings::first();
        if ($settings) {
            $this->name = $settings->name;
            $this->email = $settings->email;
            $this->phone_number = $settings->phone_number;
            $this->facebook = $settings->facebook;
            $this->instagram = $settings->instagram;
            $this->whatsapp = $settings->whatsapp;
            $this->x = $settings->x;
            $this->fax = $settings->fax;
            $this->about = $settings->about;
        }
    }



    public function submit()
    {

        $settings = Settings::first() ?? new Settings();

        if ($this->logo) {
            $settings->logo = $this->logo->store('logos', 'public');
        }

        $settings->name         = $this->name;
        $settings->email        = $this->email;
        $settings->phone_number = $this->phone_number;
        $settings->facebook     = $this->facebook;
        $settings->instagram    = $this->instagram;
        $settings->x            = $this->x;
        $settings->whatsapp     = $this->whatsapp;
        $settings->fax          = $this->fax;
        $settings->about = $this->about;
        $isSaved = $settings->save();

        if ($isSaved) {
            // ✅ التصحيح هنا
            $this->dispatch(
                'swal:success',
                message: 'تم تحديث الإعدادات بنجاح'
            );
        } else {
            // ممكن تعملها أيضًا بـ dispatchBrowserEvent بدل session
            $this->dispatch(
                'swal:error',
                message: 'حدث خطأ أثناء تحديث الإعدادات'
            );
        }
    }


    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
