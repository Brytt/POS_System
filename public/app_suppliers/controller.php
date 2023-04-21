<?php
$action= "app_suppliers\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_suppliers\lists;
// $result= $result->Init();

$list= new app_suppliers\lists;
$paging= $list->Init();


include("scripts/js.php");
?>