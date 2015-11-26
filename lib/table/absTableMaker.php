<?php
require_once "include.php";
inc_Class("table");	
		
abstract class absTableMaker 
{
	private $theQuery;
	
	public function __construct($newQuery)
	{
            $this->theQuery = $newQuery;
	}
}

?>