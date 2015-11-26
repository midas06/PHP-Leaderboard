<?php
require_once "include.php";
inc_Class("html");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author hzl0001
 */
interface iHTML {
    function __construct($newTitle, $newParent);
    function setBody($newBody);
}


?>
