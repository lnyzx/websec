<?php
/**
 * Created by PhpStorm.
 * User: au1ge
 * Date: 2017/7/3
 * Time: 上午10:43
 */


class Articles extends CI_Controller {

    public function index()
    {
        $this -> load -> view('templates/header');
        $this->load->view('pages/welcome');
        $this -> load -> view('templates/footer');
    }

    public function __construct()
    {
        parent::__construct();
        $this -> load -> model('article_model');
    }

    public function show_articles(){
        $row  = $this -> article_model -> get_articles();
        $this -> output
            -> set_content_type('application/json', 'utf-8')
            -> set_output(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }
}
