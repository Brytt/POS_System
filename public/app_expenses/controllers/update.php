<?php 
 namespace app_expenses;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          
          $expense_amounttopay = (float)$this->expense_amountpaid + (float)$this->expense_amounttopay;
          $expense_amounttopay = (string)$expense_amounttopay;
          

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_expenses SET EXPS_AMOUNTPAID = ".$this->sql->Param('a')." WHERE  EXPS_CODE = ".$this->sql->Param('a')." AND EXPS_ACTORCOMPCODE = ".$this->sql->Param('a')),array($expense_amounttopay, $this->keys, $actorcompcode));
          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You added ".$this->expense_amounttopay." of your expense of code ".$this->keys;
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = "Made Payment Topup";
            $reqtype = "Updated Expense [:Expense Payment]";
            $reqicon = "fas fa-folder-plus";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You added ".$this->expense_amounttopay." of your expense of code ".$this->keys;
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = "Made Payment Topup";
            $act_reqtype = "Updated Expense [:Expense Payment]";
            $act_reqicon = "fas fa-folder-plus";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Expense Payment Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>