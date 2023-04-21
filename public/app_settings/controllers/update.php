<?php 
 namespace app_settings;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('actor_compcode');                    
          
          
          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_companies SET COMP_NAME = ".$this->sql->Param('a').",COMP_PHONE = ".$this->sql->Param('a').", COMP_EMAIL = ".$this->sql->Param('a').", COMP_WEBSITE = ".$this->sql->Param('a').", COMP_LOCATION = ".$this->sql->Param('a').", COMP_ADDRESS = ".$this->sql->Param('a')." WHERE  COMP_CODE = ".$this->sql->Param('a')),array($this->company_name, $this->company_phone, $this->company_email,$this->company_website, $this->company_city,$this->company_address,$this->keys));
          print $this->sql->ErrorMsg();
     

          if($stmt == true){

            $message = "You updated ".$this->company_name." of your setting's details";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = $this->company_name;
            $reqtype = "Updated Settings Details";
            $reqicon = "fas fa-cogs";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->company_name." of your setting's details";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = $this->company_name;
            $act_reqtype = "Updated Settings Details";
            $act_reqicon = "fas fa-cogs";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Settings Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>