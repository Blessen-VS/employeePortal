<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
];

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}
?>