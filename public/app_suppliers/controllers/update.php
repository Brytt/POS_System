<?php 
 namespace app_suppliers;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_suppliers SET SUPL_NAME = ".$this->sql->Param('a').", SUPL_PHONE = ".$this->sql->Param('a').", SUPL_EMAIL = ".$this->sql->Param('a').", SUPL_LOCATION = ".$this->sql->Param('a').", SUPL_INFO = ".$this->sql->Param('a')." WHERE  SUPL_CODE = ".$this->sql->Param('a')." AND SUPL_COMPCODE = ".$this->sql->Param('a')),array($this->supplier_name, $this->supplier_phone, $this->supplier_email, $this->supplier_location, $this->supplier_info, $this->keys,$actorcompcode));
          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->supplier_name." of your suppliers";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = $this->supplier_name;
            $reqtype = "Updated Product Supplier";
            $reqicon = "fas fa-folder-plus";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->supplier_name." of your suppliers";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = $this->supplier_name;
            $act_reqtype = "Updated Product Supplier";
            $act_reqicon = "fas fa-folder-plus";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Supplier Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>