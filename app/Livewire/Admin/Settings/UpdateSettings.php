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



    public function rules()
    {
        return [
            'name'           => 'required|string',
            'email'          => 'nullable|email',
            'facebook'       => 'nullable|string',
            'instagram'      => 'nullable|string',
            'x'              => 'nullable|string',
            'whatsapp'       => 'nullable|string',
            'phone_number'   => 'nullable|string',
            'fax'            => 'nullable|string',
            'logo'                    => 'nullable|image|max:1024',
        ];
    }

    public function submit()
    {
        $this->validate();

        // حفظ الشعار إذا تم رفعه
        if ($this->logo) {
            $logoName = $this->logo->store('logos', 'public');
            $this->settings->logo = $logoName;
        }

        $isSaved =  $this->settings->save();
        if ($isSaved) {
            session()->flash('success', 'تم حفظ التعديلات بنجاح ✅');
        }
    }

    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
