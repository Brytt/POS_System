<?php 
 namespace app_products;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          

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
          
          // $product_supplier = explode("@@",$this->product_supplier);
          // $product_supplier_code = $product_supplier[0];
          // $product_supplier_name = $product_supplier[1];

          // $product_category = explode("@@",$this->product_category);
          // $product_category_code = $product_category[0];
          // $product_category_name = $product_category[1];


          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_products SET 
          PROD_NAME = ".$this->sql->Param('a').", 
          PROD_SPECCODE = ".$this->sql->Param('a').", 
          PROD_SUPPLIER_CODE = ".$this->sql->Param('a').", 
          PROD_SUPPLIER_NAME = ".$this->sql->Param('a').", 
          PROD_PURCHASEPRICE = ".$this->sql->Param('a').", 
          PROD_SALESPRICE = ".$this->sql->Param('a').", 
          PROD_TAXRATE = ".$this->sql->Param('a').",
          PROD_QUANTITY = ".$this->sql->Param('a').", 
          PROD_MINQUANTITY = ".$this->sql->Param('a').", 
          PROD_CATEGORY_CODE = ".$this->sql->Param('a').", 
          PROD_CATEGORY_NAME = ".$this->sql->Param('a')." WHERE  PROD_CODE = ".$this->sql->Param('a')." AND PROD_ACTORCOMPCODE = ".$this->sql->Param('a')),array($this->product_name, $this->product_speccode,$product_supplier_code,$product_supplier_name, $this->product_purchaseprice, $this->product_salesprice,$this->product_taxrate,$this->product_quantity, $this->product_minquantity, $product_category_code,$product_category_name,$this->keys, $actorcompcode));
          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->product_name." of your products list";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = $this->product_name;
            $reqtype = "Updated Product";
            $reqicon = "fas fa-box";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->product_name." of your products list";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = $this->product_name;
            $act_reqtype = "Updated Product";
            $act_reqicon = "fas fa-box";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Product Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>