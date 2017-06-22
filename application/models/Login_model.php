<?php
/**
 * Created by PhpStorm.
 * User: au1ge
 * Date: 2017/6/22
 * Time: 上午10:50
 */

class Login_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }

    public function check_pass($username, $password){
        $sql = 'SELECT * from users';
        return False;
    }
}