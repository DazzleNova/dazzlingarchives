<?php

return [
    'production' => false,
    'baseUrl' => 'https://dazzlingarchives.netlify.app',
    'site' => [
        'title' => 'Dazzling Archives',
        'description' => 'My archive of art and stuff',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'DazzlingGleam',
    ],
    'links' => [
        'Website' => 'https://dazzlinggleam.space',
        'Misskey' => 'https://misskey.io/@dazzle',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => '/',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'dnefy52id',
            'apiKey' => '871764842329746',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
