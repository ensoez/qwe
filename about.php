<?php

require_once __DIR__ . '/core/bootstrap.php';

$pageContent = get_navbar_view(1)
    . get_site_view(
        'pages/about/main.php',
        ['history' => get_data('TitleHistory'), 'seo' => get_data('seo')]
    )
    . get_site_view('common/footer.php');

render_site_view(
    'layout/base.php',
    ['pageTitle' => get_data('pageTitle'), 'pageContent' => $pageContent]
);
