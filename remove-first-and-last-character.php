<?php
// https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0

function remove_char(string $s): string {


    $removeFirst = substr($s, 1);
    $finalString = substr($removeFirst, 0, strlen($removeFirst)-1);
    return $finalString;

}

?>