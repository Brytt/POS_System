<?php 
 namespace app_settings;
  class lists extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){

        
        $actorcode = $this->session->get('actorid');
        $actorname = $this->session->get('loginuserfulname');
        $actorcompcode = $this->session->get('actor_compcode');
      

        $stmt = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_companies WHERE COMP_CODE=".$this->sql->Param('a')." AND COMP_STATUS='1' "),array($actorcompcode));
        
        if($stmt->RecordCount() > 0){

          $obj= $stmt->FetchNextObject();

          // var_dump($obj);
          return $obj;
        }
        
      
        
      }
 } ?>