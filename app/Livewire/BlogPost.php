<?php

namespace App\Livewire;

use Livewire\Component;

class BlogPost extends Component
{
    public $slug;
    public $article;
    public $relatedArticles = [];

    public $categories = [
        'investment-insights' => 'Investment Insights',
        'market-analysis' => 'Market Analysis',
        'wealth-management' => 'Wealth Management',
        'retirement-planning' => 'Retirement Planning',
        'tax-strategies' => 'Tax Strategies',
        'economic-outlook' => 'Economic Outlook'
    ];
    
    protected $articles = [
        [
            'id' => 1,
            'title' => 'Understanding Market Volatility in Economic Uncertainty',
            'slug' => 'soil-stabilization-methods-infrastructure',
            'category' => 'market-analysis',
            'excerpt' => 'Market volatility is an inevitable aspect of investing, but it can be particularly pronounced during periods of economic uncertainty. This article examines the factors contributing to market fluctuations and provides strategies for navigating volatile conditions.',
            'content' => '<p class="mb-4">Market volatility is an inevitable aspect of investing, particularly pronounced during periods of economic uncertainty. For investors, understanding the factors driving these fluctuations and developing strategies to navigate them is crucial for long-term success.</p>

<h2 class="text-2xl font-bold text-kibo-dark mt-8 mb-4">What Causes Market Volatility?</h2>

<!-- Rest of content as in original file -->',
            'image' => 'images/blog/market-volatility.jpg',
            'author' => 'Jennifer Wu',
            'author_position' => 'Chief Investment Officer',
            'author_image' => 'images/team/cio.jpg',
            'published_at' => 'April 15, 2023',
            'read_time' => '8 min read',
            'featured' => true,
            'tags' => ['Market Volatility', 'Risk Management', 'Investment Strategy', 'Economic Uncertainty']
        ],
        [
            'id' => 2,
            'title' => 'The Rise of Sustainable Investing: ESG Factors',
            'slug' => 'rise-sustainable-investing-esg-factors',
            'category' => 'investment-insights',
            'excerpt' => 'Environmental, Social, and Governance (ESG) investing has moved from a niche approach to a mainstream investment strategy. This article explores how ESG factors are reshaping investment decision-making and what it means for investors.',
            'content' => '<p class="mb-4">Environmental, Social, and Governance (ESG) investing has undergone a remarkable transformation over the past decade, evolving from a niche approach to a mainstream investment strategy. This shift represents more than just a trend; it reflects a fundamental change in how investors evaluate opportunities and risks in the modern economy.</p>

<!-- Rest of content as in original file -->',
            'image' => 'images/blog/sustainable-investing.jpg',
            'author' => 'David Chen',
            'author_position' => 'Director of Equity Research',
            'author_image' => 'images/team/equity-research.jpg',
            'published_at' => 'March 28, 2023',
            'read_time' => '10 min read',
            'featured' => false,
            'tags' => ['ESG Investing', 'Sustainable Finance', 'Corporate Governance', 'Climate Risk']
        ],
        // Add entries for remaining articles
    ];

  

    public function mount($slug)
    {
        $this->slug = $slug;
        
        // Find the article that matches the slug
        $foundArticle = collect($this->articles)->firstWhere('slug', $this->slug);
        
        // If article is found, assign it and find related articles
        if ($foundArticle) {
            $this->article = $foundArticle;
            
            // Get related articles (same category, excluding current)
            $this->relatedArticles = collect($this->articles)
                ->filter(function ($article) {
                    return $article['category'] === $this->article['category'] && 
                           $article['slug'] !== $this->article['slug'];
                })
                ->take(3)
                ->toArray();
        } else {
            // Handle case when article is not found
            // You might want to redirect to a 404 page or show a message
            $this->article = null;
            $this->relatedArticles = [];
        }
    }

    public function render()
    {
        return view('livewire.blog-post');
    }
}