<?php
$action= "app_stocks\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_stocks\lists;
// $result= $result->Init();

$list= new app_stocks\lists;
$paging= $list->Init();


include("scripts/js.php");
?>