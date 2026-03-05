<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Site Settings
    |--------------------------------------------------------------------------
    */
    'site_title' => 'Portfolio.',

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */
    'profile' => [
        'name'         => 'Your Name',
        'role'         => 'Full Stack Developer',
        'photo'        => '/images/profile.jpg',  // place in public/images/
        'bio'          => 'I build clean, thoughtful digital experiences. Passionate about modern web systems, great UI, and scalable architecture.',
        'location'     => 'Jakarta, Indonesia',
        'availability' => 'Open to work',
        'experience'   => '2+ years experience',
        'skills'       => ['Laravel', 'Vue.js', 'Tailwind', 'MySQL', 'REST API'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Education
    |--------------------------------------------------------------------------
    */
    'education' => [
        [
            'title'       => 'SMKN 6 Jakarta',
            'description' => 'Software Development Major (RPL)',
            'year'        => '2021 – 2024',
            'note'        => 'Focused on web development and software engineering fundamentals.',
        ],
        // Add more entries here
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'title'       => 'Library System',
            'image'       => '/images/project1.jpg',
            'description' => 'A web-based book lending and management platform built with Laravel.',
            'link'        => '#',
            'tag'         => 'Laravel',
        ],
        [
            'title'       => 'PC Marketplace',
            'image'       => '/images/project2.jpg',
            'description' => 'Buy & sell PC components with a clean, modern storefront interface.',
            'link'        => '#',
            'tag'         => 'E-Commerce',
        ],
        // Add more projects here
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Links (leave empty string to hide)
    |--------------------------------------------------------------------------
    */
    'socials' => [
        'github'   => 'https://github.com/di4nsyah',
        'linkedin' => '',
        'email'    => '',
    ],

];
