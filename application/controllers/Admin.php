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
        $cate = $this -> article_model -> get_category();
        $data['cate'] = $cate;
        $this -> load -> view('templates/header', $data);
    }

    public function index(){
        $cate = $this -> article_model -> get_category();
        $data['cate'] = $cate;
        $this -> load -> view('pages/admin', $data);
        $this -> load -> view('templates/footer');
        if(!$this -> login_model -> is_login()){
            redirect('/login');
            die();
        };

    }

    public function add_article(){
        if ($this -> session -> userdata('admin') !== 'yes'){
            redirect('/login');
            die();
        }
        $data = $_POST;
        $today = date("Y-m-d");
        if ($data['introduction'] == ''){
            $data['introduction'] = $data['title'];
        }
        $data['time'] = $today;
        if ($data['title'] === '' && $data['url'] === ''){
            redirect('/admin');
        }
        if ($data['new_category'] != ''){
            $data['category'] = $data['new_category'];
            unset($data['new_category']);
        }
        else{
            unset($data['new_category']);
        }
        $this -> article_model -> add_article($data);
        redirect('/admin');
    }

    public function update_article(){
        if ($this -> session -> userdata('admin') !== 'yes'){
            redirect('/login');
            die();
        }
        $data = $_POST;
//        $today = date("Y-m-d");
//        $data['time'] = $today;
        if ($data['title'] === '' && $data['url'] === ''){
            redirect('/admin');
        }
        $this -> article_model -> update_article($data);
    }
}
