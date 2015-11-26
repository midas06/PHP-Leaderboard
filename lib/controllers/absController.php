<?php
require_once "include.php";
inc_Class("controllers");

abstract class absController implements iController
{
    private $theQuery;
    private $conn;
    private $result;
    private $parentPHP;
    
    public function __construct($newCon)
    {
        $this->conn = $newCon;
    }
    
    // from: http://stackoverflow.com/questions/1318608/php-get-parent-script-name
    public function get_topmost_script() 
    {
        $backtrace = debug_backtrace(defined("DEBUG_BACKTRACE_IGNORE_ARGS") ? DEBUG_BACKTRACE_IGNORE_ARGS : FALSE);
        $top_frame = array_pop($backtrace);
        return $top_frame['file'];
    }
    
    public function setQuery($newQuery)
    {
        $this->theQuery = $newQuery;	
    }
    
    public function getCon()
    {
        return $this->conn;
    }

    public function getQuery()
    {
        return $this->theQuery;
    }


    public function getResult()
    {
        return $this->conn->getResult($this->theQuery);
    }
    
    public function setParent($parentPHP)
    {
        $this->parentPHP = $parentPHP;
    }
    
}


?>