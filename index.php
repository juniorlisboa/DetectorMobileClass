<?php 
include "detect.class.php";

$obj = new Detect();


echo $obj->browser.' '.$obj->browser_version.' '.$obj->system.' '.$obj->ip;




?>