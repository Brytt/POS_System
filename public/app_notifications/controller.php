<?php
$action= "app_notifications\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_notifications\lists;
// $result= $result->Init();

$list= new app_notifications\lists;
$paging= $list->Init();


include("scripts/js.php");
?>