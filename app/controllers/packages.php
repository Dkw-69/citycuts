<?php

class Packages extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'Add Prices' ;
        // load user model first
        $admin = $this->loadModel('user');
        // check if the admin is logged in first
        if(!$result = $admin->check_logged_in()){
            // all is not good so redirect to login page
            header("Location:".ROOT."login");
            die;
        }

        // check form inputs are set
        if(isset($_POST['title']) && isset($_POST['package_description']) && isset($_POST['price'])){
            // instanciate the upload_file class
            $uploader = $this->loadModel('upload_package');
            // call upload fn
            $uploader->upload($_POST);
        }
        // call the view method
        $this->view('admin-template/pricing_package', $data);
    }
}