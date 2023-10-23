<?php

ini_set('display_errors', 'Off');

const BASE_DIR = __DIR__ . '/..';
const NAVBAR_ITEMS = [
    ['name' => 'Главная', 'link' => 'index.php'],
    ['name' => 'Обо мне', 'link' => 'about.php'],
    ['name' => 'Связь', 'link' => 'contact.php']
];
define("SITE_DATA", json_decode(
    file_get_contents(BASE_DIR . '/core/storage/data.json'),
    JSON_OBJECT_AS_ARRAY
));
