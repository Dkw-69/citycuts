<?php

class Packages{
    // get all posts method
    function get_all(){
        // $limit = 3;
        // set query
        $query = "select * from tbl_pricing order by id";
        // get db first
        $DB = new Database();
        $data = $DB->read($query);
            // check if data is true/false
            if($data){
                return $data;
            }
            return false;
    }
}