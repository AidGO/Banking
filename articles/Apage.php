<?php 
session_start();
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));

$username1 = (isset($_SESSION['username'])) ? $_SESSION['username'] : '';
$password1 = (isset($_SESSION['password'])) ? $_SESSION['password'] : '';
$checking = (isset($_SESSION['checkings'])) ? $_SESSION['checkings'] : '';
$savings = (isset($_SESSION['savings'])) ? $_SESSION['savings'] : '';

$data = 
    [
        'pageTitle' => 'AWP Bank | Account',
        'header' => 'AWP Bank',
    ];

include_once(APP_ROOT . '/src/views/headview.php');
include_once(APP_ROOT . '/src/views/headerview.php');
include_once(APP_ROOT . '/src/views/navview.php');
?>

<main>
        <?php echo "Welcome <b>$username1 </b><br>
        Checkings = $$checking<br>
        Savings = $$savings"
        ?>

</main>

<?php include_once(APP_ROOT . '/src/views/footerview.php') ?>