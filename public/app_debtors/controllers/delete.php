<?php 
 namespace app_debtors;
  class delete extends \setup { 
      function __construct(){
        parent::__construct();
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  
                  
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');   
          

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_debtors SET DEBT_STATUS = '0' WHERE DEBT_CODE = ".$this->sql->Param('a')." AND DEBT_ACTORCOMPCODE = ".$this->sql->Param('a')),array($this->keys,$actorcompcode));
    
          if($stmt == true){
            
            $message = "You deleted ".$this->keys." from your debtors list";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = "Deleted Debtor";
            $reqtype = "Deleted Debtor";
            $reqicon = "fas fa-users";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You deleted ".$this->keys." from your debtors list";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = "Deleted Debtor";
            $act_reqtype = "Deleted Debtor";
            $act_reqicon = "fas fa-users";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Deleted Debtor ");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
      }
} 
// }
?>