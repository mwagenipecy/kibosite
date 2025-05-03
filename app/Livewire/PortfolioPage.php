<?php

namespace App\Livewire;

use Livewire\Component;

class PortfolioPage extends Component
{
    public $categories = [
        'all'            => 'All Projects',
        'civil-works'    => 'Civil Works',
        'building'       => 'Building Construction',
        'renovation'     => 'Renovations',
        'infrastructure' => 'Infrastructure',
        'turnkey'        => 'Turnkey Solutions',
    ];

    public $featuredInvestments=[];

    public $filteredInvestments=[];

    public $activeCategory = 'all';

    public $investments = [
        [
            'id'          => 1,
            'name'        => 'Dar es Salaam Overpass',
            'category'    => 'infrastructure',
            'description' => 'Design and construction of a 2-km elevated overpass—including seismic-resistant piers and durable asphalt wearing course—to ease city traffic.',
            'image'       => 'images/portfolio/dar-overpass.jpg',
            'results'     => [
                'Contract Value'  => 'TZS 4.2 billion',
                'Completion Year' => '2023',
                'Duration'        => '18 months',
                'Status'          => 'Completed',
            ],
            'quote'       => 'Kibo Capital’s integrated project management ensured on-time delivery under challenging site conditions.',
            'quote_author'=> 'Eng. John Kimaro, Project Manager',
            'featured'    => true,
        ],
        [
            'id'          => 2,
            'name'        => 'Mbeya Hospital Wing Expansion',
            'category'    => 'building',
            'description' => 'Expansion of pediatric and maternity wings including reinforced concrete framing, MEP works, and sterile interior finishes to meet healthcare standards.',
            'image'       => 'images/portfolio/mbeya-hospital.jpg',
            'results'     => [
                'Contract Value'  => 'TZS 2.8 billion',
                'Completion Year' => '2022',
                'Duration'        => '12 months',
                'Status'          => 'Completed',
            ],
            'quote'       => 'Their strict safety protocols and quality controls exceeded our healthcare requirements.',
            'quote_author'=> 'Dr. Amina Suleiman, Hospital Administrator',
            'featured'    => true,
        ],
        [
            'id'          => 3,
            'name'        => 'Stone Town Heritage Renovation',
            'category'    => 'renovation',
            'description' => 'Seismic retrofitting and façade restoration of two heritage coral-stone buildings, preserving historical character while upgrading structural safety.',
            'image'       => 'images/portfolio/stone-town.jpg',
            'results'     => [
                'Contract Value'  => 'TZS 1.2 billion',
                'Completion Year' => '2021',
                'Duration'        => '9 months',
                'Status'          => 'Completed',
            ],
            'quote'       => 'Kibo Capital balanced preservation with modern engineering standards flawlessly.',
            'quote_author'=> 'Ms. Fatima Hassan, Conservation Lead',
            'featured'    => false,
        ],
        [
            'id'          => 4,
            'name'        => 'Kilimanjaro Eco-Resort Turnkey',
            'category'    => 'turnkey',
            'description' => 'Full turnkey development of an eco-resort at Kilimanjaro foothills—lodging, solar power, water treatment and landscaping, delivered under one contract.',
            'image'       => 'images/portfolio/kili-resort.jpg',
            'results'     => [
                'Contract Value'  => 'TZS 3.5 billion',
                'Completion Year' => '2024',
                'Duration'        => '15 months',
                'Status'          => 'Ongoing',
            ],
            'quote'       => 'Their end-to-end execution allowed us to open ahead of schedule and under budget.',
            'quote_author'=> 'Mr. David Odhiambo, Resort Owner',
            'featured'    => true,
        ],
    ];
    public $selectedInvestment = null;

    public function mount()
    {
        $this->selectedInvestment = $this->investments[0];
    }

    public function setActiveCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function selectInvestment($id)
    {
        $this->selectedInvestment = collect($this->investments)->firstWhere('id', $id);
    }

