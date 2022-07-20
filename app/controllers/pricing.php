<?php

class Pricing extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'Pricing' ;
        // load packages model first
        $packages = $this->loadModel('packages');
        // call the get_all method
        $result = $packages->get_all();

        $data['packages'] = $result;
        // call the view method
        $this->view('citycuts-template/pricing', $data);
    }
}