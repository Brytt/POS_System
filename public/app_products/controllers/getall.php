<?php 
 namespace app_products;
  class getall extends \setup { 
      function __construct(){
         parent::__construct(); 
      }
      function Init(){
        
         
         $actorcode = $this->session->get('actorid');
         $actorname = $this->session->get('loginuserfulname');
         $actorcompcode = $this->session->get('companycode');
 
         $stmt_suppliers = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_suppliers WHERE SUPL_STATUS = '1' AND SUPL_COMPCODE = ".$this->sql->Param('a')."  ORDER BY SUPL_DATEADDED DESC"),array($actorcompcode));
         $stmt_suppliers = $stmt_suppliers->getAll();


         $stmt_categories = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_product_category WHERE CAT_STATUS = '1' AND CAT_ACTOR_COMPCODE = ".$this->sql->Param('a')."  ORDER BY CAT_DATEADDED DESC"),array($actorcompcode));   
         $stmt_categories = $stmt_categories->getAll();


         $response = array('stmt_suppliers'=>$stmt_suppliers, 'stmt_categories'=>$stmt_categories);

         return $response;
      }
   } 
?>