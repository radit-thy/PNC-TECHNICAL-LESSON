<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routers = [
    '/' => 'controllers/forms/create.user.controll.php',
];

$page = '';
if(array_key_exists($uri,$routers)){
    $page = $routers[$uri];
}else{
    echo "Page not found!!";
}

require "partials/header.php";
require $page;
require "partials/footer.php";