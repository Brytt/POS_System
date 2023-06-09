<?php  
$modules= [];
/**
 * Examples for modules under pblic folder
 * test1 :- A moudule with a complete sub-module
 * test2 :- A moudule with a sub-module which contains a complete  sub-module
 * test3 :- A moudule with a sub-module which has a sub-module which contains a sub-model which is a complete sub-module
 * test4 :- A moudule with sub-modules where one module contains a sub-module and other 2 stand alone complete sub-modules
 * test5 :- A complete stand alone module
 * NOTE for three dimentional menu : 'test'=>["test1"=>["t2","t3"],"test"=>["test2"]]
 */
$Examplesmodules=[  
   'test1'=>
   			'module1', 
   'test2'=>[
			'module1'=>'module2'
			],
   'test3'=>['module1'=>[
						'module2'=>[
									'module3'=>'module4'
							   		]
						]
			],
	'test4'=>[
		[
			'module1'=>'module2'
		],
		'module3',
		'module4'
			],
	'test5'		
]; 
/**
 * listdata :- The Initial Content of a Edit Page used for 
 * displaying information  from the database
 * You can CHOOSE to white your own Edit page Logic but this is to jump start the module
 */
$editdata='<div class="page-@@@">
<input id="class_call" name="class_call" value="PUT_CLASS_NAME_HERE" type="hidden" />
			<?php echo "EDIT PAGE";  ?>
			</div>';
/**
 * listdata :- The Initial Content of a Details Page used for 
 * displaying information  from the database
 * You can CHOOSE to white your own details page Logic but this is to jump start the module
 */
$detailsdata='<div class="page-@@@">
<input id="class_call" name="class_call" value="PUT_CLASS_NAME_HERE" type="hidden" />
			<?php echo "DETAILS PAGE";  ?>
			</div>';
/**
 * listdata :- The Initial Content of a list Page used for 
 * displaying information in a tabular presentation
 * You can CHOOSE to white your own list page Logic but this is to jump start the module
 */
$listdata='<div class="page-@@@">
				<input id="class_call" name="class_call" value="PUT_CLASS_NAME_HERE" type="hidden" />
				<?php echo "LIST PAGE"; ?>
		</div>';
/**
 * controllerdata:- Initial Controller data
 */
$controllerdata='<?php
$action= "@@@\\\".(($class_call)? $class_call :"lists"); 
$class_int= new $action;
$result= $class_int->Init(); 

include("scripts/js.php");
?>';
/**
 * platformdata:- Initial platform data for navigation
 */
$platformdata='<?php
include("controller.php");
    switch($view){
		case "add":
		   include "views/add.php";
        break;
        case "edit":
		   include "views/edit.php";
        break;
        case "details":
        include "views/details.php";
     break;
        default:
            include "views/list.php";
        break;
    }
?>';
/**
 * indexdata :- initial 404 Page data
 */
$indexdata='<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 841.9 595.3" style="enable-background:new 0 0 841.9 595.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#58595B;}
</style>
<g>
	<path class="st0" d="M303,209.5l-1.1-1.5l40.3-79c1.9,0.2,3.9,0.7,6,1.4c2.1,0.8,4.1,1.8,6,3.1l-32.1,63.9h27.8v-26.2
		c1.1-0.2,2.2-0.3,3.3-0.4c1.1-0.1,2.2-0.1,3.2-0.1c1.2,0,2.4,0,3.5,0.1c1.1,0.1,2.3,0.2,3.4,0.4v26.2h12.7c0.2,1,0.3,2,0.4,3
		c0.1,1,0.1,2,0.1,3c0,1,0,2-0.1,3.1c-0.1,1.1-0.2,2-0.4,3h-12.7v18.9c-1.2,0.2-2.3,0.3-3.4,0.3c-1.1,0-2.1,0.1-3.2,0.1
		s-2.2,0-3.4-0.1c-1.1,0-2.3-0.2-3.4-0.3v-18.9H303z"/>
	<path class="st0" d="M421.5,130.1c5.8,0,10.9,1.1,15.2,3.4c4.4,2.3,8,5.5,10.9,9.6c2.9,4.1,5,8.9,6.5,14.5
		c1.4,5.6,2.1,11.7,2.1,18.4c0,6.6-0.7,12.7-2.2,18.4c-1.5,5.6-3.6,10.5-6.5,14.5c-2.9,4-6.5,7.2-10.9,9.5
		c-4.4,2.3-9.5,3.4-15.3,3.4c-5.8,0-10.8-1.1-15.1-3.4c-4.3-2.3-7.9-5.5-10.8-9.5c-2.9-4-5-8.9-6.5-14.5c-1.4-5.6-2.1-11.8-2.1-18.4
		c0-6.7,0.7-12.8,2.2-18.4c1.5-5.6,3.6-10.4,6.5-14.5c2.9-4.1,6.5-7.3,10.9-9.6C410.7,131.2,415.7,130.1,421.5,130.1z M421.4,142.2
		c-6.3,0-11.3,2.8-14.9,8.4c-3.6,5.6-5.4,14.1-5.4,25.5c0,11.4,1.8,19.8,5.4,25.4c3.6,5.6,8.5,8.3,14.9,8.3s11.2-2.8,14.7-8.3
		c3.5-5.6,5.2-14,5.2-25.4c0-11.4-1.7-19.9-5.2-25.5C432.6,145,427.7,142.2,421.4,142.2z"/>
	<path class="st0" d="M468.2,209.5l-1.1-1.5l40.3-79c1.9,0.2,3.9,0.7,6,1.4c2.1,0.8,4.1,1.8,6,3.1l-32.1,63.9h27.8v-26.2
		c1.1-0.2,2.2-0.3,3.3-0.4c1.1-0.1,2.2-0.1,3.2-0.1c1.2,0,2.4,0,3.5,0.1c1.1,0.1,2.3,0.2,3.4,0.4v26.2h12.7c0.2,1,0.3,2,0.4,3
		c0.1,1,0.1,2,0.1,3c0,1,0,2-0.1,3.1c-0.1,1.1-0.2,2-0.4,3h-12.7v18.9c-1.2,0.2-2.3,0.3-3.4,0.3c-1.1,0-2.1,0.1-3.2,0.1
		s-2.2,0-3.4-0.1c-1.1,0-2.3-0.2-3.4-0.3v-18.9H468.2z"/>
