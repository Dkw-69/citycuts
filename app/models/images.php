<?php

class Images{
    // get all posts method
    function get_all(){
        // set query
        $query = "select * from tbl_gallery order by id desc";
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