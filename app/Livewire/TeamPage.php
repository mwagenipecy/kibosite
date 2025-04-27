<?php

namespace App\Livewire;

use Livewire\Component;

class TeamPage extends Component
{
    public $teamCategories = [
        'all' => 'All Team',
        'leadership' => 'Leadership',
        'investment' => 'Investment Team',
        'wealth' => 'Wealth Management',
        'advisory' => 'Advisory Board'
    ];

    public $activeCategory = 'all';

    public $teamMembers = [
        [
            'id' => 1,
            'name' => 'Michael Thompson',
            'position' => 'CEO & Founder',
            'category' => 'leadership',
            'image' => 'images/team/ceo.jpg',
            'bio' => 'Michael founded Kibo Capital in 1998 with a vision to create a client-centered investment firm. With over 30 years of experience in financial services, he previously served as Managing Director at Goldman Sachs and holds an MBA from Harvard Business School.',
            'education' => [
                'Harvard Business School, MBA',
                'University of Pennsylvania, BS in Economics'
            ],
            'expertise' => [
                'Strategic Planning',
                'Investment Management',
                'Corporate Leadership',
                'Mergers & Acquisitions'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'michael.thompson@kibocapital.com'
        ],
        [
            'id' => 2,
            'name' => 'Jennifer Wu',
            'position' => 'Chief Investment Officer',
            'category' => 'leadership',
            'image' => 'images/team/cio.jpg',
            'bio' => 'Jennifer oversees all investment strategies and portfolio management at Kibo Capital. With more than 25 years in the investment industry, she previously managed global equity portfolios at BlackRock and holds a Ph.D. in Financial Economics.',
            'education' => [
                'University of Chicago, Ph.D. in Financial Economics',
                'Yale University, MS in Mathematics',
                'Beijing University, BS in Finance'
            ],
            'expertise' => [
                'Asset Allocation',
                'Global Equity Markets',
                'Risk Management',
                'Macroeconomic Analysis'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'jennifer.wu@kibocapital.com'
        ],
        [
            'id' => 3,
            'name' => 'Robert Keller',
            'position' => 'Head of Wealth Management',
            'category' => 'leadership',
            'image' => 'images/team/wealth-head.jpg',
            'bio' => 'Robert leads our wealth management division, focusing on comprehensive financial solutions for high-net-worth individuals and families. He brings 20 years of experience in private wealth management from Morgan Stanley and is a Certified Financial Planner (CFP®).',
            'education' => [
                'University of Michigan, MBA',
                'Cornell University, BA in Economics'
            ],
            'expertise' => [
                'Estate Planning',
                'Retirement Planning',
                'Tax Optimization',
                'Multi-generational Wealth Transfer'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'robert.keller@kibocapital.com'
        ],
        [
            'id' => 4,
            'name' => 'Sophia Martinez',
            'position' => 'Chief Financial Officer',
            'category' => 'leadership',
            'image' => 'images/team/cfo.jpg',
            'bio' => 'Sophia oversees all financial operations and corporate strategy for Kibo Capital. Before joining us, she was a Partner at Deloitte where she advised financial services firms. She is a Certified Public Accountant (CPA) with an extensive background in financial management.',
            'education' => [
                'Stanford University, MBA',
                'University of Texas, BBA in Accounting'
            ],
            'expertise' => [
                'Financial Operations',
                'Strategic Planning',
                'Regulatory Compliance',
                'Corporate Finance'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'sophia.martinez@kibocapital.com'
        ],
        [
            'id' => 5,
            'name' => 'David Chen',
            'position' => 'Director of Equity Research',
            'category' => 'investment',
            'image' => 'images/team/equity-research.jpg',
            'bio' => 'David leads our equity research team, focusing on identifying compelling investment opportunities across global markets. Prior to Kibo Capital, he was a Senior Research Analyst at Fidelity Investments, covering technology and healthcare sectors.',
            'education' => [
                'Columbia University, MBA',
                'MIT, BS in Computer Science'
            ],
            'expertise' => [
                'Equity Valuation',
                'Industry Analysis',
                'Fundamental Research',
                'Technology & Healthcare Sectors'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'david.chen@kibocapital.com'
        ],
        [
            'id' => 6,
            'name' => 'Sarah Johnson',
            'position' => 'Fixed Income Portfolio Manager',
            'category' => 'investment',
            'image' => 'images/team/fixed-income.jpg',
            'bio' => 'Sarah manages our fixed income strategies, focusing on generating stable returns while preserving capital. She brings 15 years of experience from PIMCO, where she specialized in corporate and municipal bonds. She holds the Chartered Financial Analyst (CFA) designation.',
            'education' => [
                'University of California, Berkeley, MBA',
                'Duke University, BA in Economics'
            ],
            'expertise' => [
                'Bond Portfolio Management',
                'Credit Analysis',
                'Interest Rate Strategy',
                'Fixed Income Security Selection'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'sarah.johnson@kibocapital.com'
        ],
        [
            'id' => 7,
            'name' => 'James Wilson',
            'position' => 'Alternative Investments Director',
            'category' => 'investment',
            'image' => 'images/team/alternative.jpg',
            'bio' => 'James oversees our alternative investment strategies, including private equity, hedge funds, and real assets. Before joining Kibo Capital, he was a Managing Director at Blackstone\'s Alternative Asset Management division and has over 20 years of industry experience.',
            'education' => [
                'Wharton School, MBA',
                'Princeton University, BA in Economics'
            ],
            'expertise' => [
                'Private Equity',
                'Hedge Fund Strategies',
                'Real Estate Investment',
                'Structured Investments'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'james.wilson@kibocapital.com'
        ],
        [
            'id' => 8,
            'name' => 'Emily Rodriguez',
            'position' => 'Senior Wealth Advisor',
            'category' => 'wealth',
            'image' => 'images/team/wealth-advisor1.jpg',
            'bio' => 'Emily specializes in creating comprehensive wealth management solutions for high-net-worth clients. She has 12 years of experience in private wealth management and is a Certified Financial Planner (CFP®) and Chartered Financial Consultant (ChFC®).',
            'education' => [
                'Northwestern University, MBA',
                'Boston College, BA in Finance'
            ],
            'expertise' => [
                'Retirement Planning',
                'Estate Planning',
                'Tax-Efficient Investing',
                'Family Office Services'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'emily.rodriguez@kibocapital.com'
        ],
        [
            'id' => 9,
            'name' => 'Thomas Wright',
            'position' => 'Senior Wealth Advisor',
            'category' => 'wealth',
            'image' => 'images/team/wealth-advisor2.jpg',
            'bio' => 'Thomas works with entrepreneurs and executives to create personalized wealth management strategies. With 15 years in the industry, he previously served at UBS Private Wealth Management. He is a Certified Financial Planner (CFP®) and Chartered Financial Analyst (CFA).',
            'education' => [
                'University of Chicago, MBA',
                'Dartmouth College, BA in Economics'
            ],
            'expertise' => [
                'Executive Compensation',
                'Business Succession Planning',
                'Retirement Strategies',
                'Philanthropic Planning'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'thomas.wright@kibocapital.com'
        ],
        [
            'id' => 10,
            'name' => 'Lisa Kim',
            'position' => 'Estate Planning Specialist',
            'category' => 'wealth',
            'image' => 'images/team/estate-planning.jpg',
            'bio' => 'Lisa specializes in advanced estate planning strategies for high-net-worth families. Before joining Kibo Capital, she practiced law at a prestigious firm focusing on estate and tax planning. She is an attorney and holds an LL.M. in Taxation.',
            'education' => [
                'New York University, LL.M. in Taxation',
                'Harvard Law School, J.D.',
                'UCLA, BA in Political Science'
            ],
            'expertise' => [
                'Estate & Trust Planning',
                'Wealth Transfer Strategies',
                'Family Governance',
                'Philanthropic Structures'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'lisa.kim@kibocapital.com'
        ],
        [
            'id' => 11,
            'name' => 'Dr. Richard Blackwell',
            'position' => 'Economic Advisor',
            'category' => 'advisory',
            'image' => 'images/team/economic-advisor.jpg',
            'bio' => 'Dr. Blackwell provides macroeconomic insights that inform our investment strategies. He is a former member of the Federal Reserve Board and served as Chief Economist at a major investment bank. He is currently a Professor of Economics at Princeton University.',
            'education' => [
                'MIT, Ph.D. in Economics',
                'London School of Economics, MSc',
                'Cambridge University, BA in Economics'
            ],
            'expertise' => [
                'Monetary Policy',
                'Global Economic Trends',
                'Central Banking',
                'Economic Forecasting'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'richard.blackwell@kibocapital.com'
        ],
        [
            'id' => 12,
            'name' => 'Catherine Yang',
            'position' => 'Technology Advisor',
            'category' => 'advisory',
            'image' => 'images/team/tech-advisor.jpg',
            'bio' => 'Catherine advises on technology trends and digital transformation in financial services. She is the former CTO of a major fintech company and serves on the boards of several technology companies. Her insights help us leverage technology to enhance client experiences.',
            'education' => [
                'Stanford University, MS in Computer Science',
                'Carnegie Mellon University, BS in Computer Engineering'
            ],
            'expertise' => [
                'Financial Technology',
                'Digital Transformation',
                'Cybersecurity',
                'Artificial Intelligence in Finance'
            ],
            'linkedin' => 'https://linkedin.com',
            'email' => 'catherine.yang@kibocapital.com'
        ]
    ];
    

    public $filteredTeamMembers=[];
    public $selectedMember = null;
    
    public function mount()
    {
        $this->selectedMember = $this->teamMembers[0];
    }

    public function setActiveCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function selectMember($id)
    {
        $this->selectedMember = collect($this->teamMembers)->firstWhere('id', $id);
    }

    public function getFilteredTeamMembersProperty()
    {
        if ($this->activeCategory === 'all') {
            return $this->teamMembers;
        }
        
        return collect($this->teamMembers)
            ->filter(function ($member) {
                return $member['category'] === $this->activeCategory;
            })
            ->toArray();
    }

    public function render()
    {
        return view('livewire.team-page');
    }
}
