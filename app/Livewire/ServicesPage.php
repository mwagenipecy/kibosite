<?php

namespace App\Livewire;

use Livewire\Component;

class ServicesPage extends Component
{
    public $activeTab = 'investment';
    
    public $activeService=[];
    public $services = [
       
        [
            'id' => 'investment',
            'title' => 'Investment Management',
            'shortDescription' => 'Strategic asset allocation and portfolio management tailored to your financial goals.',
            'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Our investment management service provides comprehensive solutions designed to optimize your portfolio performance while managing risk. We create customized investment strategies aligned with your financial goals, time horizon, and risk tolerance.',
            'features' => [
                [
                    'title' => 'Personalized Investment Strategy',
                    'description' => 'We develop tailored investment plans based on your unique financial goals, time horizon, and risk tolerance.'
                ],
                [
                    'title' => 'Diversified Portfolio Construction',
                    'description' => 'We build well-diversified portfolios across asset classes, sectors, and geographies to manage risk.'
                ],
                [
                    'title' => 'Active Portfolio Management',
                    'description' => 'Our team continuously monitors market conditions and makes strategic adjustments to optimize your portfolio performance.'
                ],
                [
                    'title' => 'Tax-Efficient Investing',
                    'description' => 'We implement tax-efficient strategies to maximize your after-tax returns and minimize tax liabilities.'
                ],
                [
                    'title' => 'Regular Performance Reviews',
                    'description' => 'We provide comprehensive performance reporting and regular reviews to keep you informed about your investment progress.'
                ]
            ],
            'image' => 'images/services/investment-management.jpg',
            'cta' => 'Optimize Your Investments'
        ],
        
        [
            'id' => 'wealth',
            'title' => 'Wealth Management',
            'shortDescription' => 'Comprehensive strategies to help you build, preserve, and transfer wealth.',
            'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
            'description' => 'Our wealth management service takes a holistic approach to your financial life, integrating investment strategies with comprehensive financial planning. We help you build, preserve, and transfer wealth across generations.',
            'features' => [
                [
                    'title' => 'Holistic Financial Planning',
                    'description' => 'We create a comprehensive plan that addresses all aspects of your financial life, from investments to insurance and estate planning.'
                ],
                [
                    'title' => 'Estate Planning Strategies',
                    'description' => 'We develop customized strategies to efficiently transfer wealth to future generations or charitable organizations.'
                ],
                [
                    'title' => 'Retirement Planning',
                    'description' => 'We help you prepare for a financially secure retirement with personalized income strategies and distribution planning.'
                ],
                [
                    'title' => 'Philanthropic Advisory',
                    'description' => 'We assist in creating meaningful and tax-efficient charitable giving strategies aligned with your values.'
                ],
                [
                    'title' => 'Family Wealth Services',
                    'description' => 'We provide education and governance structures to prepare future generations for wealth transfer and management.'
                ]
            ],
            'image' => 'images/services/wealth-management.jpg',
            'cta' => 'Build Your Legacy'
        ],
        [
            'id' => 'financial',
            'title' => 'Financial Planning',
            'shortDescription' => 'Detailed roadmaps to help you navigate life\'s financial milestones and challenges.',
            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
            'description' => 'Our financial planning service provides a comprehensive framework for achieving your short and long-term financial objectives. We help you navigate life\'s financial challenges and opportunities with confidence.',
            'features' => [
                [
                    'title' => 'Comprehensive Financial Assessment',
                    'description' => 'We analyze your current financial situation, including assets, liabilities, income, expenses, and existing financial strategies.'
                ],
                [
                    'title' => 'Goal-Based Planning',
                    'description' => 'We develop actionable strategies to help you achieve specific financial objectives, from education funding to retirement.'
                ],
                [
                    'title' => 'Cash Flow Management',
                    'description' => 'We optimize your income and expenses to improve savings rate and accelerate progress toward your financial goals.'
                ],
                [
                    'title' => 'Education Funding Strategies',
                    'description' => 'We create plans to save for education expenses using tax-advantaged accounts and other investment vehicles.'
                ],
                [
                    'title' => 'Regular Plan Reviews',
                    'description' => 'We continuously monitor and adjust your financial plan to accommodate life changes and evolving financial goals.'
                ]
            ],
            'image' => 'images/services/financial-planning.jpg',
            'cta' => 'Plan Your Future'
        ],
        [
            'id' => 'retirement',
            'title' => 'Retirement Planning',
            'shortDescription' => 'Strategies to help you prepare for and enjoy a financially secure retirement.',
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Our retirement planning service helps you prepare for a financially secure retirement. We develop personalized strategies for saving, investing, and creating sustainable income during your retirement years.',
            'features' => [
                [
                    'title' => 'Retirement Income Projections',
                    'description' => 'We create detailed projections to determine how much you need to save and how your assets can generate income in retirement.'
                ],
                [
                    'title' => 'Social Security Optimization',
                    'description' => 'We analyze claiming strategies to maximize your lifetime Social Security benefits based on your specific situation.'
                ],
                [
                    'title' => 'Pension Analysis',
                    'description' => 'We evaluate pension options and help you make informed decisions about lump sum versus annuity payments.'
                ],
                [
                    'title' => 'IRA and 401(k) Management',
                    'description' => 'We optimize your retirement accounts with appropriate investment allocations and distribution strategies.'
                ],
                [
                    'title' => 'Healthcare Cost Planning',
                    'description' => 'We help you plan for healthcare expenses in retirement, including Medicare and long-term care considerations.'
                ]
            ],
            'image' => 'images/services/retirement-planning.jpg',
            'cta' => 'Secure Your Retirement'
        ],
        [
            'id' => 'tax',
            'title' => 'Tax Planning',
            'shortDescription' => 'Strategic approaches to minimize tax liabilities and maximize after-tax returns.',
            'icon' => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z',
            'description' => 'Our tax planning service focuses on implementing strategies to minimize your tax burden while maximizing wealth accumulation. We coordinate with your tax professionals to ensure a comprehensive approach.',
            'features' => [
                [
                    'title' => 'Tax-Efficient Investment Strategies',
                    'description' => 'We structure your investments to minimize taxable events and maximize after-tax returns.'
                ],
                [
                    'title' => 'Income Tax Planning',
                    'description' => 'We help you manage income sources and timing to potentially reduce your overall tax liability.'
                ],
                [
                    'title' => 'Tax-Loss Harvesting',
                    'description' => 'We strategically realize investment losses to offset gains and potentially reduce your tax burden.'
                ],
                [
                    'title' => 'Charitable Giving Strategies',
                    'description' => 'We implement tax-efficient charitable giving approaches, including donor-advised funds and qualified charitable distributions.'
                ],
                [
                    'title' => 'Estate and Gift Tax Planning',
                    'description' => 'We develop strategies to minimize estate and gift taxes while efficiently transferring wealth to your heirs.'
                ]
            ],
            'image' => 'images/services/tax-planning.jpg',
            'cta' => 'Optimize Your Tax Strategy'
        ],
        [
            'id' => 'estate',
            'title' => 'Estate Planning',
            'shortDescription' => 'Comprehensive solutions to protect your assets and legacy for future generations.',
            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
            'description' => 'Our estate planning service helps you create a comprehensive plan for the management and transfer of your assets during your lifetime and after your passing. We work to ensure your wishes are fulfilled and your legacy protected.',
            'features' => [
                [
                    'title' => 'Estate Strategy Development',
                    'description' => 'We help you create a comprehensive estate plan that reflects your values and wishes for asset distribution.'
                ],
                [
                    'title' => 'Trust Services',
                    'description' => 'We advise on appropriate trust structures to manage assets, minimize taxes, and provide for beneficiaries according to your wishes.'
                ],
                [
                    'title' => 'Legacy Planning',
                    'description' => 'We help you define and implement your vision for leaving a meaningful legacy for future generations.'
                ],
                [
                    'title' => 'Business Succession Planning',
                    'description' => 'We develop strategies for the smooth transition of family businesses to the next generation or other successors.'
                ],
                [
                    'title' => 'Charitable Giving Integration',
                    'description' => 'We incorporate philanthropic goals into your estate plan, creating a lasting impact for causes you care about.'
                ]
            ],
            'image' => 'images/services/estate-planning.jpg',
            'cta' => 'Protect Your Legacy'
        ]
    ];

