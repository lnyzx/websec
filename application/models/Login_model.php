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
        $this -> load -> helper('url');
    }

//    判断密码是否正确
    public function check_pass($username, $password){
        $password = sha1($password);
        $this -> db -> where('username', $username);
        $this -> db -> where('password', $password);
        $query = $this -> db -> get('users');
        if ($query -> num_rows() === 1){
            return True;
        }
        else{
            return False;
        }
    }

    public function is_login(){
        if($_SESSION['admin'] === 'yes'){
            return 1;
        }
        else{
            return 0;
        }
    }
}