<?php 
include_once "include.php";
inc_Class("controllers");

class LeaderboardController extends absController
{
	private $leaderboard;
        private $tablemaker;
        private $dropdown;
        private $theTitle;
	        
        public function setLeaderboard()
        {
            $this->leaderboard = new Leaderboard_Main();
        }
        
        public function setTablemaker()
        {
            $this->tablemaker = new TableMaker_Leaderboard($this->getQuery(), $this->leaderboard);
        }
        
	public function setTitle($newTitle)
	{
            $this->theTitle = $newTitle;
	}
	
	public function getLeaderboard()
	{
            return $this->leaderboard;
	}
        
        public function buildTable()
        {
            $this->tablemaker->buildTable($this->getResult());            
        }
        
        public function getTable()
        {
            $this->setTablemaker();
            $this->buildTable();
            $this->leaderboard->setTitle($this->theTitle);
            return $this->tablemaker->getTable();
        }
        
        public function setDropdownCountry($newStatement)
        {
            $this->dropdown = new Dropdown_Country($newStatement, basename($this->get_topmost_script()));
        }
        public function setDropdownCity($newStatement)
        {
            $this->dropdown = new Dropdown_City($newStatement, basename($this->get_topmost_script()));
        }
        
        protected function buildDropdown()
        {
            $this->dropdown->setDropdown($this->getResult());
        }
	
        public function getDropdown()
        {
            //$this->setDropdown();
            $this->buildDropdown();
            $this->dropdown->setTitle($this->theTitle);
            return $this->dropdown->getDropdown();
        }
}



?>