<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autoloadpage {

    public function __construct($content)
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('menu');
        $this->load->view($content);
        $this->load->view('footer');
    }
}