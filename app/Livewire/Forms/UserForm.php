<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class UserForm extends Form
{
    #[Validate('required')]
    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:8')]
    public $password;
    #[Validate('nullable|image|max:1024')]
    public $image;

    public function messages()
    {
        return [
            'name.required' => '.الحقل مطلوب',
            'email.required' => '.الحقل مطلوب',
            'email.email' => '.البريد الإلكتروني غير صالح',
            'password.required' => '.الحقل مطلوب',
            'password.min' => '.يجب أن يكون الحد الأدنى 8 أحرف',
            'image.image' => '.يجب أن يكون الملف صورة',
            'image.max' => '.يجب ألا يتجاوز حجم الصورة 1 ميجابايت',
        ];
    }
}
