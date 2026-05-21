<?php

return [
    'site_title' => 'Portfolio.',
    'profile' => [
        'name'         => 'Muhammad Diansyah Dwi Putra',  
        'role'         => 'Full Stack Developer',    
        'photo'        => '/images/profile.jpg',     
        'bio'          => 'Software developer focused on building clean, modern web applications.',
        'location'     => 'Jakarta, Indonesia',      
        'availability' => 'Open to work',
        'experience'   => '2+ years learning',
        'skills'       => ['Laravel', 'PHP', 'Tailwind', 'MySQL', 'JavaScript'],
    ],

    'about' => [
        'story' => 'I am a web developer focused on building modern, scalable web applications using Laravel and JavaScript. I enjoy designing clean UI and transforming ideas into functional products that actually solve problems.',
        'learning_since' => '2024',
        'specialization' => 'Backend & Web Development',
        'career_goal' => 'Become a professional full stack developer',
        'currently_building' => 'Aviation Atlas — community aviation platform',
    ],

    'skills' => [
        'categories' => [
            [
                'name'  => 'Frontend',
                'items' => ['HTML', 'CSS', 'Tailwind CSS', 'JavaScript', 'Alpine.js'],
            ],
            [
                'name'  => 'Backend',
                'items' => ['PHP', 'Laravel', 'REST API'],
            ],
            [
                'name'  => 'Database',
                'items' => ['MySQL', 'SQLite'],
            ],
            [
                'name'  => 'Tools',
                'items' => ['Git', 'GitHub', 'VS Code', 'Postman'],
            ],
        ],
        
        'proficiency' => [
            ['name' => 'Laravel',    'pct' => 85],
            ['name' => 'PHP',        'pct' => 80],
            ['name' => 'Tailwind CSS','pct' => 88],
            ['name' => 'JavaScript', 'pct' => 65],
            ['name' => 'MySQL',      'pct' => 75],
        ],
    ],

    'stats' => [
        ['number' => '4',  'suffix' => '+', 'label' => 'Projects Built'],
        ['number' => '8',  'suffix' => '+', 'label' => 'Technologies Learned'],
        ['number' => '20', 'suffix' => '+', 'label' => 'GitHub Repositories'],
        ['number' => '2',  'suffix' => '',  'label' => 'Years Learning'],
    ],

    'education' => [
        [
            'title'       => 'SMKN 6 Jakarta',               
            'description' => 'Software Development Major (RPL)',
            'year'        => '2024 – 2027',                   
            'note'        => 'Focused on web development, databases, and software engineering fundamentals.',
        ],
    ],

    'experience_timeline' => [
        [
            'year'        => '2024',
            'title'       => 'Started learning Web Development',
            'description' => 'Began exploring HTML, CSS, and PHP fundamentals. Built my first static websites and simple dynamic pages.',
            'highlight'   => '',  
        ],
        [
            'year'        => '2025',
            'title'       => 'Built multiple Laravel web applications',
            'description' => 'Developed real-world projects including a library management system, a PC components marketplace, and a temperature converter tool.',
            'highlight'   => 'Library System & PC Marketplace launched',
        ],
        [
            'year'        => '2026',
            'title'       => 'Developing Aviation Atlas',
            'description' => 'Working on a community aviation platform featuring an aircraft museum database with country and manufacturer filtering.',
            'highlight'   => 'Aviation Atlas — in active development',
        ],
    ],

    'projects' => [
        [
            'title'       => 'Aviation Atlas',
            'image'       => '/images/projects/aviation-atlas.jpg', 
            'description' => 'A community aviation platform with a comprehensive aircraft museum database. Users can browse by country, manufacturer, and aircraft type.',
            'tag'         => 'Community Platform',
            'stack'       => ['Laravel', 'MySQL', 'Tailwind CSS', 'Alpine.js'],
            'features'    => [
                'Aircraft database with 100+ entries',
                'Filter by country and manufacturer',
                'Aircraft manufacturer catalog',
            ],
            'demo'        => '#',                                     
            'github'      => 'https://github.com/username/aviation-atlas', 
        ],
        [
            'title'       => 'Library System',
            'image'       => '/images/projects/library-system.jpg',
            'description' => 'A web-based book lending and management platform. Librarians can manage inventory, track loans, and handle member registrations.',
            'tag'         => 'Management System',
            'stack'       => ['Laravel', 'MySQL', 'Bootstrap'],
            'features'    => [
                'Book inventory management',
                'Loan tracking system',
                'Member management',
            ],
            'demo'        => '#',
            'github'      => 'https://github.com/username/library-system',
        ],
        [
            'title'       => 'PC Parts Marketplace',
            'image'       => '/images/projects/pc-marketplace.jpg',
            'description' => 'A buy and sell platform for PC components. Listings include specs, pricing, and condition ratings for each part.',
            'tag'         => 'E-Commerce',
            'stack'       => ['Laravel', 'MySQL', 'Tailwind CSS'],
            'features'    => [
                'Component listing with specs',
                'Category filtering',
                'Seller & buyer system',
            ],
            'demo'        => '#',
            'github'      => 'https://github.com/username/pc-marketplace',
        ],
        [
            'title'       => 'Temperature Converter',
            'image'       => '/images/projects/temperature-converter.jpg',
            'description' => 'A clean, real-time temperature converter supporting Celsius, Fahrenheit, Kelvin, and Rankine with instant conversion.',
            'tag'         => 'Utility Tool',
            'stack'       => ['Laravel', 'JavaScript', 'Tailwind CSS'],
            'features'    => [
                'Real-time conversion',
                'Support for 4 units',
                'Clean minimal UI',
            ],
            'demo'        => '#',
            'github'      => 'https://github.com/username/temperature-converter',
        ],
        [
            'title'       => 'Skyport',
            'image'       => '/images/projects/skyport.jpg',
            'description' => 'A modern airport management system with real-time flight tracking and passenger services.',
            'tag'         => 'Management System',
            'stack'       => ['Laravel', 'PHP', 'Tailwind CSS'],
            'features'    => [
                'Flexible airport database',
                'Search by location and services',
                'Clean minimal UI',
            ],
            'demo'        => '#',
            'github'      => 'https://github.com/username/skyport',
        ],
        [
            'title'       => 'Weather Forecast App',
            'image'       => '/images/projects/weather-forecast.jpg',
            'description' => 'A modern weather forecasting application providing real-time updates and detailed predictions for various locations.',
            'tag'         => 'Utility Tool',
            'stack'       => ['Laravel', 'JavaScript', 'Tailwind CSS'],
            'features'    => [
                'Real-time weather updates',
                'Detailed forecasts',
                'Clean minimal UI',
            ],
            'demo'        => '#',
            'github'      => 'https://github.com/username/weather-forecast',
        ],
    ],

    'contact' => [
        'email'            => 'dnsxyh@gmail.com',        
        'github'           => 'https://github.com/username',    
        'github_display'   => 'github.com/username',
        'linkedin'         => 'https://linkedin.com/in/username', 
        'linkedin_display' => 'linkedin.com/in/username',
        'whatsapp'         => '',                                  
        'whatsapp_display' => '',
    ],

    'certificates' => [
        [
            'title'          => 'LKS Web Technologies',             
            'issuer'         => 'Dinas Pendidikan DKI Jakarta',     
            'category'       => 'Web Development',
            'year'           => '2025',
            'level'          => 'Tingkat Kota',
            'place'          => '2nd',                              
            'team'           => 'Individual',
            'image'          => '/images/certificates/lks-web-2025.jpg', 
            'description'    => 'Competed in the Web Technologies category of LKS (Lomba Kompetensi Siswa) at the city level, building a full-stack web application within a timed competition.',
            'credential_url' => '',
        ],
        [
            'title'          => 'Hackathon Pelajar Jakarta',
            'issuer'         => 'BPSDM DKI Jakarta',
            'category'       => 'Hackathon',
            'year'           => '2025',
            'level'          => 'Tingkat Provinsi',
            'place'          => 'Finalist',
            'team'           => 'Team of 3',
            'image'          => '/images/certificates/hackathon-jakarta-2025.jpg',
            'description'    => 'Developed a prototype smart city application addressing urban transportation problems during a 24-hour hackathon.',
            'credential_url' => '',
        ],
        [
            'title'          => 'Competitive Programming — IT Fair',
            'issuer'         => 'Universitas Bina Nusantara',
            'category'       => 'Programming',
            'year'           => '2024',
            'level'          => 'Tingkat Nasional',
            'place'          => 'Participant',
            'team'           => 'Individual',
            'image'          => '/images/certificates/itfair-programming-2024.jpg',
            'description'    => 'Participated in the competitive programming track at the annual IT Fair, solving algorithmic challenges across multiple rounds.',
            'credential_url' => '',
        ],
    ],

    'socials' => [
        'github'   => 'https://github.com/username',
        'linkedin' => '',
        'email'    => 'your.email@example.com',
    ],

];