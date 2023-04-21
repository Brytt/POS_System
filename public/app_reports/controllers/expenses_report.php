<?php 
 namespace app_reports;
  class expenses_report extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        if($this->engine->validatePostForm($this->microtime)){  
        return true;
        }
      }
 } ?>