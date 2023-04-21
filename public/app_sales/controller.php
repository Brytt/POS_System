<?php
$action= "app_sales\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_sales\lists;
// $result= $result->Init();

$list= new app_sales\lists;
$paging= $list->Init();


include("scripts/js.php");
?>