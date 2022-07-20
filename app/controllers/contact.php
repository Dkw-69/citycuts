<?php

class Contact extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'Contact Us' ;
        if(!empty($_POST["submit"])) {
            // load sendmail model
            $email = $this->loadModel('send_mail');
            $email->send();
        }
        // call the view method
        $this->view('citycuts-template/contact', $data);
    }
}
