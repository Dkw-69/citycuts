<?php

class Upload_Package{
    // upload method
    function upload($POST){
        // get db first
        $DB = new Database();
        // reset errors
        $_SESSION['error'] = "";
        // check form inputs
        if(isset($POST['title']) && isset($POST['package_description']) && isset($POST['price'])){ //&& in_array($POST,$services)
           // prepare to save to db if no errs
           if($_SESSION['error'] == ""){
            $arr['title'] = $POST['title'];
            $arr['package_description'] = $POST['package_description'];
            $arr['price'] = $POST['price'];
            $arr['service_1'] = $POST['service_1'];
            $arr['service_2'] = $POST['service_2'];
            $arr['service_3'] = $POST['service_3'];
            $arr['service_4'] = $POST['service_4'];
            $arr['service_5'] = $POST['service_5'];
            $arr['service_6'] = $POST['service_6'];
            $arr['service_7'] = $POST['service_7'];
            // write to db
            // SET SQL_MODE = ''; before insert to supress default value errors
            $query = "insert into tbl_pricing (title,package_description,price,service_1,service_2,service_3,service_4,service_5,service_6,service_7) 
                    values (:title,:package_description,:price,:service_1,:service_2,:service_3,:service_4,:service_5,:service_6,:service_7)";
            $data = $DB->write($query, $arr);
            // check if data is true/false
            if($data){
                // all is dandy so redirect to home page
                header("Location:".ROOT."packages");
                die;
            }
        }else{
            $_SESSION['error'] = "Could not upload the package.";
        }
        }
    }
}