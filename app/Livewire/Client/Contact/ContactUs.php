<?php

namespace App\Livewire\Client\Contact;

use App\Models\Message;
use App\Models\Messages;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactUs extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required', 'email')]
    public $email;
    #[Validate('required', 'string', 'max:255')]
    public $message;

    public function submit()
    {
      $validated = $this->validate();
       $isSaved=Message::create($validated);
       if ($isSaved) {

        session()->flash('success', 'تم الارسال بنجاح');

       }
        else {
            session()->flash('error', 'حدث خطاءثناء الارسال');
           }
    }
    public function render()
    {
        return view('client.contact.contact-us');
    }
}
