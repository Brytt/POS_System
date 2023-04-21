<?php
$action= "app_categories\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

$list= new app_categories\lists;
$paging= $list->Init();
include("scripts/js.php");
?>