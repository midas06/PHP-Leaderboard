<?php
require_once "include.php";
inc_Class("html");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTML_leaderboard
 *
 * @author hzl0001
 */
class HTML_leaderboard extends absHTML
{
    private $divMain;
    private $divSidebar;
    private $navBar;
    private $body;
    
    public function setNav()
    {
        $this->navBar = "<div class='header'><a href='index.html' id='logo'><img src='logo.jpg' alt='header logo'/></a><div class='nav'><ul id='navList'><li><a href='index.html'>Home</a></li><li><a href='game.html'>Play</a></li><li><a href='" . $this->getParent() . "'>Leaderboards</a></li></ul></div></div>";
    }
    
    protected function newBodyDiv($newDiv)
    { 
        $div = "<div class='bodydiv'>";
        $div .= $newDiv;
        $div .= "</div>";
        return $div;
    }
    
    protected function setTheBody()
    {
        $this->body .= "<div class='body'>";
        $this->body .= $this->divMain . $this->divSidebar;
        $this->body .= "</div>";
    }

    
    public function setMainDiv($newDiv)
    {
        $this->divMain = $this->newBodyDiv($newDiv);
    }
    
    public function setSidebar($newDiv)
    {
        $this->divSidebar = $this->newBodyDiv($newDiv);
    }
    
    public function compile()
    {
        $this->setNav();
        $this->setTheBody();
        return $this->getNav() . $this->body;
    }
    
}


?>