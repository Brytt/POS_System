<?php
    
    include '../../../config.php';

    $actorcode = $session->get('actorid');
    $actorname = $session->get('loginuserfulname');
    $actorcompcode = $session->get('companycode');
    $output = "";

    if(isset($_POST["query"]) && $_POST["query"] != ""){


        $stmt = $sql->Execute($sql->Prepare("SELECT * FROM app_products WHERE PROD_NAME LIKE ".$sql->Param('a')." AND PROD_QUANTITY != '0' AND PROD_STATUS = '1' AND PROD_ACTORCOMPCODE = ".$sql->Param('a')." ORDER BY PROD_NAME DESC LIMIT 10"),array("%".$_POST["query"]."%",$actorcompcode));

        

        if($stmt->RecordCount() > 0){

            $stmt = $stmt->getAll();

            foreach ($stmt as $val){
                $output .= '
                    <a href="javascript:void(0);" onclick="add_productdetails(\''.$val["PROD_CODE"].'\',\''.$val["PROD_NAME"].'\',\''.$val["PROD_SALESPRICE"].'\',\''.$val["PROD_QUANTITY"].'\')" style="color: #000;text-decoration: none;">
                        <p style="margin-bottom: 0;font-size: 1.2em;border-bottom: 1px solid #d6d6d6;">
                            <i class="fas fa-box" style="color: #18aa75;"></i>
                            '.$val["PROD_NAME"].'
                        </p>
                    </a>
                ';

                echo $output;
            }


        }else{
            echo 'Data Not Found';
        }

    }
?>