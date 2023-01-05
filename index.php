<?php
require_once './autoload.php';
require './views/includes/alerts.php';

/* In this array we stock only the pages that the user can see */
$pages = ['home', 'add', 'update', 'delete'];


require_once './views/includes/header.php';

// Check the url if it is contain ?page
// If Not goto Home page
if (isset($_GET['page'])) {

    //check if the entred value  is located in the array page
    // if Not show 404
    if (in_array($_GET['page'], $pages)) {

        $page = $_GET['page'];
        HomeController::index($page);
    } else {
        include('views/includes/404.php');
    }
} else {
    HomeController::index('home');
}

require_once './views/includes/footer.php';
