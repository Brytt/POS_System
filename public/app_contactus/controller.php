<?php
$action= "app_contactus\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

$result= new app_contactus\lists;
$result= $result->Init();
include("scripts/js.php");
?>