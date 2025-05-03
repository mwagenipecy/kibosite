<?php

namespace App\Livewire;

use Livewire\Component;

class AboutPage extends Component
{
  public $testimonials=[];
   
  public $stats = [
    [
        'value' => '25+',
        'label' => 'Years of Excellence',
        'icon'  => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
    ],
    [
        'value' => '200+',
        'label' => 'Projects Completed',
        'icon'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
    ],
    [
        'value' => '150+',
        'label' => 'Clients Served',
        'icon'  => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
    ],
    [
        'value' => '95%',
        'label' => 'On-Time Delivery',
        'icon'  => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'
    ],
];


public $team = [
    [
        'name'     => 'Eng. Edmund Urassa',
        'position' => 'Managing Director',
        'image'    => '/profile/5856.jpg',
        'bio'      => 'With over 25 years of experience in civil and building engineering, Eng. Urassa leads Kibo Capital’s vision for integrity-driven, collaborative project delivery.',
        'linkedin' => 'https://linkedin.com/in/edmund-urassa',
        'twitter'  => 'https://twitter.com/edmundurassa'
    ],
    [
        'name'     => 'Eng. Aisha Mohamed',
        'position' => 'Chief Project Engineer',
        'image'    => '/profile/5856.jpg',
        'bio'      => 'Aisha brings 15+ years of structural design and on-site execution expertise, ensuring every build meets our rigorous quality standards.',
        'linkedin' => 'https://linkedin.com/in/aisha-mohamed',
        'twitter'  => 'https://twitter.com/aishamohamed'
    ],
    [
        'name'     => 'John Mwangi',
        'position' => 'Operations Director',
        'image'    => '/profile/5856.jpg',
        'bio'      => 'John oversees logistics and delivery across all projects, leveraging two decades of experience to keep timelines on track and budgets in check.',
        'linkedin' => 'https://linkedin.com/in/john-mwangi',
        'twitter'  => 'https://twitter.com/johnmwangi'
    ],
    [
        'name'     => 'Grace Njoroge',
        'position' => 'Health & Safety Manager',
        'image'    => '/profile/5856.jpg',
        'bio'      => 'Grace champions our Safety & Quality Assurance programs, with a decade of expertise in keeping worksites compliant and incident-free.',
        'linkedin' => 'https://linkedin.com/in/grace-njoroge',
        'twitter'  => 'https://twitter.com/gracenjoroge'
    ],
];

public $milestones = [
    [
        'year'        => '1998',
        'title'       => 'Foundation',
        'description' => 'Kibo Capital Limited was founded by Eng. Edmund Urassa to bring a people-first approach to civil and building contracting.'
    ],
    [
        'year'        => '2003',
        'title'       => 'First Public Contract',
        'description' => 'Delivered our inaugural municipal infrastructure project, earning our reputation for reliability and quality.'
    ],
    [
        'year'        => '2008',
        'title'       => 'Regional Expansion',
        'description' => 'Opened branch offices in Arusha and Mwanza to better serve clients across northern Tanzania.'
    ],
    [
        'year'        => '2015',
        'title'       => 'Commercial Portfolio',
        'description' => 'Completed over 50 commercial building projects, including offices, retail centers, and mixed-use developments.'
    ],
    [
        'year'        => '2020',
        'title'       => 'Sustainable Building Initiative',
        'description' => 'Launched our green-building program, integrating sustainable materials and energy-efficient designs into every project.'
    ],
    [
        'year'        => '2025',
        'title'       => '25 Years of Excellence',
        'description' => 'Celebrated a quarter-century of delivering high-quality civil and building projects across Tanzania.'
    ],
];


    public function render()
    {
        return view('livewire.about-page');
    }
}