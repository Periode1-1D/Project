<?php
<<<<<<< HEAD
// head and nav information
$activePage = basename($_SERVER['REQUEST_URI'], ".php");
include 'inc/mysql.php';
include 'inc/header.php';
include 'inc/nav.php';


$DB = new MySQL;
    ?>
    <div class="page">
    <div class="pageContent">
    <?php
    if(!isset($_GET['page']) || $_GET['page'] == ''){
=======
    // head and nav information
    $activePage = basename($_SERVER['REQUEST_URI'], ".php");

    include 'inc/core.php';
    include 'inc/mysql.php';

    $DB = new MySQL();
    $Core = new Core();


    include 'inc/header.php';
    //include 'inc/nav.php';
    //include 'inc/sidebar.php';



    if(empty($_GET['page'])){
>>>>>>> database
        $pageTitle = 'nieuws'; //If no page specified
    } else {
        $pageTitle = $_GET['page'];
    }
    //print_R($pageTitle);
    switch($pageTitle)
        {
            case 'databasetest':
                include 'pages/databasetest.php'; //file path of your home/nieuws page
                break;
            case 'nieuws':
                include 'pages/nieuws.php'; //file path of your home/nieuws page
                break;
            case 'vakken':
                include 'pages/vakken.php';
                break;
            case 'docenten':
                include 'pages/docenten.php';
                break;
            case 'docent':
                include 'pages/docent.php';
                break;
            case 'contact':
                include 'pages/contact.php';
                break;
            case 'login':
                include 'pages/login.php';
                break;
<<<<<<< HEAD
            case 'uitloggen':
                include 'pages/Login/logout.php';
                break;
            case 'gebruikers':
                include 'pages/gebruikers.php';
=======
            case 'logout':
                include 'pages/logout.php';
>>>>>>> database
                break;
            case 'uploadNieuws':
                include 'pages/uploadNieuws.php';
                break;
            case 'docenten/profiel':
                include 'pages/docenten/profiel.php';
                break;
            case 'docentenBeschikbaarheid':
                include 'pages/docentenBeschikbaarheid.php';
                 break;
            // disclaimers
            case 'privacyPolicy':
                include 'pages/privacyPolicy.php';
                break;
            case 'termsAndConditions':
                include 'pages/termsAndConditions.php';
                break;
            default:
                include 'pages/404.php'; //If any page that doesn't exists, then get back to home.
        }
<<<<<<< HEAD
    ?>
    </div>
    <?php
    include 'inc/sidebar.php';
    ?>
    </div>
    <?php
=======

>>>>>>> database
    include 'inc/footer.php';
?>