<?php 
 namespace app_debtors;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  
          $gen_debt_code =  $this->engine->generateCode_SQL("app_debtors", "DEBT", "DEBT_CODE", "DEBT_ID");
          $actorcode = $this->session->get('actorid');
          // $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');

          
          
          
          
          
          // $crypt = new \Crypt();
          // $staff_accountpassword = $crypt->loginPassword($this->staff_accountemail,$this->staff_accountpassword);

          


        $stmt =$this->sql->Execute($this->sql->Prepare("INSERT INTO app_debtors (
         DEBT_CODE,
         DEBT_NAME,
         DEBT_CONTACT,
         DEBT_EMAIL,
         DEBT_ADDRESS,
         DEBT_AMOUNT,
         DEBT_ACTORCODE,  
         DEBT_ACTORCOMPCODE,
         DEBT_STATUS) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),array($gen_debt_code, $this->debt_name, $this->debt_contact, $this->debt_email, $this->debt_address, $this->debt_amount,$actorcode, $actorcompcode,"1"));
          print $this->sql->ErrorMsg();

          if($stmt == true){
            
            $message = "You added ".$this->debt_name." to your Debtors list";
            $type = "2";
            $reqcode = $gen_debt_code;
            $reqtitle = "Added Debtor";
            $reqtype = "Added Debtor";
            $reqicon = "fas fa-users";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You added ".$this->debt_name." to your Debtors list";
            $act_type = "2";
            $act_reqcode = $gen_debt_code;
            $act_reqtitle = "Added Debtor";
            $act_reqtype = "Added Debtor";
            $act_reqicon = "fas fa-users";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Added Debtor Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;
         }
      }
 //} 
 ?>