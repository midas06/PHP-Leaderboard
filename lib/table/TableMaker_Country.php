<?php 
require_once "include.php";
inc_Class("table");

class TableMaker_Leaderboard extends absTableMaker
{
	private $theTable;
	private $theLB;
        
        public function __construct($newQuery, absLeaderBoard $newLB) {
            parent::__construct($newQuery);
            $this->theLB = $newLB;
        }

        public function buildTable($newResult)
	{
            $this->theTable = "<table class='tbl_leaderboard'><tr><th>Username</th><th>Name</th><th>Country</th><th>Score</th></tr>";

            if ($newResult->num_rows > 0) {
                while ($row = $newResult->fetch_assoc()) {
                    $this->theTable .= "<tr><td>" . $row["Username"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Country"] . "</td><td>" . $row["Score"] . "</td></tr>";
                }				
            }
            $this->theTable .= "</table>";
	}
	
	public function getTable()
	{
	    return "<h1>" . $this->theLB->getTitle() . "</h1>" . $this->theTable;
	}
}


?>