</g>
<g>
	<path class="st0" d="M284.7,280.1l-2.7-5.5c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.4,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l2,4.3l2-4.3
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l-2.7,5.5v3.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V280.1z"/>
	<path class="st0" d="M292.8,283.4c-0.6,0-1.2-0.1-1.6-0.3c-0.5-0.2-0.8-0.5-1.1-0.9c-0.3-0.4-0.5-0.9-0.7-1.4
		c-0.1-0.5-0.2-1.1-0.2-1.8c0-0.6,0.1-1.2,0.2-1.8c0.1-0.5,0.4-1,0.7-1.4c0.3-0.4,0.7-0.7,1.1-0.9c0.5-0.2,1-0.3,1.6-0.3
		s1.2,0.1,1.6,0.3c0.5,0.2,0.8,0.5,1.1,0.9c0.3,0.4,0.5,0.9,0.7,1.4c0.1,0.5,0.2,1.1,0.2,1.8c0,0.6-0.1,1.2-0.2,1.8
		c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.7,0.7-1.1,0.9C293.9,283.3,293.4,283.4,292.8,283.4z M292.8,282.3c0.4,0,0.7-0.1,1-0.2
		c0.3-0.2,0.5-0.4,0.7-0.7c0.2-0.3,0.3-0.7,0.4-1.1s0.1-0.9,0.1-1.4c0-0.5,0-1-0.1-1.4c-0.1-0.4-0.2-0.8-0.4-1.1
		c-0.2-0.3-0.4-0.5-0.7-0.7s-0.6-0.2-1-0.2s-0.7,0.1-1,0.2s-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.4
		c0,0.5,0,1,0.1,1.4c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.5,0.7,0.7C292,282.3,292.4,282.3,292.8,282.3z"/>
	<path class="st0" d="M298.1,274.6c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0v4.9c0,0.5,0,0.9,0.1,1.3c0.1,0.4,0.2,0.6,0.3,0.9
		c0.1,0.2,0.3,0.4,0.6,0.5c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.3,0.6-0.5c0.1-0.2,0.2-0.5,0.3-0.9
		c0.1-0.4,0.1-0.8,0.1-1.3v-4.9c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0v5.1c0,0.6-0.1,1.1-0.2,1.5c-0.1,0.5-0.3,0.8-0.5,1.2
		c-0.2,0.3-0.6,0.5-1,0.7c-0.4,0.2-0.9,0.2-1.4,0.2s-1-0.1-1.4-0.2c-0.4-0.2-0.7-0.4-1-0.7c-0.2-0.3-0.4-0.7-0.5-1.2
		c-0.1-0.5-0.2-1-0.2-1.5V274.6z"/>
	<path class="st0" d="M308.9,281.9c0.3,0.1,0.5,0.2,0.8,0.3c0.3,0.1,0.6,0.1,1.1,0.1c0.7,0,1.1-0.1,1.5-0.4c0.3-0.3,0.5-0.6,0.5-1.1
		c0-0.2,0-0.4-0.1-0.6c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.3-0.2-0.5-0.3s-0.4-0.2-0.7-0.3l-0.7-0.3c-0.2-0.1-0.4-0.2-0.6-0.3
		c-0.2-0.1-0.4-0.3-0.5-0.4c-0.1-0.2-0.3-0.4-0.3-0.6c-0.1-0.2-0.1-0.5-0.1-0.8c0-0.7,0.2-1.3,0.7-1.7c0.5-0.4,1.2-0.6,2.1-0.6
		c0.4,0,0.7,0,1.1,0.1c0.3,0.1,0.6,0.1,0.9,0.2c0,0.3-0.1,0.7-0.3,1c-0.2-0.1-0.5-0.2-0.8-0.2c-0.3-0.1-0.6-0.1-1-0.1
		c-0.5,0-0.9,0.1-1.2,0.3c-0.3,0.2-0.4,0.5-0.4,0.9c0,0.2,0,0.3,0.1,0.5c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.4,0.3
		c0.2,0.1,0.3,0.2,0.5,0.2l0.7,0.3c0.3,0.1,0.6,0.3,0.9,0.4s0.5,0.3,0.6,0.5c0.2,0.2,0.3,0.4,0.4,0.7s0.1,0.6,0.1,0.9
		c0,0.8-0.3,1.5-0.9,2c-0.6,0.5-1.4,0.7-2.4,0.7c-0.2,0-0.5,0-0.7,0c-0.2,0-0.4,0-0.6-0.1s-0.3-0.1-0.5-0.1s-0.3-0.1-0.5-0.2
		c0-0.2,0.1-0.4,0.1-0.5C308.8,282.3,308.8,282.1,308.9,281.9z"/>
	<path class="st0" d="M315.6,274.6h4.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3h-3.5v2.5h2.8c0,0.1,0,0.2,0,0.3
		s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3h-2.8v3h3.6c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-4.8V274.6z"/>
	<path class="st0" d="M322.1,274.6h4.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3h-3.5v2.5h2.8c0,0.1,0,0.2,0,0.3
		s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3h-2.8v3h3.6c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-4.8V274.6z"/>
	<path class="st0" d="M328.8,274.6c0.1,0,0.2,0,0.3,0s0.2,0,0.4,0c0.1,0,0.2,0,0.4,0s0.2,0,0.3,0l2.2,5.4l2.2-5.4c0.1,0,0.2,0,0.3,0
		s0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l0.4,8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0l-0.3-6.7l-2.1,4.9c-0.2,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.5,0l-2-5l-0.3,6.7c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0L328.8,274.6z"/>
	<path class="st0" d="M342.6,275.7h-2.2c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3h5.7c0,0.1,0,0.2,0,0.3
		s0,0.2,0,0.3s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-2.2v7.6c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.6,0V275.7z"/>
	<path class="st0" d="M350.3,283.4c-0.6,0-1.2-0.1-1.6-0.3c-0.5-0.2-0.8-0.5-1.1-0.9c-0.3-0.4-0.5-0.9-0.7-1.4
		c-0.1-0.5-0.2-1.1-0.2-1.8c0-0.6,0.1-1.2,0.2-1.8c0.1-0.5,0.4-1,0.7-1.4c0.3-0.4,0.7-0.7,1.1-0.9c0.5-0.2,1-0.3,1.6-0.3
		s1.2,0.1,1.6,0.3c0.5,0.2,0.8,0.5,1.1,0.9c0.3,0.4,0.5,0.9,0.7,1.4c0.1,0.5,0.2,1.1,0.2,1.8c0,0.6-0.1,1.2-0.2,1.8
		c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.7,0.7-1.1,0.9C351.5,283.3,351,283.4,350.3,283.4z M350.3,282.3c0.4,0,0.7-0.1,1-0.2
		c0.3-0.2,0.5-0.4,0.7-0.7c0.2-0.3,0.3-0.7,0.4-1.1s0.1-0.9,0.1-1.4c0-0.5,0-1-0.1-1.4c-0.1-0.4-0.2-0.8-0.4-1.1
		c-0.2-0.3-0.4-0.5-0.7-0.7s-0.6-0.2-1-0.2s-0.7,0.1-1,0.2s-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.4
		c0,0.5,0,1,0.1,1.4c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.5,0.7,0.7C349.6,282.3,349.9,282.3,350.3,282.3z"/>
	<path class="st0" d="M358.6,274.6c0.2,0,0.5-0.1,0.8-0.1c0.4,0,0.7,0,1.1,0c0.5,0,0.9,0,1.2,0.1c0.4,0.1,0.7,0.2,1,0.4
		c0.3,0.2,0.5,0.4,0.6,0.7c0.1,0.3,0.2,0.6,0.2,1c0,0.2,0,0.5-0.1,0.7c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.3,0.3-0.4,0.4
		c-0.2,0.1-0.3,0.2-0.5,0.2c0.2,0,0.5,0.1,0.7,0.2c0.2,0.1,0.4,0.2,0.6,0.4c0.2,0.2,0.3,0.4,0.5,0.7c0.1,0.3,0.2,0.6,0.2,1
		c0,0.5-0.1,0.9-0.3,1.2c-0.2,0.3-0.4,0.6-0.8,0.8c-0.3,0.2-0.7,0.3-1.1,0.4s-0.9,0.1-1.4,0.1c-0.3,0-0.6,0-1,0s-0.7-0.1-1-0.1
		V274.6z M360.7,278.2c0.5,0,1-0.1,1.2-0.4c0.3-0.2,0.4-0.6,0.4-1.1c0-0.5-0.2-0.8-0.5-1c-0.3-0.2-0.7-0.3-1.3-0.3
		c-0.2,0-0.3,0-0.5,0c-0.1,0-0.3,0-0.4,0v2.7H360.7z M359.8,282.3c0.1,0,0.3,0,0.4,0s0.3,0,0.5,0c0.3,0,0.6,0,0.8-0.1
		c0.3,0,0.5-0.1,0.7-0.2c0.2-0.1,0.3-0.3,0.5-0.5c0.1-0.2,0.2-0.4,0.2-0.8c0-0.3-0.1-0.5-0.2-0.8c-0.1-0.2-0.2-0.4-0.4-0.5
		c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.5-0.1-0.8-0.1h-1V282.3z"/>
	<path class="st0" d="M365.7,274.6h4.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3H367v2.5h2.8c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3
		c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3H367v3h3.6c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-4.8V274.6z"/>
	<path class="st0" d="M376.5,275.7h-2.2c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3h5.7c0,0.1,0,0.2,0,0.3
		s0,0.2,0,0.3s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-2.2v7.6c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.6,0V275.7z"/>
	<path class="st0" d="M381.3,274.6c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0,0.4,0c0.1,0,0.3,0,0.4,0c0.2,0,0.3,0,0.5,0c0.4,0,0.8,0,1.2,0.1
		c0.4,0.1,0.8,0.2,1.1,0.4c0.3,0.2,0.6,0.5,0.8,0.8s0.3,0.8,0.3,1.3c0,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.2,0.5-0.4,0.7
		c-0.2,0.2-0.3,0.4-0.5,0.5s-0.4,0.3-0.6,0.4l-0.1,0.1l2.5,3.6c-0.2,0-0.5,0-0.7,0c-0.2,0-0.4,0-0.6,0l-2.8-4v0l0.1,0
		c0.2-0.1,0.4-0.1,0.7-0.2c0.2-0.1,0.5-0.2,0.7-0.4c0.2-0.2,0.4-0.3,0.5-0.6s0.2-0.5,0.2-0.8c0-0.6-0.2-1-0.5-1.3
		c-0.3-0.3-0.8-0.4-1.4-0.4c-0.1,0-0.3,0-0.4,0c-0.1,0-0.2,0-0.4,0v7.7c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0s-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M390.1,280.1l-2.7-5.5c0.1,0,0.2,0,0.3,0s0.2,0,0.4,0c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0l2,4.3l2-4.3
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l-2.7,5.5v3.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V280.1z"/>
	<path class="st0" d="M395.4,274.6c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v8.6
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M398.7,274.6c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0s0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l3.8,6.5v-6.5c0.1,0,0.2,0,0.3,0
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0v8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0s-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		l-3.8-6.4v6.4c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M411.8,278.8c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v4.2
		c-0.2,0.1-0.4,0.1-0.6,0.2c-0.2,0.1-0.4,0.1-0.6,0.1s-0.4,0-0.6,0.1c-0.2,0-0.4,0-0.6,0c-0.6,0-1.2-0.1-1.7-0.3s-0.9-0.5-1.3-0.9
		c-0.4-0.4-0.6-0.8-0.8-1.4c-0.2-0.5-0.3-1.2-0.3-1.8c0-0.7,0.1-1.3,0.3-1.9c0.2-0.6,0.5-1,0.8-1.4c0.4-0.4,0.8-0.7,1.3-0.9
		s1-0.3,1.6-0.3c0.5,0,0.9,0,1.2,0.1c0.3,0.1,0.6,0.1,0.9,0.2c0,0.2,0,0.4-0.1,0.5c-0.1,0.2-0.1,0.3-0.2,0.5
		c-0.2-0.1-0.5-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-1-0.1c-0.4,0-0.8,0.1-1.2,0.2c-0.3,0.2-0.6,0.4-0.9,0.7s-0.4,0.7-0.6,1.1
		c-0.1,0.4-0.2,0.9-0.2,1.5c0,0.6,0.1,1.1,0.2,1.5c0.1,0.4,0.3,0.8,0.6,1c0.3,0.3,0.6,0.5,0.9,0.6c0.3,0.1,0.7,0.2,1.2,0.2
		c0.3,0,0.5,0,0.7,0c0.2,0,0.4-0.1,0.5-0.1V278.8z"/>
	<path class="st0" d="M419.4,275.7h-2.2c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3h5.7c0,0.1,0,0.2,0,0.3
		s0,0.2,0,0.3s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-2.2v7.6c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.6,0V275.7z"/>
	<path class="st0" d="M427,283.4c-0.6,0-1.2-0.1-1.6-0.3c-0.5-0.2-0.8-0.5-1.1-0.9c-0.3-0.4-0.5-0.9-0.7-1.4
		c-0.1-0.5-0.2-1.1-0.2-1.8c0-0.6,0.1-1.2,0.2-1.8c0.1-0.5,0.4-1,0.7-1.4c0.3-0.4,0.7-0.7,1.1-0.9c0.5-0.2,1-0.3,1.6-0.3
		s1.2,0.1,1.6,0.3c0.5,0.2,0.8,0.5,1.1,0.9c0.3,0.4,0.5,0.9,0.7,1.4c0.1,0.5,0.2,1.1,0.2,1.8c0,0.6-0.1,1.2-0.2,1.8
		c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.7,0.7-1.1,0.9C428.2,283.3,427.7,283.4,427,283.4z M427,282.3c0.4,0,0.7-0.1,1-0.2
		c0.3-0.2,0.5-0.4,0.7-0.7c0.2-0.3,0.3-0.7,0.4-1.1s0.1-0.9,0.1-1.4c0-0.5,0-1-0.1-1.4c-0.1-0.4-0.2-0.8-0.4-1.1
		c-0.2-0.3-0.4-0.5-0.7-0.7s-0.6-0.2-1-0.2s-0.7,0.1-1,0.2s-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.4
		c0,0.5,0,1,0.1,1.4c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.5,0.7,0.7C426.3,282.3,426.6,282.3,427,282.3z"/>
	<path class="st0" d="M435.3,274.6h4.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-3.3v2.5h2.7
		c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-2.7v3.9c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M441.4,274.6c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v8.6
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M444.7,274.6c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0s0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l3.8,6.5v-6.5c0.1,0,0.2,0,0.3,0
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0v8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0s-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		l-3.8-6.4v6.4c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M452.9,274.6c0.3,0,0.6-0.1,1-0.1c0.4,0,0.8,0,1.1,0c1.5,0,2.6,0.4,3.4,1.2c0.7,0.8,1.1,1.9,1.1,3.3
		c0,1.5-0.4,2.6-1.1,3.3c-0.8,0.7-1.9,1.1-3.4,1.1c-0.4,0-0.7,0-1.1,0s-0.7-0.1-0.9-0.1V274.6z M454.1,282.2c0.1,0,0.3,0,0.4,0
		c0.2,0,0.3,0,0.5,0c0.5,0,0.9-0.1,1.3-0.2c0.4-0.1,0.7-0.3,1-0.5c0.3-0.3,0.5-0.6,0.6-1c0.2-0.4,0.2-1,0.2-1.6
		c0-0.6-0.1-1.1-0.2-1.5s-0.4-0.8-0.6-1c-0.3-0.3-0.6-0.5-1-0.6s-0.8-0.2-1.3-0.2c-0.2,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.5,0V282.2z"/>
	<path class="st0" d="M464.1,274.6c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v3.6h3.7v-3.6
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0v-4h-3.7v4c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		V274.6z"/>
	<path class="st0" d="M472.3,274.6c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v8.6
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V274.6z"/>
	<path class="st0" d="M475.4,281.9c0.3,0.1,0.5,0.2,0.8,0.3c0.3,0.1,0.6,0.1,1.1,0.1c0.7,0,1.1-0.1,1.5-0.4c0.3-0.3,0.5-0.6,0.5-1.1
		c0-0.2,0-0.4-0.1-0.6c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.3-0.2-0.5-0.3s-0.4-0.2-0.7-0.3l-0.7-0.3c-0.2-0.1-0.4-0.2-0.6-0.3
		c-0.2-0.1-0.4-0.3-0.5-0.4c-0.1-0.2-0.3-0.4-0.3-0.6c-0.1-0.2-0.1-0.5-0.1-0.8c0-0.7,0.2-1.3,0.7-1.7c0.5-0.4,1.2-0.6,2.1-0.6
		c0.4,0,0.7,0,1.1,0.1c0.3,0.1,0.6,0.1,0.9,0.2c0,0.3-0.1,0.7-0.3,1c-0.2-0.1-0.5-0.2-0.8-0.2c-0.3-0.1-0.6-0.1-1-0.1
		c-0.5,0-0.9,0.1-1.2,0.3c-0.3,0.2-0.4,0.5-0.4,0.9c0,0.2,0,0.3,0.1,0.5c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.2,0.4,0.3
		c0.2,0.1,0.3,0.2,0.5,0.2l0.7,0.3c0.3,0.1,0.6,0.3,0.9,0.4s0.5,0.3,0.6,0.5c0.2,0.2,0.3,0.4,0.4,0.7s0.1,0.6,0.1,0.9
		c0,0.8-0.3,1.5-0.9,2c-0.6,0.5-1.4,0.7-2.4,0.7c-0.2,0-0.5,0-0.7,0c-0.2,0-0.4,0-0.6-0.1s-0.3-0.1-0.5-0.1s-0.3-0.1-0.5-0.2
		c0-0.2,0.1-0.4,0.1-0.5C475.3,282.3,475.4,282.1,475.4,281.9z"/>
	<path class="st0" d="M484.3,274.6c0.1,0,0.2,0,0.3,0s0.3,0,0.4,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l1.5,7.2l1.8-7.2
		c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0l1.8,7.3l1.5-7.3c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0
		c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0l-2.1,8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.4,0c-0.1,0-0.3,0-0.4,0l-1.7-6.8
		l-1.7,6.8c-0.1,0-0.2,0-0.4,0c-0.1,0-0.3,0-0.4,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0L484.3,274.6z"/>
	<path class="st0" d="M500.1,281.3h-3.3l-0.6,2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		l2.8-8.6c0.1,0,0.2,0,0.3,0s0.2,0,0.4,0c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0l2.8,8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0L500.1,281.3z M497.1,280.2h2.6l-1.3-4.4L497.1,280.2z"/>
	<path class="st0" d="M504.4,280.1l-2.7-5.5c0.1,0,0.2,0,0.3,0s0.2,0,0.4,0c0.1,0,0.2,0,0.3,0s0.2,0,0.3,0l2,4.3l2-4.3
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l-2.7,5.5v3.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0V280.1z"/>
	<path class="st0" d="M512.5,274.6c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v3.6h3.7v-3.6
		c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0v8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0v-4h-3.7v4c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		V274.6z"/>
	<path class="st0" d="M524,283.4c-0.6,0-1.2-0.1-1.6-0.3c-0.5-0.2-0.8-0.5-1.1-0.9c-0.3-0.4-0.5-0.9-0.7-1.4
		c-0.1-0.5-0.2-1.1-0.2-1.8c0-0.6,0.1-1.2,0.2-1.8c0.1-0.5,0.4-1,0.7-1.4c0.3-0.4,0.7-0.7,1.1-0.9c0.5-0.2,1-0.3,1.6-0.3
		s1.2,0.1,1.6,0.3c0.5,0.2,0.8,0.5,1.1,0.9c0.3,0.4,0.5,0.9,0.7,1.4c0.1,0.5,0.2,1.1,0.2,1.8c0,0.6-0.1,1.2-0.2,1.8
		c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.7,0.7-1.1,0.9C525.2,283.3,524.6,283.4,524,283.4z M524,282.3c0.4,0,0.7-0.1,1-0.2
		c0.3-0.2,0.5-0.4,0.7-0.7c0.2-0.3,0.3-0.7,0.4-1.1s0.1-0.9,0.1-1.4c0-0.5,0-1-0.1-1.4c-0.1-0.4-0.2-0.8-0.4-1.1
		c-0.2-0.3-0.4-0.5-0.7-0.7s-0.6-0.2-1-0.2s-0.7,0.1-1,0.2s-0.5,0.4-0.7,0.7c-0.2,0.3-0.3,0.6-0.4,1.1c-0.1,0.4-0.1,0.9-0.1,1.4
		c0,0.5,0,1,0.1,1.4c0.1,0.4,0.2,0.8,0.4,1.1c0.2,0.3,0.4,0.5,0.7,0.7C523.3,282.3,523.6,282.3,524,282.3z"/>
	<path class="st0" d="M529.7,274.6c0.1,0,0.2,0,0.3,0s0.2,0,0.4,0c0.1,0,0.2,0,0.4,0s0.2,0,0.3,0l2.2,5.4l2.2-5.4c0.1,0,0.2,0,0.3,0
		s0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0l0.4,8.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0l-0.3-6.7l-2.1,4.9c-0.2,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.5,0l-2-5l-0.3,6.7c-0.1,0-0.2,0-0.3,0
		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0L529.7,274.6z"/>
	<path class="st0" d="M539.2,274.6h4.7c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3h-3.5v2.5h2.8c0,0.1,0,0.2,0,0.3
		s0,0.2,0,0.3c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3h-2.8v3h3.6c0,0.2,0,0.3,0,0.5c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3h-4.8V274.6z"/>
