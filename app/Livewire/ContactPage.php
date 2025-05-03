<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $service = '';
    public $message = '';
    public $successMessage = '';
    
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'service' => 'required',
        'message' => 'required|min:10',
    ];

    public $offices = [
        [
            'city'    => 'Dar es Salaam',
            'address' => 'Pamba / Sokoine Drive, Block No 106<br>P.O. Box 76619<br>Dar es Salaam, Tanzania',
            'phone'   => '+255 768 091 176',
            'email'   => 'dar@kibocapital.com',
            'hours'   => 'Monday–Friday: 8:00 AM – 5:00 PM',
            'image'   => 'images/offices/dar-es-salaam.jpg'
        ],
        [
            'city'    => 'Nairobi',
            'address' => 'Upper Hill, KenGen Tower, 10th Floor<br>P.O. Box 12345<br>Nairobi, Kenya',
            'phone'   => '+254 20 123 4567',
            'email'   => 'nairobi@kibocapital.com',
            'hours'   => 'Monday–Friday: 8:30 AM – 5:30 PM',
            'image'   => 'images/offices/nairobi.jpg'
        ],
        [
            'city'    => 'Addis Ababa',
            'address' => 'Bole Road, LF Building, 5th Floor<br>P.O. Box 678<br>Addis Ababa, Ethiopia',
            'phone'   => '+251 11 678 9012',
            'email'   => 'addis@kibocapital.com',
            'hours'   => 'Monday–Friday: 9:00 AM – 5:00 PM',
            'image'   => 'images/offices/addis-ababa.jpg'
        ],
    ];
    
    public $services = [
        'Building Construction',
        'Civil Infrastructure',
        'Renovation & Refurbishment',
        'Project Management',
        'Procurement & Supply Chain Management',
        'Quality & Safety Assurance',
        'Consultancy & Advisory',
        'Other Services'
    ];

    

    public function submit()
    {
        $this->validate();
        
        // In a real application, you would send an email here
        // Mail::to('contact@kibocapital.com')->send(new ContactFormSubmission($this->name, $this->email, $this->phone, $this->service, $this->message));
        
        $this->successMessage = 'Thank you for contacting us! Our team will get back to you shortly.';
        
        $this->resetForm();
    }
    
    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->service = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}
