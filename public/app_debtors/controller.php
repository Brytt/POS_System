<?php
$action= "app_debtors\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_staff\lists;
// $result= $result->Init();

$list= new app_debtors\lists;
$paging= $list->Init();


include("scripts/js.php");
?>