<?php 
 namespace app_settings;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
       // if($this->engine->validatePostForm($this->microtime)){  
        $gen_cat_code =  $this->engine->generateCode_SQL("app_product_category", "CAT", "CAT_CODE", "CAT_ID");
        $actorcode = $this->session->get('actorid');
        $actorname = $this->session->get('loginuserfulname');
        $actorcompcode = $this->session->get('actor_compcode');

        $stmt =$this->sql->Execute($this->sql->Prepare("INSERT INTO app_product_category (CAT_CODE, CAT_NAME, CAT_DESCRIPTION, CAT_ACTORCODE, CAT_ACTOR_COMPCODE, CAT_STATUS) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),array($gen_cat_code, $this->category_name, $this->category_description, $actorcode, $actorcompcode,"1"));
        print $this->sql->ErrorMsg();

        if($stmt == true){
          
          $message = "You added ".$this->category_name." a list of your categories";
          $type = "2";
          $reqcode = $gen_cat_code;
          $reqtitle = $this->category_name;
          $reqtype = "Added Product Category";
          $reqicon = "fas fa-folder-plus";
          $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


          $act_message = "You added ".$this->category_name." a list of your categories";
          $act_type = "2";
          $act_reqcode = $gen_cat_code;
          $act_reqtitle = $this->category_name;
          $act_reqtype = "Added Product Category";
          $act_reqicon = "fas fa-folder-plus";
          $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

          $alert = $this->engine->alert_SQL("success", "Successful", "Added Category Successfully");

        }else{

          $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

        }

        return true;
       }
    }
//} 
?>