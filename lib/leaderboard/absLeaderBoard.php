<?php
require_once "include.php";
inc_Class("leaderboard");
		
abstract class absLeaderBoard implements iLeaderboard
{
    private $theTitle;
    private $theQuery;


    public function setTitle($newTitle)
    {
            $this->theTitle = $newTitle;
    }
    public function setQuery($newQuery)
    {
            $this->theQuery = $newQuery;
    }

    public function getTitle()
    {
            return $this->theTitle;
    }
    public function getQuery()
    {
            return $this->theQuery;
    }

	
}
	













?>