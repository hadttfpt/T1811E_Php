<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/13/2019
 * Time: 8:26 PM
 */
$x = 10;
$y = 5;
$z = 2;

$result = $x++ - ++$y - --$z + $x++ +$y++;
echo  $result;
?>