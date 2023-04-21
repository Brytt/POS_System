<?php 
 namespace app_sales;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        if($this->engine->validatePostForm($this->microtime)){  
          $gen_cust_code =  $this->engine->generateCode_SQL("app_customers", "CUS", "CUST_CODE", "CUST_ID");
          $gen_sale_code =  $this->engine->generateCode_SQL("app_sales", "SAL", "SALE_CODE", "SALE_ID");

          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');


          
          if($this->customer_type == "newcustomer"){

            $stmt =$this->sql->Execute($this->sql->Prepare("INSERT INTO app_customers (CUST_CODE, CUST_NAME, CUST_PHONE, CUST_ADDRESS, CUST_MOREINFO, CUST_ACTORCODE, CUST_ACTORCOMPCODE, CUST_STATUS) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),array($gen_cust_code, $this->custname, $this->custphone, $this->custaddress, $this->custinfo, $actorcode, $actorcompcode,"1"));
            print $this->sql->ErrorMsg();

            $custcode = $gen_cust_code;
            $custname = $this->custname;
            $custphone = $this->custphone;

          }else if($this->customer_type == "oldcustomer"){

            $custcode = $this->customer_name;
            $custname = $this->customer_code;
            $custphone = $this->customer_phone;            

          }
          

        $profit_total = 0.00;
        $products = json_decode($this->productsselected);
        
        foreach( $products as $keyd => $value){ 

          $stmt = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_products WHERE PROD_CODE = ".$this->sql->Param('a')."  AND PROD_STATUS = '1' AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')." ORDER BY PROD_NAME DESC LIMIT 1"),array($value->productcode,$actorcompcode));


          if($stmt->Recordcount() > 0){

            $obj = $stmt->FetchNextObject();

            $current_quantity  =  (int)$obj->PROD_QUANTITY - (int)$value->productquantity;

            $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_products SET PROD_QUANTITY = ".$this->sql->Param('a')." WHERE  PROD_CODE = ".$this->sql->Param('a')." AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')),array($current_quantity, $value->productcode, $actorcompcode));
            print $this->sql->ErrorMsg();

            
            $cost_total  =  round((float)$obj->PROD_PURCHASEPRICE, 2) * round((float)$value->productquantity, 2);

          }

          $profit_total_one  =  round((float)$value->productamttotal, 2) - round((float)$cost_total, 2);

          $profit_total = round((float)$profit_total, 2) + round((float)$profit_total_one, 2);

        }
        


          $stmt =$this->sql->Execute($this->sql->Prepare("INSERT INTO app_sales (
          SALE_CODE,
          SALE_CUSTOMERCODE,
          SALE_CUSTOMERNAME,
          SALE_CUSTOMERPHONE,
          SALE_PRODUCTSLIST,
          SALE_PRODUCTSPRICETOTAL,
          SALE_PRODUCTSTOTAL,
          SALE_DISCOUNTTOTAL,
          SALE_GRANDTOTAL,
          SALE_PAIDAMOUNT,
          SALE_CHANGE,
          SALE_TOTALDUE,
          SALE_PROFIT,
          SALE_ACTORCODE,
          SALE_ACTORCOMPCODE,
          SALE_STATUS) VALUES(
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').",
          ".$this->sql->Param('a').")"),array(
            $gen_sale_code, 
            $custcode, 
            $custname, 
            $custphone, 
            $this->productsselected, 
            $this->totalamount,
            $this->totalproducts, 
            $this->totaldiscount, 
            $this->totalamount, 
            $this->amountpaid, 
            $this->change,             
            $this->totalamount, 
            $profit_total,
            $actorcode, 
            $actorcompcode,
            "1"));

          print $this->sql->ErrorMsg();


          if($stmt == true){
            
            $message = "You added ".$gen_sale_code." a new sale";
            $type = "2";
            $reqcode = $gen_sale_code;
            $reqtitle = "Added NEW SALE";
            $reqtype = "Added NEW SALE";
            $reqicon = "fas fa-cart-plus";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You added ".$gen_sale_code." a new sale";
            $act_type = "2";
            $act_reqcode = $gen_sale_code;
            $act_reqtitle = "Added NEW SALE";
            $act_reqtype = "Added NEW SALE";
            $act_reqicon = "fas fa-cart-plus";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Added Category Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;
         }
      }
 } 
 ?>