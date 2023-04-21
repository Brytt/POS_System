<?php
$action= "app_activitylog\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_activitylog\lists;
// $result= $result->Init();

$list= new app_activitylog\lists;
$paging= $list->Init();

include("scripts/js.php");
?>