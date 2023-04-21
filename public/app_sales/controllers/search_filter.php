<?php
    
    include '../../../config.php';

    $actorcode = $session->get('actorid');
    $actorname = $session->get('loginuserfulname');
    $actorcompcode = $session->get('companycode');
    $output = "";

    if(isset($_POST["query"]) && $_POST["query"] != ""){


        $stmt = $sql->Execute($sql->Prepare("SELECT * FROM app_customers WHERE CUST_NAME LIKE ".$sql->Param('a')."  AND CUST_STATUS = '1' AND CUST_ACTORCOMPCODE = ".$sql->Param('a')." ORDER BY CUST_NAME DESC LIMIT 10"),array("%".$_POST["query"]."%",$actorcompcode));

        

        if($stmt->RecordCount() > 0){

            $stmt = $stmt->getAll();

            foreach ($stmt as $val){
                $output .= '
                    <a href="javascript:void(0);" onclick="add_customer(\''.$val["CUST_CODE"].'\',\''.$val["CUST_NAME"].'\',\''.$val["CUST_PHONE"].'\')" style="color: #000;text-decoration: none;">
                        <p style="margin-bottom: 0;font-size: 1.2em;border-bottom: 1px solid #d6d6d6;">
                            <i class="fas fa-box" style="color: #18aa75;"></i>
                            '.$val["CUST_NAME"].'
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