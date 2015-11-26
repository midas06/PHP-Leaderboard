<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function inc_Class($theClass)
{  
    foreach (glob("lib\\" . $theClass . "\*.php") as $file)
    {
        include_once $file;
    }
}

function inc_All()
{
    $folder = glob(__DIR__ . '/*' , GLOB_ONLYDIR);
    set_include_path(__DIR__);
    foreach($folder as $f)
    {
        foreach (glob($f . "\*.php") as $file)
        {
            include_once $file;
        }
    }
}

?>
