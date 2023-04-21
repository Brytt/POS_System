<?php
$action= "app_settings\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

$result= new app_settings\lists;
$result= $result->Init();
include("scripts/js.php");
?>