<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $currentSlide = 0;
    public $slides = [
        [
            'title' => 'Strategic Investment Solutions',
            'subtitle' => 'Building wealth through intelligent capital allocation',
            'image' => '/image/ima.jpg',
        ],
        [
            'title' => 'Financial Excellence',
            'subtitle' => 'Creating sustainable growth opportunities',
            'image' => '/image/ima3.jpg',
        ],
        [
            'title' => 'Global Investment Reach',
            'subtitle' => 'Diversified portfolios across markets',
            'image' => '/image/ima2.jpg',
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