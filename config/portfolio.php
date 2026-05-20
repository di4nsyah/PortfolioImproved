<?php

return [

    /*
    |══════════════════════════════════════════
    | Site Settings
    |══════════════════════════════════════════
    */
    'site_title' => 'Portfolio.',

    /*
    |══════════════════════════════════════════
    | Profile
    | ↳ Ditampilkan di hero, sidebar, dan footer
    |══════════════════════════════════════════
    */
    'profile' => [
        'name'         => 'Your Name',               // ← Ganti nama kamu
        'role'         => 'Full Stack Developer',    // ← Ganti role / jabatan
        'photo'        => '/images/profile.jpg',     // ← Taruh foto di public/images/
        'bio'          => 'Software developer focused on building clean, modern web applications.',
        'location'     => 'Jakarta, Indonesia',      // ← Ganti kota
        'availability' => 'Open to work',
        'experience'   => '2+ years learning',
        'skills'       => ['Laravel', 'PHP', 'Tailwind', 'MySQL', 'JavaScript'],
    ],

    /*
    |══════════════════════════════════════════
    | About Me (Mini Story)
    | ↳ Muncul di halaman Biodata — section "About Me"
    |══════════════════════════════════════════
    */
    'about' => [
        // Cerita singkat tentang diri kamu (1-3 kalimat)
        'story' => 'I am a web developer focused on building modern, scalable web applications using Laravel and JavaScript. I enjoy designing clean UI and transforming ideas into functional products that actually solve problems.',

        // Kapan mulai belajar coding
        'learning_since' => '2024',

        // Bidang utama yang kamu kuasai
        'specialization' => 'Backend & Web Development',

        // Tujuan karir kamu
        'career_goal' => 'Become a professional full stack developer',

        // Apa yang sedang kamu kerjakan sekarang
        'currently_building' => 'Aviation Atlas — community aviation platform',
    ],

    /*
    |══════════════════════════════════════════
    | Skills
    | ↳ Muncul di halaman Biodata — section "Skills"
    |══════════════════════════════════════════
    */
    'skills' => [

        // Kategori skill (tampil sebagai card dengan tag)
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

        // Skill bars (tampil dengan progress bar animasi)
        // Ganti angka 'pct' sesuai dengan kemampuan kamu (0-100)
        'proficiency' => [
            ['name' => 'Laravel',    'pct' => 85],
            ['name' => 'PHP',        'pct' => 80],
            ['name' => 'Tailwind CSS','pct' => 88],
            ['name' => 'JavaScript', 'pct' => 65],
            ['name' => 'MySQL',      'pct' => 75],
        ],
    ],

    /*
    |══════════════════════════════════════════
    | Stats
    | ↳ Muncul di halaman Biodata — section "By the numbers"
    |══════════════════════════════════════════
    */
    'stats' => [
        ['number' => '4',  'suffix' => '+', 'label' => 'Projects Built'],
        ['number' => '8',  'suffix' => '+', 'label' => 'Technologies Learned'],
        ['number' => '20', 'suffix' => '+', 'label' => 'GitHub Repositories'],
        ['number' => '2',  'suffix' => '',  'label' => 'Years Learning'],
    ],

    /*
    |══════════════════════════════════════════
    | Education
    | ↳ Muncul di halaman Education — section atas
    |══════════════════════════════════════════
    */
    'education' => [
        [
            'title'       => 'SMKN 6 Jakarta',               // ← Ganti nama sekolah
            'description' => 'Software Development Major (RPL)',
            'year'        => '2021 – 2024',                   // ← Ganti tahun
            'note'        => 'Focused on web development, databases, and software engineering fundamentals.',
        ],
        // Tambah entry pendidikan lain di sini jika ada
    ],

    /*
    |══════════════════════════════════════════
    | Experience Timeline
    | ↳ Muncul di halaman Education — section bawah
    | ↳ Tidak harus pengalaman kerja — bisa milestone belajar
    |══════════════════════════════════════════
    */
    'experience_timeline' => [
        [
            'year'        => '2024',
            'title'       => 'Started learning Web Development',
            'description' => 'Began exploring HTML, CSS, and PHP fundamentals. Built my first static websites and simple dynamic pages.',
            'highlight'   => '',  // ← Isi dengan milestone/pencapaian, atau kosongkan
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
        // Tambah milestone berikutnya di sini
    ],

    /*
    |══════════════════════════════════════════
    | Projects
    | ↳ Muncul di halaman Projects — section atas
    |══════════════════════════════════════════
    */
    'projects' => [
        [
            'title'       => 'Aviation Atlas',
            'image'       => '/images/projects/aviation-atlas.jpg',  // ← Taruh screenshot di public/images/projects/
            'description' => 'A community aviation platform with a comprehensive aircraft museum database. Users can browse by country, manufacturer, and aircraft type.',
            'tag'         => 'Community Platform',
            'stack'       => ['Laravel', 'MySQL', 'Tailwind CSS', 'Alpine.js'],
            'features'    => [
                'Aircraft database with 100+ entries',
                'Filter by country and manufacturer',
                'Aircraft manufacturer catalog',
            ],
            'demo'        => '#',                                     // ← Ganti dengan URL demo
            'github'      => 'https://github.com/username/aviation-atlas', // ← Ganti URL GitHub
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
    ],

    /*
    |══════════════════════════════════════════
    | Contact
    | ↳ Muncul di halaman Projects — section Contact & CTA
    |══════════════════════════════════════════
    */
    'contact' => [
        'email'            => 'your.email@example.com',           // ← Ganti email
        'github'           => 'https://github.com/username',     // ← Ganti URL GitHub
        'github_display'   => 'github.com/username',
        'linkedin'         => 'https://linkedin.com/in/username', // ← Ganti URL LinkedIn (kosongkan jika tidak ada)
        'linkedin_display' => 'linkedin.com/in/username',
        'whatsapp'         => '',                                  // ← Isi nomor WA format: https://wa.me/62xxxxxxx
        'whatsapp_display' => '',
    ],

    /*
    |══════════════════════════════════════════
    | Certificates
    | ↳ Muncul di halaman Certificates
    |
    | Field yang tersedia:
    |   title          → nama lomba / event (wajib)
    |   issuer         → nama penyelenggara
    |   category       → label kategori (dipakai untuk filter tab)
    |   year           → tahun (misal: '2025')
    |   level          → tingkat (misal: 'Tingkat Kota', 'Nasional', dll)
    |   place          → hasil ('1st', '2nd', '3rd', 'Participant', 'Finalist', 'Winner')
    |   team           → nama tim / individu
    |   image          → path screenshot sertifikat: '/images/certificates/nama.jpg'
    |   description    → deskripsi singkat event (opsional)
    |   credential_url → link verifikasi online (opsional, kosongkan jika tidak ada)
    |══════════════════════════════════════════
    */
    'certificates' => [
        [
            'title'          => 'LKS Web Technologies',             // ← Ganti nama lomba
            'issuer'         => 'Dinas Pendidikan DKI Jakarta',     // ← Ganti penyelenggara
            'category'       => 'Web Development',
            'year'           => '2025',
            'level'          => 'Tingkat Kota',
            'place'          => '2nd',                              // ← '1st' / '2nd' / '3rd' / 'Participant' / 'Winner' / 'Finalist'
            'team'           => 'Individual',
            'image'          => '/images/certificates/lks-web-2025.jpg', // ← Taruh foto di public/images/certificates/
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
        // ─── Tambah sertifikat berikutnya di sini ───────────────────────
        // [
        //     'title'          => 'Nama Lomba',
        //     'issuer'         => 'Penyelenggara',
        //     'category'       => 'Kategori',
        //     'year'           => '2026',
        //     'level'          => 'Tingkat ...',
        //     'place'          => '1st',
        //     'team'           => 'Individual',
        //     'image'          => '/images/certificates/nama-file.jpg',
        //     'description'    => 'Deskripsi singkat.',
        //     'credential_url' => '',
        // ],
    ],

    /*
    |══════════════════════════════════════════
    | Social Links (sidebar)
    |══════════════════════════════════════════
    */
    'socials' => [
        'github'   => 'https://github.com/username',
        'linkedin' => '',
        'email'    => 'your.email@example.com',
    ],

];