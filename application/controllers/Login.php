<?php
/**
 * Created by PhpStorm.
 * User: au1ge
 * Date: 2017/6/22
 * Time: 上午10:49
 */

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model('login_model');
    }

    public function index(){
        $this -> load -> view('templates/header.php');
        $this -> load -> view('pages/login.php');
        $this -> load -> view('templates/footer.php');
    }

    public function check_login(){
//        登录验证，调用model里的check_pass函数
        $username = $this -> input -> post('username');
        $password = $this -> input -> post('password');
        if($this -> login_model -> check_pass($username, $password)){
            echo 'hello world';
        }
        else{
            $this -> wrong_pass();
        }
    }

    public function wrong_pass(){
        die('wrong password');
    }
}