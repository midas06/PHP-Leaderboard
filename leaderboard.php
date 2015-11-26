<?php
include_once "lib/include.php";
inc_All();

/* 
 * Created by Harrison Lim
 */


$theCountry = "allCountries";
if (isset($_POST['selectCountry']))
{
    $theCountry = $_POST['selectCountry'];
}


$controller = new SuperController();

$controller->init();
$controller->createLeaderboard();
$controller->createDropdownCountry();

if ($theCountry != "allCountries") {
    $controller->createDropdownCity($theCountry);
}

$controller->setHTML();
echo $controller->getHTML();


?>