<?php

class About extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'About Us' ;
        // load packages model first
        $packages = $this->loadModel('packages');
        // call the get_all method
        $result = $packages->get_all();

        $data['packages'] = $result;
        // call the view method
        $this->view('citycuts-template/about-us', $data);
    }
}