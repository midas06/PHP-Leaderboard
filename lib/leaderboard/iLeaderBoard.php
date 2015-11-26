<?php
require_once "include.php";
inc_Class("leaderboard");

interface iLeaderBoard
{
	function setTitle($newTitle);
	function setQuery($newQuery);
}

?>