<?php

namespace App\Livewire;

use Livewire\Component;

class PortfolioPage extends Component
{
    public $categories = [
        'all' => 'All Investments',
        'private-equity' => 'Private Equity',
        'venture-capital' => 'Venture Capital',
        'real-estate' => 'Real Estate',
        'fixed-income' => 'Fixed Income',
        'public-equity' => 'Public Equity'
    ];

    public $featuredInvestments=[];

    public $filteredInvestments=[];

    public $activeCategory = 'all';

    public $investments = [
        [
            'id' => 1,
            'name' => 'TechFusion Inc.',
            'category' => 'private-equity',
            'description' => 'TechFusion is a leading enterprise software company specializing in AI-driven business process automation solutions. Kibo Capital led a significant investment round to accelerate the company\'s global expansion and product development.',
            'image' => 'images/portfolio/tech-fusion.jpg',
            'results' => [
                'Initial Investment' => '$25 million',
                'Investment Year' => '2018',
                'Growth Since Investment' => '215%',
                'Current Status' => 'Portfolio Company'
            ],
            'quote' => 'Kibo Capital\'s strategic guidance and industry connections have been instrumental in our international expansion and accelerated growth trajectory.',
            'quote_author' => 'Jennifer Harris, CEO of TechFusion',
            'featured' => true
        ],
        [
            'id' => 2,
            'name' => 'Horizon Healthcare',
            'category' => 'private-equity',
            'description' => 'Horizon Healthcare operates a network of specialty clinics across the United States. Kibo Capital\'s investment has supported the company\'s acquisition strategy and technological infrastructure improvements.',
            'image' => 'images/portfolio/horizon-healthcare.jpg',
            'results' => [
                'Initial Investment' => '$40 million',
                'Investment Year' => '2017',
                'Growth Since Investment' => '175%',
                'Current Status' => 'Portfolio Company'
            ],
            'quote' => 'With Kibo Capital\'s support, we\'ve been able to expand our clinic network by 300% and implement cutting-edge patient management systems.',
            'quote_author' => 'Michael Chen, President of Horizon Healthcare',
            'featured' => true
        ],
        [
            'id' => 3,
            'name' => 'GreenPath Logistics',
            'category' => 'private-equity',
            'description' => 'GreenPath Logistics is revolutionizing the transportation industry with sustainable supply chain solutions. Our investment has helped them expand their electric vehicle fleet and develop proprietary logistics software.',
            'image' => 'images/portfolio/green-path.jpg',
            'results' => [
                'Initial Investment' => '$35 million',
                'Investment Year' => '2019',
                'Growth Since Investment' => '150%',
                'Current Status' => 'Portfolio Company'
            ],
            'quote' => 'Kibo Capital understood our vision for sustainable logistics from day one and provided not just capital, but strategic partnerships that accelerated our growth.',
            'quote_author' => 'Sarah Johnson, Founder of GreenPath Logistics',
            'featured' => false
        ],
        [
            'id' => 4,
            'name' => 'Quantum Computing Labs',
            'category' => 'venture-capital',
            'description' => 'Quantum Computing Labs is developing next-generation quantum processors for commercial applications. Our seed investment has supported their R&D efforts and talent acquisition in this cutting-edge technology field.',
            'image' => 'images/portfolio/quantum-labs.jpg',
            'results' => [
                'Initial Investment' => '$10 million',
                'Investment Year' => '2020',
                'Growth Since Investment' => '300%',
                'Current Status' => 'Early Stage'
            ],
            'quote' => 'The Kibo Capital team\'s deep technical knowledge and patient capital approach have been perfect for our long-term research and development roadmap.',
            'quote_author' => 'Dr. Robert Chang, Founder of Quantum Computing Labs',
            'featured' => false
        ],
        [
            'id' => 5,
            'name' => 'FinTech Solutions',
            'category' => 'venture-capital',
            'description' => 'FinTech Solutions provides innovative payment processing and blockchain-based financial services. Our Series B investment has accelerated their market penetration in emerging economies.',
            'image' => 'images/portfolio/fintech-solutions.jpg',
            'results' => [
                'Initial Investment' => '$15 million',
                'Investment Year' => '2019',
                'Growth Since Investment' => '250%',
                'Current Status' => 'Growth Stage'
            ],
            'quote' => 'Kibo Capital\'s global financial network opened doors that would have taken years to access on our own, dramatically accelerating our international expansion.',
            'quote_author' => 'Maria Rodriguez, CEO of FinTech Solutions',
            'featured' => true
        ],
        [
            'id' => 6,
            'name' => 'Urban Agricultural Innovations',
            'category' => 'venture-capital',
            'description' => 'Urban Agricultural Innovations is pioneering vertical farming technology for sustainable food production in urban environments. Our investment supports their technology development and initial facility construction.',
            'image' => 'images/portfolio/urban-agricultural.jpg',
            'results' => [
                'Initial Investment' => '$12 million',
                'Investment Year' => '2021',
                'Growth Since Investment' => '120%',
                'Current Status' => 'Early Stage'
            ],
            'quote' => 'The team at Kibo Capital brought not just funding but crucial connections in real estate and regulatory affairs that were vital to our launch phase.',
            'quote_author' => 'Thomas Wright, Founder of Urban Agricultural Innovations',
            'featured' => false
        ],
        [
            'id' => 7,
            'name' => 'Centennial Towers',
            'category' => 'real-estate',
            'description' => 'Centennial Towers is a premium mixed-use development in downtown Chicago featuring office, retail, and residential spaces. Our investment supported the final development phase and implementation of smart building technologies.',
            'image' => 'images/portfolio/centennial-towers.jpg',
            'results' => [
                'Initial Investment' => '$75 million',
                'Investment Year' => '2017',
                'Annual Return' => '14.5%',
                'Current Status' => 'Fully Leased'
            ],
            'quote' => 'Kibo Capital\'s expertise in commercial real estate and technology integration helped us create one of the most sought-after properties in the Chicago market.',
            'quote_author' => 'David Miller, Managing Director of Centennial Development',
            'featured' => true
        ],
        [
            'id' => 8,
            'name' => 'Pacific Gateway Logistics Hub',
            'category' => 'real-estate',
            'description' => 'Pacific Gateway is a state-of-the-art logistics facility near the Port of Long Beach. Our investment funded the development of this strategically located property equipped with advanced automation systems.',
            'image' => 'images/portfolio/pacific-gateway.jpg',
            'results' => [
                'Initial Investment' => '$60 million',
                'Investment Year' => '2018',
                'Annual Return' => '12.8%',
                'Current Status' => 'Fully Operational'
            ],
            'quote' => 'The vision and execution support from Kibo Capital transformed what could have been a standard warehouse into a technology-driven logistics facility that commands premium rates.',
            'quote_author' => 'Jennifer Wu, CEO of Pacific Logistics Properties',
            'featured' => false
        ],
        [
            'id' => 9,
            'name' => 'Meridian Senior Living Communities',
            'category' => 'real-estate',
            'description' => 'Meridian operates premium senior living communities in Florida and Arizona. Our investment supported the expansion from 3 to 12 facilities and implementation of innovative care technologies.',
            'image' => 'images/portfolio/meridian-senior.jpg',
            'results' => [
                'Initial Investment' => '$45 million',
                'Investment Year' => '2019',
                'Annual Return' => '13.2%',
                'Current Status' => 'Expanding'
            ],
            'quote' => 'With Kibo Capital\'s support, we\'ve been able to create senior communities that combine compassionate care with cutting-edge health monitoring technologies.',
            'quote_author' => 'Robert Thompson, Founder of Meridian Senior Living',
            'featured' => false
        ],
        [
            'id' => 10,
            'name' => 'Infrastructure Bond Fund',
            'category' => 'fixed-income',
            'description' => 'Our Infrastructure Bond Fund focuses on municipal and government bonds financing essential infrastructure projects across the United States. The fund prioritizes projects with strong environmental and social benefits.',
            'image' => 'images/portfolio/infrastructure-bonds.jpg',
            'results' => [
                'Fund Size' => '$250 million',
                'Established' => '2016',
                'Average Annual Return' => '5.4%',
                'Current Status' => 'Active Management'
            ],
            'quote' => null,
            'quote_author' => null,
            'featured' => false
        ],
        [
            'id' => 11,
            'name' => 'Corporate Credit Opportunities',
            'category' => 'fixed-income',
            'description' => 'This fund focuses on investment-grade corporate bonds with a specialized strategy to identify undervalued securities and optimization opportunities in the corporate debt market.',
            'image' => 'images/portfolio/corporate-credit.jpg',
            'results' => [
                'Fund Size' => '$320 million',
                'Established' => '2017',
                'Average Annual Return' => '6.2%',
                'Current Status' => 'Active Management'
            ],
            'quote' => null,
            'quote_author' => null,
            'featured' => false
        ],
        [
            'id' => 12,
            'name' => 'Strategic Opportunities Fund',
            'category' => 'public-equity',
            'description' => 'Our flagship public equities fund focuses on identifying companies with strong growth potential, sustainable competitive advantages, and alignment with long-term economic trends.',
            'image' => 'images/portfolio/strategic-opportunities.jpg',
            'results' => [
                'Fund Size' => '$450 million',
                'Established' => '2015',
                'Average Annual Return' => '10.8%',
                'Current Status' => 'Active Management'
            ],
            'quote' => null,
            'quote_author' => null,
            'featured' => false
        ],
        [
            'id' => 13,
            'name' => 'Technology Leaders ETF',
            'category' => 'public-equity',
            'description' => 'This exchange-traded fund focuses on established technology companies with dominant market positions and strong innovation pipelines. The actively managed ETF adjusts holdings based on technological trends and valuation metrics.',
            'image' => 'images/portfolio/tech-leaders.jpg',
            'results' => [
                'Fund Size' => '$380 million',
                'Established' => '2018',
                'Average Annual Return' => '15.2%',
                'Current Status' => 'Active Management'
            ],
            'quote' => null,
            'quote_author' => null,
            'featured' => false
        ],
        [
            'id' => 14,
            'name' => 'Healthcare Innovation Fund',
            'category' => 'public-equity',
            'description' => 'This specialized fund invests in public healthcare companies at the forefront of medical innovation, including biotechnology, medical devices, digital health, and pharmaceutical firms with promising pipelines.',
            'image' => 'images/portfolio/healthcare-innovation.jpg',
            'results' => [
                'Fund Size' => '$275 million',
                'Established' => '2019',
                'Average Annual Return' => '12.5%',
                'Current Status' => 'Active Management'
            ],
            'quote' => null,
            'quote_author' => null,
            'featured' => false
        ]
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
