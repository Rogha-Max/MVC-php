<?php
require __DIR__ . '/controllers/templateController.php';

$page = '';
session_start();
$_SESSION["connected"] = FALSE;
$url = explode("/Dev-php/2A/S3/", $_SERVER['REQUEST_URI'])[1];
var_dump($_SESSION["connected"]);
switch ($url) {
    case '':
        $page = 'portfolio.php';
        $_SESSION["title"] = 'Portfolio';
        break;
    case 'login':
        $page = 'formlog.php';
        $_SESSION["title"] = 'Connexion';
        break;
    case 'register':
        $page = 'formreg.php';
        $_SESSION["title"] = 'Inscription';
        break;
    case 'admin':
        $page = 'admin.php';
        $_SESSION["title"] = 'Admin Panel';
        break;
    case 'login/handling':
        $page = 'login.php';
        break;
    /*case 'register/handling':
        $page = 'register.php';
        break;*/
    default:
        $page = 'error.php';
        break;
}
template($page);
