<?php

namespace App\Livewire;

use App\Models\ContactUs as ModelsContactUs;
use App\Models\Notification;
use Livewire\Attributes\Rule;

use Livewire\Component;

class ContactUs extends Component
{
    #[Rule('required|max:100')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $message = '';

    public function save()
{
    ModelsContactUs::create(
        $this->validate()


    );
    Notification::create([
        'title'=>$this->name,
        'category'=>'Contact Us',
        'message'=>$this->message,

    ]);
    sweetalert()->addSuccess('Contact has been send successfully!');
    return $this->redirect('/contact-us');
}

    public function render()
    {
        return view('livewire.contact-us');
    }
}
