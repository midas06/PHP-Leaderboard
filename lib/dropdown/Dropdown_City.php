<?php
require_once "include.php";
inc_Class("dropdown");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dropdown_City
 *
 * @author hzl0001
 */
class Dropdown_City extends absDropDown
{
    private $theDropDown;
    
    public function setDropdown($newResult)
    {
        $this->theDropDown = "<form action='" . $this->getParent() . "' method='POST'><select name='" . $this->getName() . "'><option value='allCities'>All Cities</option>";
        while ($cityRow = $newResult->fetch_assoc()) {
            $this->theDropDown .= "<option value=\"{$cityRow['city']}\">";
            $this->theDropDown .= $cityRow['city'];
            $this->theDropDown .= "</option>";
        }
        $this->theDropDown .= "</select><input type='submit' value='submit'/>";
    }

    public function getDropdown()
    {
        return $this->getTitle() . $this->theDropDown;
    }
    
}

?>

