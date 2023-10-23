<?php

require_once __DIR__ . '/core/bootstrap.php';

$pageContent = get_navbar_view(0)
    . get_site_view(
        'pages/index/main.php',
        [
            'pageIntroduction' => get_data('pageIntroduction'),
            'pageDescription' => get_data('pageDescription'),
            'content' => implode(PHP_EOL, [
                get_site_view(
                    'pages/index/article.php',
                    ['name' => get_data('Name1'), 'price' => get_data('price1'), 'image' => 'assets/img/gallery/01.jpg']
                ),
                get_site_view(
                    'pages/index/article.php',
                    ['name' => get_data('Name2'), 'price' => get_data('price2'), 'image' => 'assets/img/gallery/02.jpg']
                ),
                get_site_view(
                    'pages/index/article.php',
                    ['name' => get_data('Name3'), 'price' => get_data('price3'), 'image' => 'assets/img/gallery/03.jpg']
                ),
                get_site_view(
                    'pages/index/article.php',
                    ['name' => get_data('Name4'), 'price' => get_data('price4'), 'image' => 'assets/img/gallery/04.jpg']
                )
            ])
        ]
    )
    . get_site_view('common/footer.php', ['scripts' => get_site_view('pages/index/script.php')]);

render_site_view(
    'layout/base.php',
    ['pageTitle' => get_data('pageTitle'), 'pageContent' => $pageContent]
);
