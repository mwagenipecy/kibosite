<?php

namespace App\Livewire;

use Livewire\Component;

class AboutPage extends Component
{
  public $testimonials=[];
    public $stats = [
        [
            'value' => '25+',
            'label' => 'Years Experience',
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'value' => '$2.5B+',
            'label' => 'Assets Managed',
            'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'value' => '500+',
            'label' => 'Happy Clients',
            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
        ],
        [
            'value' => '15%',
            'label' => 'Annual Growth',
            'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'
        ],
    ];

    public $team = [
        [
            'name' => 'Michael Thompson',
            'position' => 'CEO & Founder',
            'image' => 'images/team/ceo.jpg',
            'bio' => 'With over 30 years of experience in finance and investment, Michael founded Kibo Capital with a vision to provide strategic investment solutions with a personal touch.',
            'linkedin' => 'https://linkedin.com',
            'twitter' => 'https://twitter.com'
        ],
        [
            'name' => 'Jennifer Wu',
            'position' => 'Chief Investment Officer',
            'image' => 'images/team/cio.jpg',
            'bio' => 'Jennifer brings over 20 years of investment expertise, having previously managed portfolios for major global financial institutions.',
            'linkedin' => 'https://linkedin.com',
            'twitter' => 'https://twitter.com'
        ],
        [
            'name' => 'Robert Keller',
            'position' => 'Head of Wealth Management',
            'image' => 'images/team/wealth.jpg',
            'bio' => 'Robert specializes in creating comprehensive wealth strategies for high-net-worth individuals and families.',
            'linkedin' => 'https://linkedin.com',
            'twitter' => 'https://twitter.com'
        ],
        [
            'name' => 'Sophia Martinez',
            'position' => 'Director of Client Relations',
            'image' => 'images/team/client.jpg',
            'bio' => 'Sophia ensures our clients receive personalized attention and clear communication about their investments.',
            'linkedin' => 'https://linkedin.com',
            'twitter' => 'https://twitter.com'
        ],
    ];

    public $milestones = [
        [
            'year' => '1998',
            'title' => 'Foundation',
            'description' => 'Kibo Capital was founded by Michael Thompson with a vision to provide personalized investment strategies.'
        ],
        [
            'year' => '2005',
            'title' => 'Expansion',
            'description' => 'Opened offices in three major cities and expanded our team of financial advisors.'
        ],
        [
            'year' => '2010',
            'title' => '$1 Billion AUM',
            'description' => 'Reached the milestone of managing over $1 billion in assets for our clients.'
        ],
        [
            'year' => '2015',
            'title' => 'Digital Transformation',
            'description' => 'Launched our digital platform to provide clients with real-time portfolio insights.'
        ],
        [
            'year' => '2020',
            'title' => 'Global Reach',
            'description' => 'Expanded our services internationally, serving clients across 15 countries.'
        ],
        [
            'year' => '2023',
            'title' => '$2.5 Billion AUM',
            'description' => 'Surpassed $2.5 billion in assets under management and launched our sustainable investing initiative.'
        ],
    ];

    public function render()
    {
        return view('livewire.about-page');
    }
}