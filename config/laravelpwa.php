<?php

return [
    'name' => 'APP GESTISS',
    'manifest' => [
        'name' => env('APP_NAME', 'APP GESTISS'),
        'short_name' => 'GESTISS',
        'id' => '/painel',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#0274A7',
        'display' => 'standalone',
        'orientation' => 'any',
        'status_bar' => 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/icon-72x72.svg',
                'purpose' => 'any maskable'
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.svg',
                'purpose' => 'any maskable'
            ],
            '128x128' => [
                'path' => '/images/icons/icon-128x128.svg',
                'purpose' => 'any maskable'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.svg',
                'purpose' => 'any maskable'
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152x152.svg',
                'purpose' => 'any maskable'
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.svg',
                'purpose' => 'any maskable'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-384x384.svg',
                'purpose' => 'any maskable'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.svg',
                'purpose' => 'any maskable'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-640x1136.svg',
            '750x1334' => '/images/icons/splash-750x1334.svg',
            '828x1792' => '/images/icons/splash-828x1792.svg',
            '1125x2436' => '/images/icons/splash-1125x2436.svg',
            '1242x2208' => '/images/icons/splash-1242x2208.svg',
            '1242x2688' => '/images/icons/splash-1242x2688.svg',
            '1536x2048' => '/images/icons/splash-1536x2048.svg',
            '1668x2224' => '/images/icons/splash-1668x2224.svg',
            '1668x2388' => '/images/icons/splash-1668x2388.svg',
            '2048x2732' => '/images/icons/splash-2048x2732.svg',
        ],
        'shortcuts' => [
            [
                'name' => 'Agendamentos',
                'description' => 'Acesso aos agendamentos de atendimento',
                'url' => '/agendamentos',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.svg",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Atendimentos',
                'description' => 'Acesso aos atendimentos realizados',
                'url' => '/atendimentos',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.svg",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Medicamentos',
                'description' => 'Acesso aos medicamentos receitados',
                'url' => '/presricoes',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.svg",
                    "purpose" => "any"
                ]
            ]
        ],
        'custom' => []
    ]
];
