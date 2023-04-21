<?php
$action= "app_products\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_products\lists;
// $result= $result->Init();

$list= new app_products\lists;
$paging= $list->Init();


include("scripts/js.php");
?>