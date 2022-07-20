<?php

class Home extends Controller{
    // default fallback method 
    public function index(){
        // $image_class = $this->loadModel("image_class");
        // set page title
        $data['page_title'] = 'Home' ;
        // call the view method
        // load packages model first
        $packages = $this->loadModel('packages');
        // call the get_all method
        $result = $packages->get_all();

        $data['packages'] = $result;
        $this->view('citycuts-template/index', $data);
    }
}