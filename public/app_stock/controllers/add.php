<?php 
 namespace app_stocks;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        if($this->engine->validatePostForm($this->microtime)){  
        return true;
        }
      }
 } ?>