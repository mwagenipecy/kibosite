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
            'city' => 'New York',
            'address' => '123 Financial District, Suite 500<br>New York, NY 10005',
            'phone' => '+1 (212) 555-7890',
            'email' => 'newyork@kibocapital.com',
            'hours' => 'Monday-Friday: 9:00 AM - 5:00 PM',
            'image' => 'images/offices/new-york.jpg'
        ],
        [
            'city' => 'London',
            'address' => '45 Canary Wharf Tower<br>London, E14 5HS, UK',
            'phone' => '+44 20 7946 0321',
            'email' => 'london@kibocapital.com',
            'hours' => 'Monday-Friday: 9:00 AM - 5:30 PM',
            'image' => 'images/offices/london.jpg'
        ],
        [
            'city' => 'Singapore',
            'address' => '88 Market Street, #32-01<br>Singapore 048948',
            'phone' => '+65 6701 8421',
            'email' => 'singapore@kibocapital.com',
            'hours' => 'Monday-Friday: 9:00 AM - 6:00 PM',
            'image' => 'images/offices/singapore.jpg'
        ]
    ];

    public $services = [
        'Investment Management',
        'Wealth Management',
        'Financial Planning',
        'Retirement Planning',
        'Tax Planning',
        'Estate Planning',
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
