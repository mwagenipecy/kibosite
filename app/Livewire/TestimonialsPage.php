<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialsPage extends Component
{
    public $categories = [
        'all' => 'All Testimonials',
        'investment' => 'Investment Management',
        'wealth' => 'Wealth Management',
        'retirement' => 'Retirement Planning',
        'estate' => 'Estate Planning'
    ];

    public $activeCategory = 'all';

    public $featuredVideos=[];

    public $filteredTestimonials=[];

    public $testimonials = [
        [
            'id' => 1,
            'name' => 'Sarah Johnson',
            'position' => 'CEO, Tech Innovations Inc.',
            'location' => 'New York, NY',
            'category' => 'investment',
            'content' => 'Working with Kibo Capital has transformed our company\'s financial future. Their strategic investment approach and personalized service have exceeded our expectations. The team truly takes the time to understand our goals and risk tolerance, creating a tailored strategy that has delivered consistent returns even during market volatility.',
            'image' => 'images/testimonials/client1.jpg',
            'rating' => 5,
            'videoId' => null
        ],
        [
            'id' => 2,
            'name' => 'David Chen',
            'position' => 'Managing Director, Global Ventures',
            'location' => 'San Francisco, CA',
            'category' => 'wealth',
            'content' => 'As someone with complex financial needs spanning multiple countries, I needed advisors who could handle sophisticated wealth management strategies. Kibo Capital\'s team has proven invaluable in coordinating all aspects of my financial life. Their comprehensive approach integrates investment management, tax planning, and estate strategies seamlessly.',
            'image' => 'images/testimonials/client2.jpg',
            'rating' => 5,
            'videoId' => 'example123'
        ],
        [
            'id' => 3,
            'name' => 'Maria Rodriguez',
            'position' => 'Founder, Artisan Creations',
            'location' => 'Chicago, IL',
            'category' => 'retirement',
            'content' => 'As a small business owner planning for retirement, I needed guidance that understood my unique situation. The team at Kibo Capital developed a retirement strategy that addressed both my personal needs and my business succession plan. Their expertise has given me peace of mind knowing my financial future is secure.',
            'image' => 'images/testimonials/client3.jpg',
            'rating' => 5,
            'videoId' => null
        ],
        [
            'id' => 4,
            'name' => 'Robert Thompson',
            'position' => 'CFO, Healthcare Solutions',
            'location' => 'Boston, MA',
            'category' => 'investment',
            'content' => 'Kibo Capital has been instrumental in managing our company\'s investment portfolio. Their disciplined approach to asset allocation and risk management has helped us achieve our financial objectives while maintaining the liquidity we need for operations. Their quarterly reports and reviews provide complete transparency and valuable insights.',
            'image' => 'images/testimonials/client4.jpg',
            'rating' => 4,
            'videoId' => null
        ],
        [
            'id' => 5,
            'name' => 'Jennifer Wu',
            'position' => 'Technology Executive',
            'location' => 'Seattle, WA',
            'category' => 'wealth',
            'content' => 'After receiving a significant liquidity event from my company\'s acquisition, I needed comprehensive wealth management services. Kibo Capital provided exactly what I needed - from investment management to tax planning and philanthropic strategies. Their holistic approach and attention to detail have been exceptional.',
            'image' => 'images/testimonials/client5.jpg',
            'rating' => 5,
            'videoId' => 'example456'
        ],
        [
            'id' => 6,
            'name' => 'Michael Blackwell',
            'position' => 'Retired Executive',
            'location' => 'Miami, FL',
            'category' => 'retirement',
            'content' => 'Transitioning into retirement was a daunting prospect, but the team at Kibo Capital made the process seamless. They created a comprehensive retirement income strategy that has allowed me to maintain my lifestyle while ensuring my assets are positioned for long-term sustainability. Their ongoing support and adjustments have been invaluable.',
            'image' => 'images/testimonials/client6.jpg',
            'rating' => 5,
            'videoId' => null
        ],
        [
            'id' => 7,
            'name' => 'Elizabeth Parker',
            'position' => 'Attorney',
            'location' => 'Washington, DC',
            'category' => 'estate',
            'content' => 'As an attorney myself, I appreciate the sophisticated estate planning strategies that Kibo Capital has implemented for my family. They coordinated seamlessly with my legal team to create a comprehensive plan that addresses wealth transfer, tax efficiency, and philanthropic goals. Their expertise in this complex area has been truly impressive.',
            'image' => 'images/testimonials/client7.jpg',
            'rating' => 5,
            'videoId' => null
        ],
        [
            'id' => 8,
            'name' => 'James Wilson',
            'position' => 'Real Estate Developer',
            'location' => 'Los Angeles, CA',
            'category' => 'investment',
            'content' => 'The investment team at Kibo Capital has been exceptional in helping me diversify beyond real estate into other asset classes. Their knowledge of alternative investments and private equity has opened new opportunities for growth that I wouldn\'t have accessed otherwise. Their strategic thinking and market insights are second to none.',
            'image' => 'images/testimonials/client8.jpg',
            'rating' => 5,
            'videoId' => null
        ],
        [
            'id' => 9,
            'name' => 'Patricia Lee',
            'position' => 'Medical Practice Owner',
            'location' => 'Houston, TX',
            'category' => 'wealth',
            'content' => 'Running a busy medical practice left me little time to manage my growing assets effectively. Kibo Capital has been the perfect partner, providing comprehensive wealth management services that address both my personal and business finances. Their proactive approach and regular updates keep me informed without requiring constant attention from me.',
            'image' => 'images/testimonials/client9.jpg',
            'rating' => 4,
            'videoId' => null
        ],
        [
            'id' => 10,
            'name' => 'Thomas Wright',
            'position' => 'Multi-generation Family Business Owner',
            'location' => 'Philadelphia, PA',
            'category' => 'estate',
            'content' => 'Our family business presented complex succession and estate planning challenges that required sophisticated solutions. Kibo Capital worked closely with three generations of our family to create a comprehensive plan that ensures business continuity, equitable wealth transfer, and tax efficiency. Their family governance expertise has been particularly valuable.',
            'image' => 'images/testimonials/client10.jpg',
            'rating' => 5,
            'videoId' => 'example789'
        ],
        [
            'id' => 11,
            'name' => 'Sophia Martinez',
            'position' => 'Nonprofit Executive',
            'location' => 'Denver, CO',
            'category' => 'retirement',
            'content' => 'Working in the nonprofit sector meant I needed specialized retirement planning that accounted for my unique compensation structure. Kibo Capital developed strategies that optimized my retirement benefits and created a sustainable income plan. Their understanding of the specific challenges faced by nonprofit executives has been tremendously helpful.',
            'image' => 'images/testimonials/client11.jpg',
            'rating' => 4,
            'videoId' => null
        ],
        [
            'id' => 12,
            'name' => 'Daniel Kim',
            'position' => 'Tech Entrepreneur',
            'location' => 'Austin, TX',
            'category' => 'investment',
            'content' => 'As a tech entrepreneur with a portfolio of startup investments, I needed advisors who understood both traditional and alternative asset classes. Kibo Capital has expertly managed my diversified portfolio, balancing growth opportunities with appropriate risk management. Their understanding of the tech sector and private investments has been particularly valuable.',
            'image' => 'images/testimonials/client12.jpg',
            'rating' => 5,
            'videoId' => null
        ]
    ];

    public $featuredTestimonials = [2, 5, 10]; // IDs of testimonials with videos
    public $selectedTestimonial = null;

    public function mount()
    {
        $this->selectedTestimonial = $this->testimonials[0];
    }

    public function setActiveCategory($category)
    {
        $this->activeCategory = $category;
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
