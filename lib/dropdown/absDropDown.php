<?php
require_once "include.php";
inc_Class("dropdown");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of absDropDown
 *
 * @author hzl0001
 */
abstract class absDropDown implements iDropdown
{
    private $theName;
    private $parentPHP;
    private $theTitle;
    
    public function __construct($newName, $newParent) {
        $this->theName = $newName;
        $this->parentPHP = $newParent;
    }
    
    protected function getName()
    {
        return $this->theName;
    }
    protected function getParent()
    {
        return $this->parentPHP;
    }
    
    public function setTitle($newTitle)
    {
        $this->theTitle = "<h2>";
        $this->theTitle .= $newTitle;
        $this->theTitle .= "</h2>";
    }
    protected function getTitle()
    {
        return $this->theTitle;
    }
    
}



?>