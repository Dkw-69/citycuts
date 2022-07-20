<?php

class Services extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'Our Services' ;

        // load packages model first
        $packages = $this->loadModel('packages');
        // call the get_all method
        $result = $packages->get_all();

        $data['packages'] = $result;
        
        // load images model first
        $images = $this->loadModel('images');
        // call the get_all method
        $result = $images->get_all();

        $data['images'] = $result;
        // load image class fn
        $image_class = $this->loadModel('image_class');
        if(is_array($data['images'])){
            foreach ($data['images'] as $key => $value) {
                $data['images'][$key]->image = $image_class->get_thumbnail($data['images'][$key]->image);
            }
        }
        // call the view method
        $this->view('citycuts-template/services', $data);
    }
}