    public $process = [
        [
            'number' => '01',
            'title' => 'Initial Consultation',
            'description' => 'We begin with a comprehensive discussion to understand your financial situation, goals, and concerns.'
        ],
        [
            'number' => '02',
            'title' => 'Financial Analysis',
            'description' => 'Our team conducts a thorough analysis of your current financial position, investments, and future projections.'
        ],
        [
            'number' => '03',
            'title' => 'Strategy Development',
            'description' => 'We create a personalized strategy aligned with your specific goals, risk tolerance, and time horizon.'
        ],
        [
            'number' => '04',
            'title' => 'Implementation',
            'description' => 'Upon your approval, we execute the strategy with precision and attention to detail.'
        ],
        [
            'number' => '05',
            'title' => 'Ongoing Management',
            'description' => 'We continuously monitor and adjust your financial plan as markets evolve and your circumstances change.'
        ],
        [
            'number' => '06',
            'title' => 'Regular Reviews',
            'description' => 'We schedule periodic reviews to assess progress, make adjustments, and address any changes in your financial goals.'
        ]
    ];

    public $faqs = [
        [
            'question' => 'What sets Kibo Capital apart from other financial firms?',
            'answer' => 'Kibo Capital combines sophisticated investment strategies with personalized service. Unlike larger firms that may take a one-size-fits-all approach, we create truly customized solutions based on your unique financial situation and goals. Our team of experienced professionals is committed to building long-term relationships and providing exceptional service.'
        ],
        [
            'question' => 'What is your investment philosophy?',
            'answer' => 'Our investment philosophy is built on strategic asset allocation, diversification, and disciplined risk management. We believe in evidence-based investing that combines fundamental analysis with technical insights. Rather than chasing short-term market trends, we focus on creating sustainable, long-term investment strategies aligned with your specific goals and risk tolerance.'
        ],
        [
            'question' => 'What types of clients do you typically work with?',
            'answer' => 'We work with a diverse range of clients, including high-net-worth individuals, families, business owners, executives, and retirees. While our clients come from various backgrounds, they typically share a desire for sophisticated financial strategies, personalized service, and a long-term partnership with their financial advisors.'
        ],
        [
            'question' => 'Is there a minimum investment requirement to work with Kibo Capital?',
            'answer' => 'Yes, we typically work with clients who have investable assets of $500,000 or more. This minimum helps ensure we can provide the level of personalized service and attention that our clients expect. However, we evaluate each situation individually and may make exceptions based on specific circumstances.'
        ],
        [
            'question' => 'How are your fees structured?',
            'answer' => 'We operate on a fee-based model, typically charging an annual percentage based on assets under management. This aligns our interests with yours, as our compensation grows when your portfolio grows. We believe this transparent approach eliminates potential conflicts of interest that can arise with commission-based models. We provide a clear fee schedule during our initial consultation.'
        ],
        [
            'question' => 'How often will we meet to discuss my financial plan?',
            'answer' => 'We typically schedule quarterly reviews to discuss your portfolio performance and any adjustments needed to your financial plan. However, we can adjust the frequency based on your preferences and needs. Additionally, we\'re always available for ad-hoc meetings or discussions when significant life events or market changes occur that may impact your financial situation.'
        ]
    ];

    public function setActiveTab($tabId)
    {
        $this->activeTab = $tabId;
    }

    public function getActiveServiceProperty()
    {
        return collect($this->services)->firstWhere('id', $this->activeTab);
    }

    public function render()
    {
        return view('livewire.services-page');
    }




}