</g>
<g>
	<path class="st0" d="M328.8,239.7c0.2,0,0.4-0.1,0.7-0.1c0.3,0,0.6,0,0.9-0.1s0.6,0,0.9-0.1c0.3,0,0.6,0,0.9,0
		c0.7,0,1.4,0.1,2.1,0.2c0.7,0.1,1.2,0.4,1.8,0.8c0.5,0.4,0.9,0.8,1.2,1.4c0.3,0.6,0.4,1.3,0.4,2.2c0,0.9-0.2,1.7-0.5,2.3
		c-0.3,0.6-0.7,1.1-1.2,1.5c-0.5,0.4-1.1,0.6-1.8,0.8c-0.7,0.2-1.3,0.2-2,0.2c-0.3,0-0.5,0-0.7,0c-0.2,0-0.4,0-0.6-0.1v5.2
		c-0.3,0-0.7,0.1-1,0.1c-0.2,0-0.3,0-0.5,0c-0.2,0-0.4,0-0.5-0.1V239.7z M330.8,247.2c0.2,0,0.4,0,0.6,0.1c0.2,0,0.4,0,0.7,0
		c0.4,0,0.8,0,1.2-0.1c0.4-0.1,0.8-0.2,1.1-0.5s0.6-0.5,0.8-0.9c0.2-0.4,0.3-0.9,0.3-1.5c0-0.6-0.1-1-0.3-1.4s-0.4-0.7-0.7-0.9
		c-0.3-0.2-0.7-0.4-1.1-0.5c-0.4-0.1-0.9-0.1-1.3-0.1c-0.5,0-0.9,0-1.3,0.1V247.2z"/>
	<path class="st0" d="M346.3,250.8h-5.5l-1,3.3c-0.2,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0c-0.2,0-0.4,0-0.6,0c-0.2,0-0.3,0-0.5-0.1
		l4.7-14.5c0.2,0,0.4,0,0.6-0.1c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.6,0.1l4.7,14.5c-0.2,0-0.3,0-0.5,0.1
		c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.5,0c-0.2,0-0.4,0-0.5-0.1L346.3,250.8z M341.3,249.1h4.4l-2.2-7.4L341.3,249.1z"/>
	<path class="st0" d="M359.4,246.7c0.2,0,0.3,0,0.5-0.1c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0.1v7.1
		c-0.3,0.1-0.6,0.2-0.9,0.3c-0.3,0.1-0.7,0.2-1,0.2c-0.4,0-0.7,0.1-1.1,0.1c-0.4,0-0.7,0-1,0c-1.1,0-2-0.2-2.9-0.5
		c-0.9-0.3-1.6-0.8-2.2-1.5c-0.6-0.6-1-1.4-1.4-2.3s-0.5-1.9-0.5-3.1c0-1.2,0.2-2.2,0.5-3.1s0.8-1.7,1.4-2.4
		c0.6-0.7,1.3-1.2,2.1-1.5c0.8-0.4,1.7-0.5,2.7-0.5c0.8,0,1.4,0,2,0.2c0.6,0.1,1.1,0.2,1.5,0.4c0,0.3-0.1,0.6-0.2,0.9
		c-0.1,0.3-0.2,0.5-0.3,0.8c-0.4-0.1-0.8-0.2-1.2-0.3s-1-0.1-1.6-0.1c-0.7,0-1.4,0.1-1.9,0.4c-0.6,0.3-1.1,0.6-1.5,1.1
		s-0.7,1.1-1,1.8c-0.2,0.7-0.3,1.5-0.3,2.5c0,1,0.1,1.8,0.4,2.5c0.2,0.7,0.6,1.3,1,1.7c0.4,0.5,0.9,0.8,1.5,1
		c0.6,0.2,1.2,0.3,1.9,0.3c0.4,0,0.8,0,1.1-0.1c0.3,0,0.6-0.1,0.8-0.2V246.7z"/>
	<path class="st0" d="M364.8,239.7h8c0,0.3,0.1,0.6,0.1,0.9c0,0.1,0,0.3,0,0.5c0,0.2,0,0.3-0.1,0.4h-5.9v4.1h4.7
		c0,0.1,0,0.3,0.1,0.4s0,0.3,0,0.5s0,0.3,0,0.5s0,0.3-0.1,0.4h-4.7v5h6.1c0,0.3,0.1,0.6,0.1,0.9c0,0.1,0,0.3,0,0.5
		c0,0.2,0,0.3-0.1,0.4h-8.1V239.7z"/>
	<path class="st0" d="M380.4,239.7c0.1,0,0.3,0,0.5-0.1c0.2,0,0.3,0,0.5,0s0.3,0,0.5,0c0.2,0,0.3,0,0.5,0.1l6.3,10.9v-10.9
		c0.2,0,0.3,0,0.5-0.1c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0.1v14.5c-0.1,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0
		s-0.3,0-0.5,0c-0.2,0-0.3,0-0.5-0.1l-6.3-10.8v10.8c-0.1,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.5,0
		c-0.2,0-0.3,0-0.5-0.1V239.7z"/>
	<path class="st0" d="M399.6,254.4c-1,0-2-0.2-2.7-0.6c-0.8-0.4-1.4-0.9-1.9-1.6s-0.9-1.5-1.1-2.4c-0.2-0.9-0.4-1.9-0.4-3
		s0.1-2.1,0.4-3c0.2-0.9,0.6-1.7,1.1-2.4s1.1-1.2,1.9-1.6c0.8-0.4,1.7-0.6,2.7-0.6c1,0,2,0.2,2.7,0.6c0.8,0.4,1.4,0.9,1.9,1.6
		c0.5,0.7,0.9,1.5,1.1,2.4s0.4,1.9,0.4,3s-0.1,2.1-0.4,3c-0.2,0.9-0.6,1.7-1.1,2.4c-0.5,0.7-1.1,1.2-1.9,1.6
		C401.6,254.2,400.7,254.4,399.6,254.4z M399.6,252.7c0.7,0,1.3-0.1,1.7-0.4s0.9-0.6,1.2-1.1s0.6-1.1,0.7-1.8s0.2-1.5,0.2-2.4
		c0-0.9-0.1-1.7-0.2-2.4s-0.4-1.3-0.7-1.8s-0.7-0.9-1.2-1.1c-0.5-0.3-1.1-0.4-1.7-0.4c-0.7,0-1.3,0.1-1.7,0.4
		c-0.5,0.3-0.9,0.6-1.2,1.1s-0.6,1.1-0.7,1.8s-0.2,1.5-0.2,2.4c0,0.9,0.1,1.7,0.2,2.4s0.4,1.3,0.7,1.8s0.7,0.9,1.2,1.1
		S399,252.7,399.6,252.7z"/>
	<path class="st0" d="M410.5,241.5h-3.8c0-0.1,0-0.3-0.1-0.4c0-0.2,0-0.3,0-0.5s0-0.3,0-0.5c0-0.2,0-0.3,0.1-0.4h9.6
		c0,0.1,0,0.3,0.1,0.4c0,0.1,0,0.3,0,0.4c0,0.1,0,0.3,0,0.5c0,0.2,0,0.3-0.1,0.5h-3.8v12.7c-0.3,0-0.6,0.1-1,0.1c-0.4,0-0.7,0-1-0.1
		V241.5z"/>
	<path class="st0" d="M423.3,239.7h7.6c0,0.1,0,0.3,0.1,0.4c0,0.2,0,0.3,0,0.5s0,0.3,0,0.5c0,0.2,0,0.3-0.1,0.4h-5.5v4.3h4.6
		c0,0.1,0,0.3,0.1,0.5c0,0.2,0,0.3,0,0.5c0,0.1,0,0.3,0,0.5c0,0.2,0,0.3-0.1,0.5h-4.6v6.6c-0.2,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0
		c-0.2,0-0.4,0-0.5,0c-0.2,0-0.3,0-0.5-0.1V239.7z"/>
	<path class="st0" d="M439.1,254.4c-1,0-2-0.2-2.7-0.6s-1.4-0.9-1.9-1.6s-0.9-1.5-1.1-2.4c-0.2-0.9-0.4-1.9-0.4-3s0.1-2.1,0.4-3
		c0.2-0.9,0.6-1.7,1.1-2.4s1.1-1.2,1.9-1.6c0.8-0.4,1.7-0.6,2.7-0.6c1,0,2,0.2,2.7,0.6c0.8,0.4,1.4,0.9,1.9,1.6
		c0.5,0.7,0.9,1.5,1.1,2.4c0.2,0.9,0.4,1.9,0.4,3s-0.1,2.1-0.4,3c-0.2,0.9-0.6,1.7-1.1,2.4c-0.5,0.7-1.1,1.2-1.9,1.6
		C441,254.2,440.1,254.4,439.1,254.4z M439.1,252.7c0.7,0,1.3-0.1,1.7-0.4s0.9-0.6,1.2-1.1s0.6-1.1,0.7-1.8s0.2-1.5,0.2-2.4
		c0-0.9-0.1-1.7-0.2-2.4s-0.4-1.3-0.7-1.8s-0.7-0.9-1.2-1.1c-0.5-0.3-1.1-0.4-1.7-0.4c-0.7,0-1.3,0.1-1.7,0.4
		c-0.5,0.3-0.9,0.6-1.2,1.1s-0.6,1.1-0.7,1.8s-0.2,1.5-0.2,2.4c0,0.9,0.1,1.7,0.2,2.4s0.4,1.3,0.7,1.8s0.7,0.9,1.2,1.1
		C437.8,252.5,438.4,252.7,439.1,252.7z"/>
	<path class="st0" d="M448,239.7c0.3,0,0.7-0.1,1-0.1c0.4,0,0.7,0,1,0.1v8.2c0,0.8,0.1,1.5,0.2,2.1c0.1,0.6,0.3,1.1,0.5,1.4
		c0.2,0.4,0.6,0.6,1,0.8c0.4,0.2,0.9,0.3,1.5,0.3s1.1-0.1,1.5-0.3s0.7-0.4,0.9-0.8c0.2-0.4,0.4-0.8,0.5-1.4c0.1-0.6,0.2-1.3,0.2-2.1
		v-8.2c0.3,0,0.7-0.1,1-0.1c0.4,0,0.7,0,1,0.1v8.6c0,1-0.1,1.8-0.3,2.6c-0.2,0.8-0.5,1.4-0.9,1.9c-0.4,0.5-0.9,0.9-1.6,1.2
		c-0.7,0.3-1.5,0.4-2.4,0.4c-0.9,0-1.7-0.1-2.4-0.4c-0.7-0.3-1.2-0.7-1.6-1.2c-0.4-0.5-0.7-1.2-0.9-1.9c-0.2-0.8-0.3-1.6-0.3-2.6
		V239.7z"/>
	<path class="st0" d="M461.8,239.7c0.1,0,0.3,0,0.5-0.1c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0.1l6.3,10.9v-10.9
		c0.2,0,0.3,0,0.5-0.1c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0,0.5,0c0.2,0,0.3,0,0.5,0.1v14.5c-0.1,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0
		c-0.1,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.5-0.1l-6.3-10.8v10.8c-0.1,0-0.3,0-0.5,0.1c-0.2,0-0.3,0-0.5,0c-0.2,0-0.3,0-0.5,0
		c-0.2,0-0.3,0-0.5-0.1V239.7z"/>
	<path class="st0" d="M475.5,239.7c0.5-0.1,1-0.1,1.7-0.2s1.3-0.1,1.9-0.1c2.5,0,4.4,0.6,5.7,1.9c1.3,1.3,1.9,3.1,1.9,5.6
		c0,2.5-0.6,4.4-1.9,5.6c-1.3,1.2-3.2,1.8-5.7,1.8c-0.6,0-1.3,0-1.9-0.1c-0.6,0-1.1-0.1-1.6-0.2V239.7z M477.5,252.5
		c0.2,0,0.4,0.1,0.7,0.1c0.3,0,0.6,0,0.9,0c0.8,0,1.5-0.1,2.2-0.3s1.2-0.5,1.7-0.9c0.5-0.4,0.8-1,1.1-1.7c0.3-0.7,0.4-1.6,0.4-2.7
		c0-1-0.1-1.9-0.4-2.6c-0.3-0.7-0.6-1.3-1.1-1.7c-0.5-0.4-1-0.8-1.7-1s-1.4-0.3-2.1-0.3c-0.3,0-0.5,0-0.8,0c-0.3,0-0.6,0-0.8,0.1
		V252.5z"/>
</g>
</svg>
'
?>