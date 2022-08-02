<?php

class Socialmedia extends CI_Controller{
    
    public function __construct()
    {
        // $this->load->helper("url");
        parent::__construct();
    }

    public function instagram(){
        redirect("www.instagram.com/orsimbrawijaya");
    }

    public function youtube(){
        redirect("https://www.youtube.com/channel/UCKUbs4ecoWPqNlNAoZqCnNw");
    }

    public function line(){
        redirect("https://line.me/R/ti/p/%40qas3529n");
    }

    public function twitter(){
        redirect("http://twitter.com/ORSIM_brawijaya");
    }
}