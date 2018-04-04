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
        $this->load->view('pages/article');
        $this -> load -> view('templates/footer');
    }

    public function __construct()
    {
        parent::__construct();
        $this -> load -> model('article_model');
        $cate = $this -> article_model -> get_category();
        $data['cate'] = $cate;
        $this -> load -> view('templates/header', $data);
    }

    public function show_articles($page){
        $num = $page * 15;
        $row  = $this -> article_model -> get_articles($num);
        $this -> output
            -> set_content_type('application/json', 'utf-8')
            -> set_output(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }

    public function all_articles(){
        $row  = $this -> article_model -> all_articles();
        $this -> output
            -> set_content_type('application/json', 'utf-8')
            -> set_output(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }

    public function get_pages(){
        $num = $this -> article_model -> get_nums();
        $row = intval($num / 15) + 1;
        $this -> output
            -> set_content_type('application/json', 'utf-8')
            -> set_output(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));

    }

    public function page(){
        $this->load->view('pages/article');
        $this -> load -> view('templates/footer');
    }
//显示页面
    public function search($key){
        $this->load->view('pages/search');
        $this -> load -> view('templates/footer');
    }
//查询接口
    public function get_search(){
        $key = $this -> input -> post('key');
        $page = $this -> input -> post('page');
        $page = $page * 15;
        $row = $this -> article_model -> get_search($key, $page);
        $this -> output
            -> set_content_type('application/json', 'utf-8')
            -> set_output(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }
//搜索页面数量接口
    public function search_page(){
        $key = $this -> input -> post('key');
        $num = $this -> article_model -> search_page($key);
        $row = intval($num / 15) + 1;
        $this -> output
            -> set_content_type('application/json', 'utf-8')
            -> set_output(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    }
}
