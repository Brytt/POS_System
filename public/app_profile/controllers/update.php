<?php 
 namespace app_profile;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          




          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_users SET USR_FIRSTNAME = ".$this->sql->Param('a').", USR_OTHERNAME = ".$this->sql->Param('a').", USR_PHONE = ".$this->sql->Param('a').", USR_EMAIL = ".$this->sql->Param('a')." WHERE  USR_CODE = ".$this->sql->Param('a')),array($this->admin_fname, $this->admin_lname, $this->admin_phone, $this->admin_email, $actorcode));
          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->admin_fname."'s user details";
            $type = "2";
            $reqcode = $this->actorcode;
            $reqtitle = $this->admin_fname;
            $reqtype = "Updated User Details";
            $reqicon = "fas fa-user";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->admin_fname."'s user details";
            $act_type = "2";
            $act_reqcode = $this->actorcode;
            $act_reqtitle = $this->admin_fname;
            $act_reqtype = "Updated User Details";
            $act_reqicon = "fas fa-user";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Category Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>