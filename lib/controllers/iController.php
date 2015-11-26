<?php

/*
 * Created by Harrison Lim
 */

/**
 *
 * @author hzl0001
 */
interface iController {
    function __construct($newCon);
    function setQuery($newQuery);
    function setParent($parentPHP);
}

?>