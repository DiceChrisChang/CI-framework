<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//2017年11月13日09:53:32 class是最外面的包裹如 <script>
class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /**
     * http://localhost/ci/index.php/login/index
     */
    public function index()
    {
        $data['title'] = 'login title';
        return $this->load->view('login', $data);
    }

    public function doLogin() {
       if ($_POST) {
        ////////////////////////////////////////
        //echo "<pre>";
        //echo    $this->input->post('email');
        //echo    $this->input->post('password');
        //echo "</pre>";
        ////////////////////////////////////////
           $this->load->model('user_model');
           $this->user_model->getUserByAccount($_POST);
       } else {
           echo "非法操作";
       }
    }

    public function success() {
        echo "success";
    }
}
