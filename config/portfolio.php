<?php

return [

    'site_title' => 'Portfolio by Di4nsyah',

    'profile' => [
        'name'         => 'Muhammad Diansyah Dwi Putra',
        'role'         => 'Web Developer and UI/UX Designer',
        'photo'        => '/images/profile.jpg',
        'bio'          => 'I build clean, modern web systems, great UI, and scalable architecture.',
        'location'     => 'Jakarta, Indonesia',
        'availability' => 'Open to new opportunities',
        'experience'   => '2 years in class',
        'skills'       => ['Laravel', 'PHP', 'Tailwind', 'MySQL', 'Git', 'React'],
    ],

    'about' => [
        'story' => 'I started my programming journey in 2023 while finishing my Junior High School. I found myself enjoyed coding and programming, and decided to pursue it further. I am currently a student at SMKN 6 Jakarta, majoring in Software Development (RPL). I have experience building web applications using Laravel and React, and I am passionate about creating clean, modern, brutalist, and user-friendly interfaces',
        'learning_since' => '2023',
        'specialization' => 'Web Development and UI/UX Design',
        'career_goal' => 'To become a full-stack developer and contribute to open-source projects',
        'currently_building' => 'A personal portfolio website to showcase my projects and skills',
    ],

    'skills' => [
        'categories' => [
            [
                'name' => 'Frontend',
                'items' => ['HTML', 'CSS', 'Tailwind', 'JavaScript', 'React'],
            ],
            [
                'name' => 'Backend',
                'items' => ['PHP', 'Laravel', 'MySQL', 'Git'],
            ],
            [
                'name' => 'Database',
                'items' => ['MySQL'],
            ],
            [
                'name' => 'Tools',
                'items' => ['Visual Studio', 'DreamWeaver', 'Git', 'Postman', 'VS Code', 'Github',],
            ],
        ],

        'proficiency' => [
            ['name' => 'Laravel',       'pct' => 40],
            ['name' => 'PHP',           'pct' => 70],
            ['name' => 'Tailwind CSS',  'pct' => 88],
            ['name' => 'JavaScript',    'pct' => 65],
            ['name' => 'MySQL',         'pct' => 75],
        ],
    ],

    'stats' => [
        ['number' => '4', 'suffix' => '+', 'label' => 'Projects Built'],
        ['number' => '12', 'suffix' => '+', 'label' => 'Technologies Learned'],
        ['number' => '7', 'suffix' => '+', 'label' => 'Github Repositories'],
        ['number' => '3', 'suffix' => '', 'label' => 'Years Learning'],
    ],

    'education' => [
        [
            'title'       => 'SMKN 6 Jakarta',
            'description' => 'Software Development Major (RPL)',
            'year'        => '2024 – 2027',
            'note'        => 'Focused on web development and software engineering fundamentals.',
        ],
    ],

    'experience_timeline' => [
        [
            'year'        => '2024',
            'title'       => 'Started learning Web Development',
            'description' => 'Began exploring HTML, CSS, and PHP fundamentals. Built my first static websites and simple dynamic pages.',
            'highlight'   => 'Accepted Into SMKN 6 Jakarta Software Development Major (RPL)',
        ],
        [
            'year'        => '2025',
            'title'       => 'Built UI/UX Focused Project',
            'description' => 'Began deep learning about UI/UX design principles and developed my own design styles inspired by simplistic and modern aesthetics.',
            'highlight'   => 'Winning 1st Place in High School Frontend competition held by Faculty Of Computer Science University of Indonesia as head designer',
        ],
        [
            'year'        => '2026',
            'title'       => 'Focused more on Backend Development',
            'description' => 'Started learning Laravel and building more complex web applications with database integration and API development.',
            'highlight'   => 'Contributed to small open-source Laravel packages and built a personal project using Laravel and React.',
        ],
    ],

    'projects' => [
        [
            'title'       => 'Aviation Atlas',
            'image'       => '/images/projects/aviation-atlas.jpg',
            'description' => 'A community aviation platform with a comprehensive aircraft museum database. Users can browse by country, manufacturer, and aircraft type.',
            'tag'         => 'Community Platform',
            'stack'       => ['HTML', 'CSS', 'JavaScript', 'Tailwind CSS'],
            'features'    => [
                'Aircraft database with 100+ entries',
                'Filter by country and manufacturer',
                'Aircraft manufacturer catalog',
            ],
        ],
        [
            'title'       => 'School Cafetaria System',
            'image'       => '/images/projects/cafetaria-system.jpg',
            'description' => 'A web-based cafetaria menu management platform. System can manage menu, price, and CRUD.',
            'tag'         => 'Management System',
            'stack'       => ['HTML', 'JavaScript', 'Tailwind CSS'],
            'features'    => [
                'Cafetaria management',
                'Menu and pricing management',
                'CRUD operations for menu items',
            ],
            'github'      => 'https://github.com/di4nsyah/KantinSMKN',
        ],
        [
            'title'       => 'Circuit Central',
            'image'       => '/images/projects/pc-marketplace.jpg',
            'description' => 'A buy and sell platform for PC components. Listings include specs, pricing, and condition ratings for each part.',
            'tag'         => 'E-Commerce',
            'stack'       => ['HTML', 'MySQL', 'Tailwind CSS'],
            'features'    => [
                'Component listing with specs',
                'Category filtering',
                'Seller & buyer system',
            ],
            'github'      => 'https://github.com/di4nsyah/CircuitCentral',
        ],
        [
            'title'       => 'Tempswift',
            'image'       => '/images/projects/temperature-converter.jpg',
            'description' => 'A clean, real-time temperature converter supporting Celsius, Fahrenheit, and Kelvin with instant conversion.',
            'tag'         => 'Utility Tool',
            'stack'       => ['HTML', 'JavaScript', 'Tailwind CSS'],
            'features'    => [
                'Real-time conversion',
                'Support for 3 units',
                'Clean minimal UI',
            ],
            'demo'        => 'https://di4nsyah.github.io/Tempswift/',
            'github'      => 'https://github.com/di4nsyah/Tempswift',
        ],
        [
            'title'       => 'Climora',
            'image'       => '/images/projects/temperature-converter.jpg',
            'description' => 'A weather forecast with sleek and modern design, real-time weather forecast using the OpenWeather API.',
            'tag'         => 'Utility Tool',
            'stack'       => ['HTML', 'JavaScript', 'Tailwind CSS'],
            'features'    => [
                'Real-time conversion',
                'Support for 4 units',
                'Clean minimal UI',
            ],
            'demo'        => 'https://di4nsyah.github.io/Climora/',
            'github'      => 'https://github.com/di4nsyah/Climora',
        ],
    ],

    'contact' => [
        'email'            => 'dnsxyh@gmail.com',           
        'github'           => 'https://github.com/di4nsyah',    
        'github_display'   => 'github.com/di4nsyah',
        'linkedin'         => 'https://linkedin.com/in/username', 
        'linkedin_display' => 'linkedin.com/in/username',
    ],

    'socials' => [
        'github'   => 'https://github.com/di4nsyah',
        'linkedin' => '',
        'email'    => '',
    ],

];
