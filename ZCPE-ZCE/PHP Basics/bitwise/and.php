<?php
    /**
     * 00000101
     */
    $a = 5;

    /**
     * 00000010
     */
    $b = 2;

    /**
     * 00000101 => 5 ->\
     *                 |->> AND
     * 00000010 => 2 ->/
     * 
     * ========
     * 
     * 00000000 => 0
     */

    echo $a & $b;

    echo "<br /><br />";
?>