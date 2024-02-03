<?php 
session_start();
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,1));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form submitted, retrieve data and store it in a session variable
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['checkings'] = 124 * strlen($_SESSION['username']) % 101;
    $_SESSION['savings'] = 379 * strlen($_SESSION['password']) %305;
    
    // Redirect to display.php
    header('Location: articles/Apage.php');
    exit(); // Ensure that script execution stops after the redirect header
}

$data = [
    'pageTitle' => 'AWP Bank | Home',
    'header' => 'AWP Bank',
    'stylesheet' => "style.css"
];
include_once('src/views/headview.php');
include_once('src/views/headerview.php');
include_once('src/views/loginview.php'); 
include_once('src/views/footerview.php');
?>