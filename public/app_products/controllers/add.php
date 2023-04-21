<?php 
 namespace app_products;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          $product_supplier_code = "";
          $product_supplier_name = "";
          $product_category_code = "";
          $product_category_name = "";


          $product_supplier = explode("@@",$this->product_supplier);
          $product_category = explode("@@",$this->product_category);

          if(!empty($product_supplier) && !empty($product_supplier[1]) && !empty($product_category) && !empty($product_category[1])){
            if($product_supplier[1] != "" && $product_supplier[1] != null && $product_category[1] != "" && $product_category[1] != null){
              $product_supplier_code = $product_supplier[0];
              $product_supplier_name = $product_supplier[1];
              $product_category_code = $product_category[0];
              $product_category_name = $product_category[1];
            }
          }


          $gen_prod_code =  $this->engine->generateCode_SQL("app_products", "PRO", "PROD_CODE", "PROD_ID");
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');

          $stmt =$this->sql->Execute($this->sql->Prepare("INSERT INTO app_products (PROD_CODE, PROD_NAME, PROD_SPECCODE, PROD_SUPPLIER_CODE, PROD_SUPPLIER_NAME, PROD_PURCHASEPRICE, PROD_SALESPRICE, PROD_DESCRIPTION,PROD_TAXRATE, PROD_QUANTITY, PROD_MINQUANTITY, PROD_CATEGORY_CODE, PROD_CATEGORY_NAME, PROD_ACTORCODE, PROD_ACTORCOMPCODE, PROD_STATUS) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),array($gen_prod_code, $this->product_name, $this->product_speccode, $product_supplier_code, $product_supplier_name, $this->product_purchaseprice, $this->product_salesprice, $this->product_description, $this->product_taxrate, $this->product_quantity, $this->product_minquantity, $product_category_code, $product_category_name, $actorcode, $actorcompcode,"1"));
          
          print $this->sql->ErrorMsg();

          if($stmt == true){
            
            $message = "You added ".$this->product_name." a list of your products";
            $type = "2";
            $reqcode = $gen_prod_code;
            $reqtitle = $this->product_name;
            $reqtype = "Added Product list of Products";
            $reqicon = "fas fa-box";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You added ".$this->product_name." a list of your products";
            $act_type = "2";
            $act_reqcode = $gen_prod_code;
            $act_reqtitle = $this->product_name;
            $act_reqtype = "Added Product list of Products";
            $act_reqicon = "fas fa-box";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Added Product Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;
        }
      }
  //} 
?>