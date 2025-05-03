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
        'all'                   => 'All Articles',
        'project-updates'       => 'Project Updates',
        'engineering-insights'  => 'Engineering Insights',
        'safety-protocols'      => 'Safety Protocols',
        'sustainability'        => 'Sustainability',
        'heritage-renovation'   => 'Heritage Renovation',
        'turnkey-solutions'     => 'Turnkey Solutions',
        'infrastructure'        => 'Infrastructure'
    ];

    public $activeCategory = 'all';
    public $searchQuery    = '';

    protected $queryString = [
        'activeCategory' => ['except' => 'all'],
        'searchQuery'    => ['except' => '']
    ];

    public $featuredArticle = [
        'id'              => 1,
        'title'           => 'Quality Control on Large-Scale Civil Works',
        'slug'            => 'quality-control-large-scale-civil-works',
        'category'        => 'engineering-insights',
        'excerpt'         => 'Maintaining rigorous quality control processes is critical in large-scale civil projects. This article explores best practices for material testing, inspections, and stakeholder coordination.',
        'content'         => '',
        'image'           => '/service/im4.jpg',
        'author'          => 'Eng. Edmund Urassa',
        'author_position' => 'Managing Director',
        'author_image'    => 'images/team/md.jpg',
        'published_at'    => 'April 20, 2025',
        'read_time'       => '7 min read',
        'featured'        => true,
    ];

    public $articles = [
        [
            'id'              => 1,
            'title'           => 'Quality Control on Large-Scale Civil Works',
            'slug'            => 'quality-control-large-scale-civil-works',
            'category'        => 'engineering-insights',
            'excerpt'         => 'Maintaining rigorous quality control processes is critical in large-scale civil projects. This article explores best practices for material testing, inspections, and stakeholder coordination.',
            'content'         => '',
            'image'           => '/service/im3.jpg',
            'author'          => 'Eng. Edmund Urassa',
            'author_position' => 'Managing Director',
            'author_image'    => 'images/team/md.jpg',
            'published_at'    => 'April 20, 2025',
            'read_time'       => '7 min read',
            'featured'        => true,
        ],
        [
            'id'              => 2,
            'title'           => 'Innovations in Sustainable Building Materials',
            'slug'            => 'innovations-sustainable-building-materials',
            'category'        => 'sustainability',
            'excerpt'         => 'From recycled aggregates to green concrete, discover the latest sustainable materials transforming modern construction.',
            'content'         => '',
            'image'           => '/service/im3.jpg',
            'author'          => 'Eng. Jane Mwangi',
            'author_position' => 'Head of Sustainability',
            'author_image'    => '/service/im3.jpg',
            'published_at'    => 'March 15, 2025',
            'read_time'       => '6 min read',
            'featured'        => false,
        ],
        [
            'id'              => 3,
            'title'           => 'Best Practices for Construction Site Safety',
            'slug'            => 'construction-site-safety-best-practices',
            'category'        => 'safety-protocols',
            'excerpt'         => 'Safety on site is non-negotiable. Learn the top protocols and training methods to keep every worker safe.',
            'content'         => '',
            'image'           => 'images/blog/site-safety.jpg',
            'author'          => 'Eng. Robert Keller',
            'author_position' => 'HSE Manager',
            'author_image'    => 'images/team/hse.jpg',
            'published_at'    => 'March 1, 2025',
            'read_time'       => '5 min read',
            'featured'        => false,
        ],
        [
            'id'              => 4,
            'title'           => 'Heritage Building Restoration Techniques',
            'slug'            => 'heritage-building-restoration-techniques',
            'category'        => 'heritage-renovation',
            'excerpt'         => 'Restoring historic structures requires a delicate balance of preservation and modern standards. Explore proven restoration methods.',
            'content'         => '',
            'image'           => 'images/blog/heritage-restoration.jpg',
            'author'          => 'Eng. Fatima Hassan',
            'author_position' => 'Conservation Lead',
            'author_image'    => 'images/team/conservation.jpg',
            'published_at'    => 'February 20, 2025',
            'read_time'       => '8 min read',
            'featured'        => false,
        ],
        [
            'id'              => 5,
            'title'           => 'Turnkey Project Management: End-to-End Delivery',
            'slug'            => 'turnkey-project-management',
            'category'        => 'turnkey-solutions',
            'excerpt'         => 'Delivering complete turnkey projects demands seamless coordination. We outline our integrated approach from planning through handover.',
            'content'         => '',
            'image'           => 'images/blog/turnkey-management.jpg',
            'author'          => 'Eng. David Odhiambo',
            'author_position' => 'Project Director',
            'author_image'    => 'images/team/project-director.jpg',
            'published_at'    => 'January 22, 2025',
            'read_time'       => '9 min read',
            'featured'        => false,
        ],
        [
            'id'              => 6,
            'title'           => 'Integrating Solar Energy in New Developments',
            'slug'            => 'integrating-solar-energy-developments',
            'category'        => 'sustainability',
            'excerpt'         => 'Harnessing solar power on-site reduces carbon footprint. Learn how to incorporate photovoltaic systems into construction designs.',
            'content'         => '',
            'image'           => 'images/blog/solar-integration.jpg',
            'author'          => 'Eng. Sophia Martinez',
            'author_position' => 'Renewables Lead',
            'author_image'    => 'images/team/renewables.jpg',
            'published_at'    => 'January 10, 2025',
            'read_time'       => '7 min read',
            'featured'        => false,
        ],
        [
            'id'              => 7,
            'title'           => 'Soil Stabilization Techniques for Infrastructure',
            'slug'            => 'soil-stabilization-methods-infrastructure',
            'category'        => 'infrastructure',
            'excerpt'         => 'Strong foundations start with stable soil. We review mechanical and chemical stabilization methods for major infrastructure works.',
            'content'         => '',
            'image'           => '/service/im4.jpg',
            'author'          => 'Eng. Michael Thompson',
            'author_position' => 'Chief Engineer',
            'author_image'    => '/service/im2.jpg',
            'published_at'    => 'December 28, 2024',
            'read_time'       => '8 min read',
            'featured'        => false,
        ],
        [
            'id'              => 8,
            'title'           => 'Effective Stakeholder Communication in Construction',
            'slug'            => 'stakeholder-communication-construction',
            'category'        => 'project-updates',
            'excerpt'         => 'Transparent communication keeps projects on track. Discover tools and techniques for engaging clients, regulators, and communities.',
            'content'         => '',
            'image'           => '/service/im3.jpg',
            'author'          => 'Eng. Jennifer Wu',
            'author_position' => 'Client Relations Director',
            'author_image'    => 'public/service/im2.jpg',
            'published_at'    => 'December 15, 2024',
            'read_time'       => '6 min read',
            'featured'        => false,
        ],
        [
            'id'              => 9,
            'title'           => 'Lean Construction: Reducing Waste & Boosting Efficiency',
            'slug'            => 'lean-construction-waste-reduction',
            'category'        => 'engineering-insights',
            'excerpt'         => 'Lean principles help minimize waste and improve workflow. We outline how to apply lean methods on site for better outcomes.',
            'content'         => '',
            'image'           => '/service/im2.jpg',
            'author'          => 'Eng. Thomas Wright',
            'author_position' => 'Operations Manager',
            'author_image'    => 'images/team/operations.jpg',
            'published_at'    => 'November 30, 2024',
            'read_time'       => '7 min read',
            'featured'        => false,
        ],
        [
            'id'              => 10,
            'title'           => 'Advances in High-Performance Concrete',
            'slug'            => 'advances-concrete-technology',
            'category'        => 'engineering-insights',
            'excerpt'         => 'From self-healing mixes to ultra-high strength formulations, explore the latest concrete innovations enhancing durability.',
            'content'         => '',
            'image'           => '/service/im2.jpg',
            'author'          => 'Eng. Sarah Johnson',
            'author_position' => 'Materials Specialist',
            'author_image'    => 'images/team/materials.jpg',
            'published_at'    => 'November 15, 2024',
            'read_time'       => '8 min read',
            'featured'        => false,
        ],
        [
            'id'              => 11,
            'title'           => 'Hydrological Considerations in Civil Engineering',
            'slug'            => 'hydrological-considerations-civil',
            'category'        => 'infrastructure',
            'excerpt'         => 'Water flow and drainage design are critical. We discuss modeling techniques and best practices for infrastructure resilience.',
            'content'         => '',
            'image'           => '/service/im2.jpg',
            'author'          => 'Eng. Catherine Yang',
            'author_position' => 'Technical Advisor',
            'author_image'    => '/service/im2.jpg',
            'published_at'    => 'October 30, 2024',
            'read_time'       => '9 min read',
            'featured'        => false,
        ],
        [
            'id'              => 12,
            'title'           => 'Disaster Resilience in Building Design',
            'slug'            => 'disaster-resilience-building-design',
            'category'        => 'sustainability',
            'excerpt'         => 'Designing for earthquakes, floods, and storms is essential. Learn strategies to enhance structural resilience against natural disasters.',
            'content'         => '',
            'image'           => '/service/im2.jpg',
            'author'          => 'Eng. Richard Blackwell',
            'author_position' => 'Economic & Climate Advisor',
            'author_image'    => 'images/team/economic-advisor.jpg',
            'published_at'    => 'October 15, 2024',
            'read_time'       => '10 min read',
            'featured'        => false,
        ],
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
