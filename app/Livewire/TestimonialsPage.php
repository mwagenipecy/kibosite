<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialsPage extends Component
{
 
public $categories = [
    'all'            => 'All Testimonials',
    'construction'   => 'Building Construction',
    'infrastructure' => 'Civil Infrastructure',
    'renovation'     => 'Renovation & Refurbishment',
    'management'     => 'Project Management',
    'safety'         => 'Safety & Quality Assurance',
];

public $activeCategory    = 'all';
public $featuredVideos     = [];
public $filteredTestimonials = [];

public $testimonials = [
    [
        'id'       => 1,
        'name'     => 'Eng. Michael Nyerere',
        'position' => 'Project Manager, Tanzania Revenue Authority',
        'location' => 'Dar es Salaam, Tanzania',
        'category' => 'construction',
        'content'  => 'Kibo Capital built our new municipal headquarters ahead of schedule and under budget. Their professionalism and attention to detail were outstanding.',
        'image'    => '/profile/icon.avif',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 2,
        'name'     => 'Mr. John Mwinyi',
        'position' => 'Director, City Roads Authority',
        'location' => 'Nairobi, Kenya',
        'category' => 'infrastructure',
        'content'  => 'Their team handled our highway expansion project seamlessly. The quality of workmanship and safety standards were exemplary.',
        'image'    => '/profile/image copy.png',
        'rating'   => 5,
        'videoId'  => 'roadProj2024',
    ],
    [
        'id'       => 3,
        'name'     => 'Ms. Amina Faraji',
        'position' => 'CEO, Alpha Properties Ltd.',
        'location' => 'Arusha, Tanzania',
        'category' => 'renovation',
        'content'  => 'Kibo Capital transformed our retail center with modern finishes and structural upgrades. Their renovation expertise is top-notch.',
        'image'    => '/profile/use1.png',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 4,
        'name'     => 'Dr. Asha Patel',
        'position' => 'Chief Operations Officer, Sunrise Hospitals',
        'location' => 'Dar es Salaam, Tanzania',
        'category' => 'management',
        'content'  => 'Their project management kept our hospital expansion on track through every phase, with clear communication and proactive problem-solving.',
        'image'    => '/profile/image.png',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 5,
        'name'     => 'Mr. Abdallah Ali',
        'position' => 'Managing Director, Blue Water Estates',
        'location' => 'Zanzibar, Tanzania',
        'category' => 'infrastructure',
        'content'  => 'Kibo Capital delivered our coastal road and drainage system with exceptional engineering standards and community engagement.',
        'image'    => '/profile/5856.jpg',
        'rating'   => 5,
        'videoId'  => 'zanzibarRoads',
    ],
    [
        'id'       => 6,
        'name'     => 'Ms. Leila Hassan',
        'position' => 'Property Developer, Arusha Heights',
        'location' => 'Arusha, Tanzania',
        'category' => 'construction',
        'content'  => 'Their turnkey building services allowed us to open our new condominium complex on time, with zero defects and excellent finishes.',
        'image'    => '/profile/image copy.png',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 7,
        'name'     => 'Mr. Paul Mugisha',
        'position' => 'CEO, East Africa Logistics',
        'location' => 'Kampala, Uganda',
        'category' => 'infrastructure',
        'content'  => 'The civil works on our logistics hub were executed flawlessly, with robust structural elements that meet our heavy-duty requirements.',
        'image'    => '/profile/image copy.png',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 8,
        'name'     => 'Mrs. Sandra Omondi',
        'position' => 'Operations Manager, Nairobi County Council',
        'location' => 'Nairobi, Kenya',
        'category' => 'safety',
        'content'  => 'Their Health & Safety program kept our team and the public safe throughout a complex bridge rehabilitation project.',
        'image'    => '/profile/image copy.png',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 9,
        'name'     => 'Mr. Peter Kimathi',
        'position' => 'Head of Projects, Rift Valley Power',
        'location' => 'Eldoret, Kenya',
        'category' => 'management',
        'content'  => 'Exceptional coordination and supply-chain management ensured our power station upgrade was completed without downtime.',
        'image'    => '/profile/image copy.png',
        'rating'   => 4,
        'videoId'  => null,
    ],
    [
        'id'       => 10,
        'name'     => 'Ms. Fatima Mohamed',
        'position' => 'Lead Architect, Skyline Designs',
        'location' => 'Dar es Salaam, Tanzania',
        'category' => 'consultancy',
        'content'  => 'Their advisory services on material selection and sustainable design helped us deliver award-winning architectural projects.',
        'image'    => '/profile/image copy.png',
        'rating'   => 5,
        'videoId'  => 'designInsights',
    ],
    [
        'id'       => 11,
        'name'     => 'Col. Joseph Mwamba',
        'position' => 'Facility Manager, Armed Forces HQ',
        'location' => 'Dodoma, Tanzania',
        'category' => 'safety',
        'content'  => 'Kibo Capital’s adherence to rigorous safety and quality standards made our headquarters renovation completely incident-free.',
        'image'    => '/profile/icon.avif',
        'rating'   => 5,
        'videoId'  => null,
    ],
    [
        'id'       => 12,
        'name'     => 'Mr. Thomas Kimaro',
        'position' => 'Chairman, Tanzania Rail Corporation',
        'location' => 'Dar es Salaam, Tanzania',
        'category' => 'management',
        'content'  => 'Their end-to-end project delivery on our rail line extension demonstrated unparalleled expertise in complex civil engineering.',
        'image'    => '/profile/icon.avif',
        'rating'   => 5,
        'videoId'  => 'railProject24',
    ],
];

    public $featuredTestimonials = [2, 5, 10]; // IDs of testimonials with videos
    public $selectedTestimonial = null;

  


    public function mount()
{
    $this->selectedTestimonial = $this->testimonials[0];
    $this->featuredVideos = $this->getFeaturedVideosProperty();
    $this->filteredTestimonials = $this->getFilteredTestimonialsProperty();
}


public function setActiveCategory($category)
{
    $this->activeCategory = $category;
    $this->filteredTestimonials = $this->getFilteredTestimonialsProperty();
}



    public function selectTestimonial($id)
    {
        $this->selectedTestimonial = collect($this->testimonials)->firstWhere('id', $id);
    }

    public function getFilteredTestimonialsProperty()
    {
        if ($this->activeCategory === 'all') {
            return $this->testimonials;
        }
        
        return collect($this->testimonials)
            ->filter(function ($testimonial) {
                return $testimonial['category'] === $this->activeCategory;
            })
            ->toArray();
    }

    public function getFeaturedVideosProperty()
    {
        return collect($this->testimonials)
            ->filter(function ($testimonial) {
                return in_array($testimonial['id'], $this->featuredTestimonials);
            })
            ->toArray();
    }

    public function render()
    {
        return view('livewire.testimonials-page');
    }
}
