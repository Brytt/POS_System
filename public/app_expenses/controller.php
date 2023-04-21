<?php
$action= "app_expenses\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

$list= new app_expenses\lists;
$paging= $list->Init();

include("scripts/js.php");
?>