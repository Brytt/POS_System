<?php 
 namespace app_activitylog;
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


        

        if(isset($this->fdsearch)){ 
          $query = "SELECT * FROM app_activities WHERE ACTV_ACTORCOMPCODE = ".$this->sql->Param('a')." AND ACTV_STATUS = '1' AND ACTV_TITLE LIKE ".$this->sql->Param('a');
          $input =array($actorcompcode,"%".$this->fdsearch."%"); 
        }else{ 
          $query = "SELECT * FROM app_activities WHERE ACTV_STATUS = '1' AND ACTV_ACTORCOMPCODE = ".$this->sql->Param('a');
          $input =array($actorcompcode);
        }
      
        if(!isset($limit)){
          $limit = $this->session->get("limited");
        }else if(empty($limit)){
          $limit =10;
        }
        
        $this->session->set("limited",$limit);
        $lenght = 10;
        $paging = new \OS_Pagination($this->sql,$query,$limit,$lenght,"pg=".$this->pg."&option=".$this->option, isset($input) ?$input:  []);
        
        // var_dump($paging); die();

        return $paging ;

      }
} 

?>