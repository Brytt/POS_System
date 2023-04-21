<?php 
 namespace app_debtors;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          
          // $crypt = new \Crypt();
          // $staff_accountpassword = $crypt->loginPassword($this->staff_accountemail,$this->staff_accountpassword);


          $stmt =$this->sql->Execute($this->sql->Prepare("UPDATE app_debtors SET  DEBT_NAME = ".$this->sql->Param('a').",DEBT_CONTACT = ".$this->sql->Param('a').",DEBT_EMAIL = ".$this->sql->Param('a').",DEBT_ADDRESS = ".$this->sql->Param('a').",DEBT_AMOUNT = ".$this->sql->Param('a')." WHERE  DEBT_CODE = ".$this->sql->Param('a')." AND DEBT_ACTORCOMPCODE = ".$this->sql->Param('a')),array($this->debt_name,  $this->debt_contact, $this->debt_email, $this->debt_address, $this->debt_amount, $this->keys, $actorcompcode));
          print $this->sql->ErrorMsg();



            // DEBT_NAME,
            // DEBT_CONTACT,
            // DEBT_EMAIL,
            // DEBT_ADDRESS,
            // DEBT_AMOUNT,
            // DEBT_ACTORCODE,  
            // DEBT_ACTORCOMPCODE,
            // DEBT_STATUS) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),array($this->debt_name, $this->debt_contact, $this->debt_email, $this->debt_address, $this->debt_amount,$actorcode, $actorcompcode,"1"));
            //  print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->debt_name." of your Debtors list";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = "Updated Debtors Details"; 
            $reqtype = "Updated Debtors Details";
            $reqicon = "fas fa-users";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->debt_name." of your Debtors list";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = "Updated Debtors Details"; 
            $act_reqtype = "Updated Debtors Details";
            $act_reqicon = "fas fa-users";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Staff Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>