<?php 
 namespace app_messages;
  class delete extends \setup { 
      function __construct(){
        parent::__construct();
      }
      function Init(){
        if($this->engine->validatePostForm($this->microtime)){  
        return true;
        }
      }
 } ?>