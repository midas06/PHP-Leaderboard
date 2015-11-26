<?php
require_once 'lib/include.php';
inc_All();

$theCountry = "allCountries";

if (isset($_POST['selectCountry']))
{
    $theCountry = $_POST['selectCountry'];
    //echo $theCountry;
}

$conn = new DBConnection();
		
	
$controller = new LeaderboardController($conn);
$lb = new Leaderboard_Main();

$controller->setLeaderboard($lb);
$controller->setQuery("SELECT * from view_leaderboard_default");
$controller->setTitle("Overall Leaderboard");

$table = $controller->getTable();


$html = new HTML_leaderboard("test", $controller->get_topmost_script());


$controller->setQuery("SELECT * from View_Countries");
$controller->setTitle("View a Country's leaderboard");

$controller->setDropdownCountry('selectCountry');
$dd = $controller->getDropdown();

if ($theCountry != "allCountries")
{
    $controller->setQuery("call proc_GetCities('" . $theCountry . "')");
    $controller->setTitle("View a City's leaderboard");
    $controller->setDropdownCity('selectCity');
    $dd .= $controller->getDropdown();
}
//echo "call proc_GetCities('" . $theCountry . "')";



$html->setMainDiv($table);
$html->setSidebar($dd);
$html->setBody($html->compile());


echo $html->getHTML();



?>




