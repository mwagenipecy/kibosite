<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $currentSlide = 0; 
    public $slides = [
        [
            'title'    => 'Design. Build. Deliver.',
            'subtitle' => 'Comprehensive construction services from concept to completion',
            'image'    => '/image/img88.png',
        ],
        [
            'title'    => 'Holistic Construction Expertise',
            'subtitle' => 'Delivering turnkey building solutions with integrity and excellence',
            'image'    => '/image/ima.jpg',
        ],
        [
            'title'    => 'Innovative Civil Engineering',
            'subtitle' => 'Creating infrastructure that stands the test of time',
            'image'    => '/image/ima3.jpg',
        ],
        [
            'title'    => 'Trusted Collaborative Partnerships',
            'subtitle' => 'Partnering with public & private clients to realize their visions',
            'image'    => '/image/ima2.jpg',
        ],
    ];
    

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function setSlide($index)
    {
        $this->currentSlide = $index;
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}