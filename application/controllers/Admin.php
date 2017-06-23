<?php
/**
 * Created by PhpStorm.
 * User: au1ge
 * Date: 2017/6/20
 * Time: 下午2:38
 */

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this -> load -> library('session');
        $this -> load -> model('login_model');
    }

    public function index(){
        $this -> load -> view('templates/header');
        $this -> load -> view('pages/admin');
        $this -> load -> view('templates/footer');
        $this -> login_model -> is_login();

    }

    public function show_articles(){
        pass;
    }


}
