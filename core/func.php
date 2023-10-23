<?php


function get_data($name) {
    if (is_array(SITE_DATA) && in_array($name, array_keys(SITE_DATA))) {
        return SITE_DATA[$name];
    }

    return NULL;
}

function render_view($path, $vars = [])
{
    extract($vars);
    include $path;
}

function get_view($path, $vars = [])
{
    ob_start();
    render_view($path, $vars);
    return ob_get_clean();
}

function render_site_view($path, $vars = [])
{
    render_view(BASE_DIR . '/core/template/' . trim($path, '/'), $vars);
}

function get_site_view($path, $vars = [])
{
    ob_start();
    render_site_view($path, $vars);
    return ob_get_clean();
}

function get_navbar_view($activePageIndex)
{
    $navbarContent = '';

    foreach (NAVBAR_ITEMS as $index => $item) {
        $navbarContent .= get_site_view(
            'common/navbar_item.php',
            [
                'name' => $item['name'],
                'link' => $item['link'],
                'active' => $index === $activePageIndex ? 'active' : ''
            ]
        );
    }

    return get_site_view(
        'common/navbar.php',
        ['content' => $navbarContent]
    );
}
