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
        $this -> load -> model('article_model');
        $this -> load -> model('login_model');
        $this -> load -> library('session');
        $this -> load -> helper('url');
        $cate = $this -> article_model -> get_category();
        $data['cate'] = $cate;
        $this -> load -> view('templates/header', $data);
    }

    public function index(){
        if($this -> login_model -> is_login()){
            redirect('/admin');
            die();
        }
        $this -> load -> view('pages/login.php');
        $this -> load -> view('templates/footer.php');
    }

    public function check_login(){
//        登录验证，调用model里的check_pass函数
        $username = $this -> input -> post('username');
        $password = $this -> input -> post('password');
        if($this -> login_model -> check_pass($username, $password)){
            $this -> session -> set_userdata('admin', 'yes');
            redirect('/admin');
            die();
        }
        else{
            $this -> session -> set_userdata('admin', 'no');
            $this -> wrong_pass();
        }
    }

    public function wrong_pass(){
        die('wrong password');
    }

}