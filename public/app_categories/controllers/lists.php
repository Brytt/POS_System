<?php 
 namespace app_categories;
  class lists extends \setup { 
      public $limit,$fdsearch;
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');

          $stmt_category = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_product_category WHERE CAT_ACTOR_COMPCODE = ".$this->sql->Param('a')."  ORDER BY CAT_DATEADDED DESC"),array($actorcompcode));
          

          if(isset($this->fdsearch)){ 
            $query = "SELECT * FROM app_product_category WHERE CAT_ACTOR_COMPCODE = ".$this->sql->Param('a')." CAT_STATUS = '1' AND CAT_NAME LIKE ".$this->sql->Param('a');
            $input =array($actorcompcode, "%".$this->fdsearch."%"); 
          }else{ 
            $query = "SELECT * FROM app_product_category WHERE CAT_STATUS = '1' AND CAT_ACTOR_COMPCODE = ".$this->sql->Param('a');
            $input =array($actorcompcode);
          }
        
          if(!isset($limit)){
            $limit = $this->session->get("limited");
          }else if(empty($limit)){
            $limit =20;
          }
          
          $this->session->set("limited",$limit);
          $lenght = 10;
          $paging = new \OS_Pagination($this->sql,$query,$limit,$lenght,"pg=".$this->pg."&option=".$this->option, isset($input) ?$input:  []);
          
          // var_dump($paging); die();

          return $paging ;

        }
 } 
 
?>