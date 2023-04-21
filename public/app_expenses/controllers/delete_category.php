<?php 
 namespace app_expenses;
  class delete_category extends \setup { 
      function __construct(){
        parent::__construct();
              }
              function Init(){
                // if($this->engine->validatePostForm($this->microtime)){  
                  
                  $actorcode = $this->session->get('actorid');
                  $actorname = $this->session->get('loginuserfulname');
                  $actorcompcode = $this->session->get('companycode');   
                  

                  $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_expensecategory SET EXCAT_STATUS
                  = '0' WHERE EXCAT_CODE = ".$this->sql->Param('a')." AND EXCAT_ACTORCOMPCODE = ".$this->sql->Param('a')),array($this->keys,$actorcompcode));
            
                  if($stmt == true){
                    
                    $message = "You deleted ".$this->keys." from your expenses categories";
                    $type = "2";
                    $reqcode = $this->keys;
                    $reqtitle = "Deleted Expense";
                    $reqtype = "Deleted Expense";
                    $reqicon = "fas fa-folder-plus";
                    $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


                    $act_message = "You deleted ".$this->keys." from your expenses categories";
                    $act_type = "2";
                    $act_reqcode = $this->keys;
                    $act_reqtitle = "Deleted Expense";
                    $act_reqtype = "Deleted Expense";
                    $act_reqicon = "fas fa-folder-plus";
                    $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

                    $alert = $this->engine->alert_SQL("success", "Successful", "Deleted Category Successfully");

                  }else{

                    $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

                  }

                 
                  
          
                    $stmt_expensecategory = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_expensecategory WHERE EXCAT_STATUS = '1' AND EXCAT_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY EXCAT_DATEADDED DESC"),array($actorcompcode));
                    $stmt_expensecategory = $stmt_expensecategory->getAll();

                    $response = array('stmt_expensecategory'=>$stmt_expensecategory);

                    return $response;

                
              }
        } 
 // }
 ?>