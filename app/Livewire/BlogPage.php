<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;
    public $page;

    public $latestArticles=[];
    
    protected $paginationTheme = 'tailwind';
    
    public $categories = [
        'all' => 'All Articles',
        'investment-insights' => 'Investment Insights',
        'market-analysis' => 'Market Analysis',
        'wealth-management' => 'Wealth Management',
        'retirement-planning' => 'Retirement Planning',
        'tax-strategies' => 'Tax Strategies',
        'economic-outlook' => 'Economic Outlook'
    ];

    public $activeCategory = 'all';
    public $searchQuery = '';
    
    protected $queryString = [
        'activeCategory' => ['except' => 'all'],
        'searchQuery' => ['except' => '']
    ];

    public $featuredArticle = [
        'id' => 1,
        'title' => 'Understanding Market Volatility in Economic Uncertainty',
        'slug' => 'understanding-market-volatility-economic-uncertainty',
        'category' => 'market-analysis',
        'excerpt' => 'Market volatility is an inevitable aspect of investing, but it can be particularly pronounced during periods of economic uncertainty. This article examines the factors contributing to market fluctuations and provides strategies for navigating volatile conditions.',
        'content' => '',
        'image' => 'images/blog/market-volatility.jpg',
        'author' => 'Jennifer Wu',
        'author_position' => 'Chief Investment Officer',
        'author_image' => 'images/team/cio.jpg',
        'published_at' => 'April 15, 2023',
        'read_time' => '8 min read',
        'featured' => true
    ];

    public $articles = [
        [
            'id' => 1,
            'title' => 'Understanding Market Volatility in Economic Uncertainty',
            'slug' => 'understanding-market-volatility-economic-uncertainty',
            'category' => 'market-analysis',
            'excerpt' => 'Market volatility is an inevitable aspect of investing, but it can be particularly pronounced during periods of economic uncertainty. This article examines the factors contributing to market fluctuations and provides strategies for navigating volatile conditions.',
            'content' => '',
            'image' => 'images/blog/market-volatility.jpg',
            'author' => 'Jennifer Wu',
            'author_position' => 'Chief Investment Officer',
            'author_image' => 'images/team/cio.jpg',
            'published_at' => 'April 15, 2023',
            'read_time' => '8 min read',
            'featured' => true
        ],
        [
            'id' => 2,
            'title' => 'The Rise of Sustainable Investing: ESG Factors',
            'slug' => 'rise-sustainable-investing-esg-factors',
            'category' => 'investment-insights',
            'excerpt' => 'Environmental, Social, and Governance (ESG) investing has moved from a niche approach to a mainstream investment strategy. This article explores how ESG factors are reshaping investment decision-making and what it means for investors.',
            'content' => '',
            'image' => 'images/blog/sustainable-investing.jpg',
            'author' => 'David Chen',
            'author_position' => 'Director of Equity Research',
            'author_image' => 'images/team/equity-research.jpg',
            'published_at' => 'March 28, 2023',
            'read_time' => '10 min read',
            'featured' => false
        ],
        [
            'id' => 3,
            'title' => 'Retirement Planning: Starting Early for Maximum Growth',
            'slug' => 'retirement-planning-starting-early-maximum-growth',
            'category' => 'retirement-planning',
            'excerpt' => 'The power of compound interest makes early retirement planning crucial for long-term financial security. This article outlines why starting early matters and provides actionable strategies for retirement planning at different life stages.',
            'content' => '',
            'image' => 'images/blog/retirement-planning.jpg',
            'author' => 'Emily Rodriguez',
            'author_position' => 'Senior Wealth Advisor',
            'author_image' => 'images/team/wealth-advisor1.jpg',
            'published_at' => 'March 15, 2023',
            'read_time' => '7 min read',
            'featured' => false
        ],
        [
            'id' => 4,
            'title' => 'Navigating Tax Season: Strategies for Efficiency',
            'slug' => 'navigating-tax-season-strategies-efficiency',
            'category' => 'tax-strategies',
            'excerpt' => 'Tax planning shouldn\'t be a once-a-year activity. This comprehensive guide provides year-round strategies to optimize your tax position and minimize liabilities through proper planning and informed decision-making.',
            'content' => '',
            'image' => 'images/blog/tax-strategies.jpg',
            'author' => 'Thomas Wright',
            'author_position' => 'Senior Wealth Advisor',
            'author_image' => 'images/team/wealth-advisor2.jpg',
            'published_at' => 'February 28, 2023',
            'read_time' => '6 min read',
            'featured' => false
        ],
        [
            'id' => 5,
            'title' => 'Global Economic Outlook: Trends and Projections',
            'slug' => 'global-economic-outlook-trends-projections',
            'category' => 'economic-outlook',
            'excerpt' => 'This analysis examines current global economic indicators and provides projections for major economies in the coming year. From inflation concerns to growth prospects, we cover the key factors shaping the economic landscape.',
            'content' => '',
            'image' => 'images/blog/economic-outlook.jpg',
            'author' => 'Dr. Richard Blackwell',
            'author_position' => 'Economic Advisor',
            'author_image' => 'images/team/economic-advisor.jpg',
            'published_at' => 'February 15, 2023',
            'read_time' => '12 min read',
            'featured' => false
        ],
        [
            'id' => 6,
            'title' => 'Estate Planning Essentials for Every Life Stage',
            'slug' => 'estate-planning-essentials-every-life-stage',
            'category' => 'wealth-management',
            'excerpt' => 'Estate planning is not just for the wealthy or elderly. This guide walks through the essential estate planning considerations and documents needed at different life stages, from young professionals to retirees.',
            'content' => '',
            'image' => 'images/blog/estate-planning.jpg',
            'author' => 'Lisa Kim',
            'author_position' => 'Estate Planning Specialist',
            'author_image' => 'images/team/estate-planning.jpg',
            'published_at' => 'January 30, 2023',
            'read_time' => '9 min read',
            'featured' => false
        ],
        [
            'id' => 7,
            'title' => 'Alternative Investments: Diversification Beyond Traditional Assets',
            'slug' => 'alternative-investments-diversification-beyond-traditional-assets',
            'category' => 'investment-insights',
            'excerpt' => 'Alternative investments can provide diversification benefits and potentially enhance returns in a portfolio. This article explores various alternative asset classes and their role in a well-rounded investment strategy.',
            'content' => '',
            'image' => 'images/blog/alternative-investments.jpg',
            'author' => 'James Wilson',
            'author_position' => 'Alternative Investments Director',
            'author_image' => 'images/team/alternative.jpg',
            'published_at' => 'January 15, 2023',
            'read_time' => '8 min read',
            'featured' => false
        ],
        [
            'id' => 8,
            'title' => 'Bond Market Dynamics in a Rising Rate Environment',
            'slug' => 'bond-market-dynamics-rising-rate-environment',
            'category' => 'market-analysis',
            'excerpt' => 'Rising interest rates present challenges for fixed income investors. This analysis examines how different types of bonds perform during rate hikes and provides strategies for managing fixed income portfolios in the current environment.',
            'content' => '',
            'image' => 'images/blog/bond-market.jpg',
            'author' => 'Sarah Johnson',
            'author_position' => 'Fixed Income Portfolio Manager',
            'author_image' => 'images/team/fixed-income.jpg',
            'published_at' => 'December 20, 2022',
            'read_time' => '7 min read',
            'featured' => false
        ],
        [
            'id' => 9,
            'title' => 'Behavioral Finance: Understanding Investment Decision-Making',
            'slug' => 'behavioral-finance-understanding-investment-decision-making',
            'category' => 'investment-insights',
            'excerpt' => 'Cognitive biases and emotional reactions can significantly impact investment decisions. This article explores common behavioral finance patterns and provides frameworks for more rational and disciplined investment approaches.',
            'content' => '',
            'image' => 'images/blog/behavioral-finance.jpg',
            'author' => 'Michael Thompson',
            'author_position' => 'CEO & Founder',
            'author_image' => 'images/team/ceo.jpg',
            'published_at' => 'December 5, 2022',
            'read_time' => '10 min read',
            'featured' => false
        ],
        [
            'id' => 10,
            'title' => 'Retirement Income Strategies: Creating Sustainable Withdrawals',
            'slug' => 'retirement-income-strategies-creating-sustainable-withdrawals',
            'category' => 'retirement-planning',
            'excerpt' => 'Transitioning from accumulation to distribution in retirement requires careful planning. This article examines various withdrawal strategies and their implications for long-term financial sustainability in retirement.',
            'content' => '',
            'image' => 'images/blog/retirement-income.jpg',
            'author' => 'Robert Keller',
            'author_position' => 'Head of Wealth Management',
            'author_image' => 'images/team/wealth-head.jpg',
            'published_at' => 'November 22, 2022',
            'read_time' => '9 min read',
            'featured' => false
        ],
        [
            'id' => 11,
            'title' => 'Year-End Tax Planning: Maximizing Opportunities',
            'slug' => 'year-end-tax-planning-maximizing-opportunities',
            'category' => 'tax-strategies',
            'excerpt' => 'As the year draws to a close, certain tax planning strategies become particularly relevant. This guide outlines actionable year-end tax moves that could help optimize your tax situation before December 31st.',
            'content' => '',
            'image' => 'images/blog/year-end-tax.jpg',
            'author' => 'Thomas Wright',
            'author_position' => 'Senior Wealth Advisor',
            'author_image' => 'images/team/wealth-advisor2.jpg',
            'published_at' => 'November 10, 2022',
            'read_time' => '6 min read',
            'featured' => false
        ],
        [
            'id' => 12,
            'title' => 'Family Wealth Transfer: Strategies for Multigenerational Planning',
            'slug' => 'family-wealth-transfer-strategies-multigenerational-planning',
            'category' => 'wealth-management',
            'excerpt' => 'Transferring wealth effectively across generations requires careful planning beyond basic estate documents. This article explores comprehensive strategies for preserving family wealth and legacy across multiple generations.',
            'content' => '',
            'image' => 'images/blog/family-wealth.jpg',
            'author' => 'Lisa Kim',
            'author_position' => 'Estate Planning Specialist',
            'author_image' => 'images/team/estate-planning.jpg',
            'published_at' => 'October 25, 2022',
            'read_time' => '11 min read',
            'featured' => false
        ]
    ];

    public $popularTopics = [
        'Retirement Planning',
        'Investment Strategy',
        'Market Analysis',
        'Tax Optimization',
        'Estate Planning',
        'Sustainable Investing',
        'Economic Outlook',
        'Wealth Management'
    ];

    public function setActiveCategory($category)
    {
        $this->activeCategory = $category;
        $this->resetPage();
    }

    public function updatingSearchQuery()
    {
        $this->resetPage();
    }

    public function getFilteredArticlesProperty()
    {
        $query = $this->searchQuery;
        $category = $this->activeCategory;
        
        return collect($this->articles)
            ->when($category !== 'all', function ($collection) use ($category) {
                return $collection->filter(function ($article) use ($category) {
                    return $article['category'] === $category;
                });
            })
            ->when($query !== '', function ($collection) use ($query) {
                return $collection->filter(function ($article) use ($query) {
                    return stripos($article['title'], $query) !== false || 
                           stripos($article['excerpt'], $query) !== false || 
                           stripos($article['author'], $query) !== false;
                });
            })
            ->toArray();
    }

    public function getLatestArticlesProperty()
    {
        return collect($this->articles)
            ->take(3)
            ->toArray();
    }

    public function mount()
    {
        $this->featuredArticle = collect($this->articles)->firstWhere('featured', true);
    }

    public function render()
    {
        // Manually paginate the filtered articles
        $articlesCollection = collect($this->filteredArticles);
        $perPage = 6;
        $currentPage = $this->page;
        
        $currentPageItems = $articlesCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $paginatedArticles = new \Illuminate\Pagination\LengthAwarePaginator(
            $currentPageItems,
            $articlesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        
        return view('livewire.blog-page', [
            'paginatedArticles' => $paginatedArticles
        ]);
    }
}
