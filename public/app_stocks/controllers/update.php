<?php 
 namespace app_stocks;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  


          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_products SET PROD_QUANTITY = ".$this->sql->Param('a')." WHERE  PROD_CODE = ".$this->sql->Param('a')." AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')),array($this->product_quantity, $this->product_code,$actorcompcode));
          print $this->sql->ErrorMsg();
		 

          if($stmt == true){
            
            $message = "You updated-Edit ".$this->product_name." more stock to ".$this->product_quantity." ";
            $type = "2";
            $reqcode = $this->product_code;
            $reqtitle = $this->product_code;
            $reqtype = "Added Product Stock";
            $reqicon = "fas fa-cubes";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated-Edit ".$this->product_name." more stock to ".$this->product_quantity." ";
            $act_type = "2";
            $act_reqcode = $this->product_code;
            $act_reqtitle = $this->product_code;
            $act_reqtype = "Added Product Stock";
            $act_reqicon = "fas fa-cubes";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Added Stock Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;
         }
      }
 //} 
 ?>