<?php
include("controller.php");
    switch($view){
		case "sales_filter":
		   include "views/sales_filter.php";
        break;
        case "sales_report":
            include "views/sales_report.php";
        break;
        case "profit_filter":
		   include "views/profit_filter.php";
        break;
        case "profit_report":
            include "views/profit_report.php";
        break;
        case "loss_filter":
            include "views/loss_filter.php";
        break;
        case "loss_report":
            include "views/loss_report.php";
        break;
        case "expenses_filter":
            include "views/expenses_filter.php";
        break;
        case "expenses_report":
            include "views/expenses_report.php";
        break;        
        // default:
        //     include "views/list.php";
        // break;
    }
?>