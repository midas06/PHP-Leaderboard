<?php
include_once "include.php";
inc_All();

/*
 * Created by Harrison Lim
 */


class SuperController {
    private $theCountry;
    private $controller;
    private $html;
    private $table;
    private $dropdowns;
    
    
    public function init()
    {
        $this->controller = new LeaderboardController(new DBConnection());
        $this->html = new HTML_leaderboard("Leaderboards", $this->controller->get_topmost_script());
    }
    
    public function createLeaderboard()
    {
        $this->controller->setLeaderboard();
        $this->controller->setQuery("Select * from view_leaderboard_default");
        $this->controller->setTitle("Overall Leaderboard");
        $this->table = $this->controller->getTable();
    }
    
    public function createDropdownCountry()
    {
        $this->controller->setQuery("SELECT * from View_Countries");
        $this->controller->setTitle("View a Country's leaderboard");
        $this->controller->setDropdownCountry('selectCountry');
        $this->dropdowns = $this->controller->getDropdown();
    }
    
    public function createDropdownCity($theCountry)
    {
        $this->controller->setQuery("call proc_GetCities('" . $theCountry . "')");
        $this->controller->setTitle("View a City's leaderboard");
        $this->controller->setDropdownCity('selectCity');
        $this->dropdowns .= $this->controller->getDropdown();
    }
     
    
    public function setHTML()
    {
        $this->html->setMainDiv($this->table);
        $this->html->setSidebar($this->dropdowns);
        $this->html->addNavOption("Home", "", "Return to the homepage");
        $this->html->addNavOption("Play", "", "Play the game!");
        $this->html->addNavOption("Leaderboards", $this->html->getParent(), "See where you rank amongst your friends!");
        $this->html->setBody($this->html->compile());
    }
    
    
    public function getHTML()
    {
        return $this->html->getHTML();
    }
    
    
}
