<?php
/**
 * Created by PhpStorm.
 * User: Undergo
 * Date: 2017/11/10
 * Time: 13:54
 */
class User_model extends CI_Model {

    public $email;
    public $password;


    public function getUserByAccount($data) {
       $sql = "select * from user where account = ?";
       $query = $this->db->query($sql, $data['account']);
       $row = $query->row();
       echo $row->password;
    }

}