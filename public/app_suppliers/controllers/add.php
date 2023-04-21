<?php 
 namespace app_suppliers;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  
          $gen_sup_code =  $this->engine->generateCode_SQL("app_suppliers", "SUP", "SUPL_CODE", "SUPL_ID");
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');

          


          $stmt =$this->sql->Execute($this->sql->Prepare("INSERT INTO app_suppliers (SUPL_CODE, SUPL_NAME, SUPL_PHONE, SUPL_EMAIL, SUPL_LOCATION, SUPL_INFO, SUPL_ACTORCODE, SUPL_COMPCODE, SUPL_STATUS) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),array($gen_sup_code, $this->supplier_name, $this->supplier_phone, $this->supplier_email, $this->supplier_location, $this->supplier_info,$actorcode, $actorcompcode,"1"));
          print $this->sql->ErrorMsg();

          if($stmt == true){
            
            $message = "You added ".$this->supplier_name." a list of your suppliers";
            $type = "2";
            $reqcode = $gen_sup_code;
            $reqtitle = $this->supplier_name;
            $reqtype = "Added Product Supplier";
            $reqicon = "fas fa-folder-plus";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You added ".$this->supplier_name." a list of your suppliers";
            $act_type = "2";
            $act_reqcode = $gen_sup_code;
            $act_reqtitle = $this->supplier_name;
            $act_reqtype = "Added Product Supplier";
            $act_reqicon = "fas fa-folder-plus";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Added Supplier Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;
         }
      }
 //} 
 ?>