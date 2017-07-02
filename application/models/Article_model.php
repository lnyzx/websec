<?php
/**
 * Created by PhpStorm.
 * User: au1ge
 * Date: 2017/6/21
 * Time: 下午5:34
 */

class Article_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }

    public function get_articles(){
        $query = $this -> db -> get('articles');
        return $query -> result();
    }

    public function add_article($post){
        $query = $this -> db -> insert('articles', $post);
    }

    public function get_category(){
        $query = $this -> db -> query('SELECT DISTINCT category FROM articles;');
        return $query -> result();
    }
}