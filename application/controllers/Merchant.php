<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//2017年11月13日09:53:32 class是最外面的包裹如 <script>
class Merchant extends CI_Controller {

    public function index() {
        $content = "merchant/list";
        $this->load->library('autoloadpage',$content); 
    }


/*    public function detail() {
        $content = "merchant/detail";
        $this->_loadTemplate($content);

    }*/


/*    private function _loadTemplate($content) {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('menu');
        $this->load->view($content);
        $this->load->view('footer');
    }*/
    
}
