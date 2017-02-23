<?php

include_once './src/servable-php/functions.php';
include_once './wp-template/header.php';

$page = $_GET['page'];

if($page) {

    switch ($page) {
        case 'about-us':
            include_once './wp-template/page.php';
            break;
        case 'news':
            include_once './wp-template/index.php';
            break;
        case 'contact':
            include_once './wp-template/page-contact.php';
            break;
        case 'category':
            include_once './wp-template/category.php';
            break;
        case 'sidebar':
            include_once './wp-template/page-sidebar.php';
            break;
        default:
            include_once './wp-template/page-home.php';
            break;
    }
} else {
    include_once './wp-template/page-home.php';
}

include_once './wp-template/footer.php';
