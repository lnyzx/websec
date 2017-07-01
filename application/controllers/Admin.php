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
        $this -> load -> model('article_model');
    }

    public function index(){
        $this -> load -> view('templates/header');
        $this -> load -> view('pages/admin');
        $this -> load -> view('templates/footer');
        if(!$this -> login_model -> is_login()){
            redirect('/login');
        };

    }

    public function show_articles(){
        $row  = $this -> article_model -> get_articles();
        $this -> output
            -> set_content_type('application/json')
            -> set_output(json_encode($row));
    }

    public function add_article(){
        $data = file_get_contents("php://input");
        echo $data;
//        foreach ($data as $key => $value){
//            echo '1';
//        };
    }
}
