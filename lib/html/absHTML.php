<?php
require_once "include.php";
inc_Class("html");


abstract Class absHTML implements iHTML
{
    private $header;
    private $body;
    private $parentPHP;
    private $navbar;
    
    public function __construct($newTitle, $newParent) {
        $this->parentPHP = $newParent;
        $this->header = "<!DOCTYPE html><html><head><meta charset='utf-8'><meta http-equiv='X-UA-Compatible'><title>" . $newTitle . "</title><link rel='stylesheet' href='css/default.css'></head>";
        $this->body = "<div class='container'>";
        $this->navbar = "<div class='header'><a href='index.html' id='logo'><img src='logo.jpg' alt='header logo'/></a><div class='nav'><ul id='navList'>";
    }
    
    public function getHTML()
    {
        $theHTML = $this->header . $this->body;
        return $theHTML;
    }
    
    public function setBody($newBody)
    {
        $this->body .= $newBody;
        $this->body .= "</div>";
    }
    
    public function getParent()
    {
        return $this->parentPHP;
    }
    
    public function addNavOption($newText, $newLink, $newTitle)
    {
        $newLink = "<li><a href='" . $newLink . "'title='" . $newTitle . "'>" . $newText . "</a></li>";
        
        $this->navbar .= $newLink;
    }
    
    public function getNav()
    {
        $this->navbar .= "</ul></div></div>";
        return $this->navbar;
    }
   
}

?>