    public function getFilteredInvestmentsProperty()
    {
        if ($this->activeCategory === 'all') {
            return $this->investments;
        }
        
        return collect($this->investments)
            ->filter(function ($investment) {
                return $investment['category'] === $this->activeCategory;
            })
            ->toArray();
    }

    public function getFeaturedInvestmentsProperty()
    {
        return collect($this->investments)
            ->filter(function ($investment) {
                return $investment['featured'] === true;
            })
            ->take(4)
            ->toArray();
    }

    public $investmentStats = [
        [
            'value' => '$2.5B+',
            'label' => 'Assets Under Management'
        ],
        [
            'value' => '45+',
            'label' => 'Portfolio Companies'
        ],
        [
            'value' => '14.7%',
            'label' => 'Average IRR'
        ],
        [
            'value' => '25+',
            'label' => 'Years of Experience'
        ]
    ];

    public $caseStudies = [
        [
            'id' => 1,
            'title' => 'TechFusion: Scaling a SaaS Leader',
            'category' => 'private-equity',
            'image' => 'images/case-studies/techfusion.jpg',
            'summary' => 'How our strategic investment and operational expertise helped TechFusion scale from a promising startup to a global enterprise software leader.',
            'challenges' => [
                'Needed capital for international expansion',
                'Required enterprise sales expertise to target Fortune 500 clients',
                'Technology platform needed scaling to support growth'
            ],
            'solutions' => [
                'Provided $25M in growth capital',
                'Introduced key strategic hires for global sales team',
                'Connected with technology infrastructure partners',
                'Guided development of enterprise pricing model'
            ],
            'results' => [
                'Revenue growth from $12M to $85M in 4 years',
                'Successful expansion into 14 international markets',
                'Enterprise client base grew from 35 to over 250 companies',
                'Headcount growth from 65 to 320 employees'
            ]
        ],
        [
            'id' => 2,
            'title' => 'Centennial Towers: Redefining Urban Real Estate',
            'category' => 'real-estate',
            'image' => 'images/case-studies/centennial.jpg',
            'summary' => 'How our investment transformed a standard commercial development into a premium, technology-enabled mixed-use property commanding top market rates.',
            'challenges' => [
                'Development delays and budget overruns',
                'Needed differentiation in competitive urban market',
                'Traditional building systems were outdated',
                'Initial leasing interest below projections'
            ],
            'solutions' => [
                'Recapitalized project with $75M investment',
                'Introduced smart building technology partners',
                'Reimagined space utilization for modern tenants',
                'Developed comprehensive ESG features'
            ],
            'results' => [
                'Project completed on revised timeline',
                'Achieved LEED Platinum certification',
                'Secured 95% occupancy within 10 months',
                'Rental rates 22% above initial projections',
                'Building technology reduced operational costs by 28%'
            ]
        ],
        [
            'id' => 3,
            'title' => 'FinTech Solutions: Expanding to Emerging Markets',
            'category' => 'venture-capital',
            'image' => 'images/case-studies/fintech.jpg',
            'summary' => 'How our investment and international expertise helped FinTech Solutions successfully expand their innovative payment platform into emerging markets.',
            'challenges' => [
                'Needed specialized knowledge of emerging market regulations',
                'Required capital for rapid expansion',
                'Technology needed adaptation for diverse markets',
                'Local partnerships were essential but difficult to establish'
            ],
            'solutions' => [
                'Provided $15M Series B funding',
                'Connected with regulatory experts in target markets',
                'Introduced to key banking partners in 8 countries',
                'Advised on localization strategy and hiring'
            ],
            'results' => [
                'Successful launch in 12 emerging markets in 24 months',
                'User base grew from 1.2M to 8.5M',
                'Transaction volume increased by 580%',
                'Established profitable operations in all new markets'
            ]
        ]
    ];

    public $selectedCaseStudy = null;

    public function selectCaseStudy($id)
    {
        $this->selectedCaseStudy = collect($this->caseStudies)->firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.portfolio-page');
    }
}





