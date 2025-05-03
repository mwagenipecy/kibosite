<?php

namespace App\Livewire;

use Livewire\Component;

class TeamPage extends Component
{


    public $activeCategory = 'all';

   // In your Livewire component

public $teamCategories = [
    'all'                => 'All Experts',
    'leadership'         => 'Leadership',
    'engineering'        => 'Engineering',
    'project_management' => 'Project Management',
    'safety'             => 'Safety',
    'quality'            => 'Quality Assurance',
    'procurement'        => 'Procurement',
];

public $filteredTeamMembers   = [];
public $selectedMember        = null;

public $teamMembers = [
    [
        'id'         => 1,
        'name'       => 'Eng. Edmund Urussa',
        'position'   => 'Managing Director',
        'category'   => 'leadership',
        'image'      => 'images/team/edmund-urussa.jpg',
        'bio'        => 'As Managing Director, Eng. Edmund Urussa leads Kibo Capital Limited with integrity and vision. With over 20 years of civil engineering experience, he ensures every project meets the highest standards.',
        'education'  => [
            'University of Dar es Salaam, BEng Civil Engineering',
            'Chartered Engineer (CEng)'
        ],
        'expertise'  => [
            'Strategic Leadership',
            'Business Development',
            'Client Relations'
        ],
        'linkedin'   => 'https://linkedin.com/in/edmund-urussa',
        'email'      => 'edmund.urussa@kibocapital.com',
    ],
    [
        'id'         => 2,
        'name'       => 'Eng. Aisha Mbwana',
        'position'   => 'Head of Civil Engineering',
        'category'   => 'engineering',
        'image'      => 'images/team/aisha-mbwana.jpg',
        'bio'        => 'Eng. Aisha Mbwana oversees all civil engineering design and execution, bringing an MSc in Structural Engineering and 15 years of infrastructure project leadership.',
        'education'  => [
            'University of Nairobi, MSc Structural Engineering',
            'Technical University of Kenya, BEng Civil Engineering'
        ],
        'expertise'  => [
            'Structural Analysis',
            'Geotechnical Engineering',
            'Infrastructure Planning'
        ],
        'linkedin'   => 'https://linkedin.com/in/aisha-mbwana',
        'email'      => 'aisha.mbwana@kibocapital.com',
    ],
    [
        'id'         => 3,
        'name'       => 'Eng. John Kimaro',
        'position'   => 'Head of Building Projects',
        'category'   => 'project_management',
        'image'      => 'images/team/john-kimaro.jpg',
        'bio'        => 'Eng. John Kimaro manages our building projects portfolio, ensuring timely delivery and budget adherence. He holds a PMP certification and has delivered high-rise and commercial developments.',
        'education'  => [
            'Strathmore University, BEng Civil Engineering',
            'PMP® – Project Management Institute'
        ],
        'expertise'  => [
            'Project Scheduling',
            'Cost Control',
            'Contract Administration'
        ],
        'linkedin'   => 'https://linkedin.com/in/john-kimaro',
        'email'      => 'john.kimaro@kibocapital.com',
    ],
    [
        'id'         => 4,
        'name'       => 'Ms. Grace Mwinyi',
        'position'   => 'Safety Manager',
        'category'   => 'safety',
        'image'      => 'images/team/grace-mwinyi.jpg',
        'bio'        => 'Grace Mwinyi implements and audits our HSE programs, maintaining zero-incident performance across multiple sites. She is NEBOSH certified and brings over 10 years in construction safety.',
        'education'  => [
            'NEBOSH International Diploma',
            'Kilimo Institute, Diploma in Occupational Health & Safety'
        ],
        'expertise'  => [
            'Risk Assessment',
            'Safety Auditing',
            'Training & Compliance'
        ],
        'linkedin'   => 'https://linkedin.com/in/grace-mwinyi',
        'email'      => 'grace.mwinyi@kibocapital.com',
    ],
    [
        'id'         => 5,
        'name'       => 'Ms. Sophia Juma',
        'position'   => 'Quality Assurance Manager',
        'category'   => 'quality',
        'image'      => 'images/team/sophia-juma.jpg',
        'bio'        => 'Sophia Juma leads our QA/QC processes, ensuring materials and workmanship exceed industry standards. She holds ISO 9001 Lead Auditor certification.',
        'education'  => [
            'University of Cape Town, BSc Construction Management',
            'ISO 9001 Lead Auditor'
        ],
        'expertise'  => [
            'Quality Control',
            'Process Improvement',
            'Supplier Audits'
        ],
        'linkedin'   => 'https://linkedin.com/in/sophia-juma',
        'email'      => 'sophia.juma@kibocapital.com',
    ],
    [
        'id'         => 6,
        'name'       => 'Mr. David Odhiambo',
        'position'   => 'Project Manager',
        'category'   => 'project_management',
        'image'      => 'images/team/david-odhiambo.jpg',
        'bio'        => 'David Odhiambo coordinates multi-disciplinary teams and stakeholder communications, delivering projects on schedule. He is a Certified ScrumMaster and an expert in agile construction workflows.',
        'education'  => [
            'University of Pretoria, MSc Construction Management',
            'Certified ScrumMaster (CSM)'
        ],
        'expertise'  => [
            'Agile Project Delivery',
            'Stakeholder Engagement',
            'Resource Planning'
        ],
        'linkedin'   => 'https://linkedin.com/in/david-odhiambo',
        'email'      => 'david.odhiambo@kibocapital.com',
    ],
    [
        'id'         => 7,
        'name'       => 'Mr. Abdallah Suleiman',
        'position'   => 'Procurement Manager',
        'category'   => 'procurement',
        'image'      => 'images/team/abdallah-suleiman.jpg',
        'bio'        => 'Abdallah Suleiman manages our supply chain and vendor relationships, optimizing costs and delivery timelines. He holds a diploma in Supply Chain Management.',
        'education'  => [
            'Institute of Supply Chain Management (Tanzania), Diploma SCM'
        ],
        'expertise'  => [
            'Contract Negotiation',
            'Vendor Management',
            'Logistics Coordination'
        ],
        'linkedin'   => 'https://linkedin.com/in/abdallah-suleiman',
        'email'      => 'abdallah.suleiman@kibocapital.com',
    ],
    [
        'id'         => 8,
        'name'       => 'Ms. Rosa Kambarage',
        'position'   => 'Director of Client Relations',
        'category'   => 'leadership',
        'image'      => 'images/team/rosa-kambarage.jpg',
        'bio'        => 'Rosa Kambarage ensures clear communication and client satisfaction across all projects. She has 12 years in client services and holds a certificate in Client Experience Management.',
        'education'  => [
            'University of Dar es Salaam, BA Communications',
            'CX Institute, Certificate in Client Experience'
        ],
        'expertise'  => [
            'Stakeholder Management',
            'Client Communications',
            'Service Design'
        ],
        'linkedin'   => 'https://linkedin.com/in/rosa-kambarage',
        'email'      => 'rosa.kambarage@kibocapital.com',
    ],
    [
        'id'         => 9,
        'name'       => 'Mr. James Njenga',
        'position'   => 'Senior Estimator',
        'category'   => 'project_management',
        'image'      => 'images/team/james-njenga.jpg',
        'bio'        => 'James Njenga leads cost estimation and budgeting, leveraging 10 years of experience to deliver accurate, competitive bids.',
        'education'  => [
            'Moi University, BSc Quantity Surveying'
        ],
        'expertise'  => [
            'Cost Estimation',
            'Budgeting',
            'Tender Preparation'
        ],
        'linkedin'   => 'https://linkedin.com/in/james-njenga',
        'email'      => 'james.njenga@kibocapital.com',
    ],
    [
        'id'         => 10,
        'name'       => 'Ms. Leila Hassan',
        'position'   => 'HSE Officer',
        'category'   => 'safety',
        'image'      => 'images/team/leila-hassan.jpg',
        'bio'        => 'Leila Hassan implements health, safety, and environmental protocols, ensuring compliance on all sites. She is NEBOSH certified.',
        'education'  => [
            'NEBOSH International Certificate',
            'Ardhi University, Diploma in Health & Safety'
        ],
        'expertise'  => [
            'Health & Safety Management',
            'Environmental Compliance',
            'Emergency Response'
        ],
        'linkedin'   => 'https://linkedin.com/in/leila-hassan',
        'email'      => 'leila.hassan@kibocapital.com',
    ],
];

    


    
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
