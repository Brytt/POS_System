<?php 
 namespace app_messages;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_product_category SET CAT_NAME = ".$this->sql->Param('a').", CAT_DESCRIPTION = ".$this->sql->Param('a')." WHERE  CAT_CODE = ".$this->sql->Param('a')." AND CAT_ACTOR_COMPCODE = ".$this->sql->Param('a')),array($this->category_name, $this->category_description,$this->keys,$actorcompcode));
          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->category_name." of your categories";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = $this->category_name;
            $reqtype = "Updated Product Category";
            $reqicon = "fas fa-folder-plus";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->category_name." of your categories";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = $this->category_name;
            $act_reqtype = "Updated Product Category";
            $act_reqicon = "fas fa-folder-plus";
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