<?php 
 namespace app_products;
  class delete extends \setup { 
      function __construct(){
        parent::__construct();
              }
              function Init(){
                // if($this->engine->validatePostForm($this->microtime)){  
                  
                  $actorcode = $this->session->get('actorid');
                  $actorname = $this->session->get('loginuserfulname');
                  $actorcompcode = $this->session->get('companycode');   
                  

                  $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_products SET PROD_STATUS = '0' WHERE PROD_CODE = ".$this->sql->Param('a')." AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')),array($this->keys,$actorcompcode));
            
                  if($stmt == true){
                    
                    $message = "You deleted ".$this->keys." from your products list";
                    $type = "2";
                    $reqcode = $this->keys;
                    $reqtitle = $this->keys;
                    $reqtype = "Deleted Product";
                    $reqicon = "fas fa-box";
                    $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


                    $act_message = "You deleted ".$this->keys." from your products list";
                    $act_type = "2";
                    $act_reqcode = $this->keys;
                    $act_reqtitle = $this->keys;
                    $act_reqtype = "Deleted Product";
                    $act_reqicon = "fas fa-box";
                    $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

                    $alert = $this->engine->alert_SQL("success", "Successful", "Deleted Products Successfully");

                  }else{

                    $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

                  }

                  return true;

                
              }
        } 
 // }
 ?>