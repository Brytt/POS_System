<?php 
 namespace app_dashboard;
  class lists extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        $actorcode = $this->session->get('actorid');
        $actorname = $this->session->get('loginuserfulname');
        $actorcompcode = $this->session->get('companycode');

        $earnings_total = 0.00;

        $stmt_earnings = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_sales WHERE SALE_STATUS = '1' AND SALE_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY SALE_DATEADDED DESC"),array($actorcompcode));
        
        $earnings = $stmt_earnings->getAll();
        foreach ($earnings as $val){
          
          $earnings_total  =  round((float)$earnings_total, 2) + round((float)$val['SALE_PROFIT'], 2);

        }


        // $earnings = $stmt_earnings->RecordCount();
        $stmt_sales = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_sales WHERE SALE_STATUS = '1' AND SALE_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY SALE_DATEADDED DESC"),array($actorcompcode));   
        $sales = $stmt_sales->RecordCount();


        $stmt_stock = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_products WHERE PROD_STATUS = '1' AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY PROD_DATEADDED DESC"),array($actorcompcode));   
        $stock = $stmt_stock->RecordCount();

        $stmt_outofstock = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_products WHERE PROD_QUANTITY = '0' AND PROD_STATUS = '2' AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY PROD_DATEADDED DESC"),array($actorcompcode));   
        $outofstock = $stmt_outofstock->RecordCount();


        $response = array('earnings'=>$earnings_total, 'sales'=>$sales, 'stock'=>$stock, 'outofstock'=>$outofstock);

        return $response;
      }
 } 
 
?>



<?php


  $action= "app_dashboard\\".(($class_call)? $class_call :"lists"); 
  $result= new $action;
  $result= $result->Init(); 



?>
          
      