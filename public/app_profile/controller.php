<?php
$action= "app_profile\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

$result= new app_profile\lists;
$result= $result->Init();
include("scripts/js.php");
?>