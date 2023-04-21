<?php 
 namespace app_categories;
  class details extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){

        $data =  $this->engine->getDataDecrypt($this->keys);
        return $data;
      }
 } ?>