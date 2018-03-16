<?php
/**
 * Created by PhpStorm.
 */

class Rss extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this -> load -> library('session');
        $this -> load -> model('login_model');
        $this -> load -> model('article_model');
    }

    public function index(){
        header("Content-type: application/xml");
        $query  = $this -> article_model -> all_articles_desc();

        echo <<<rss_start
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
<title>Lnyas`s WebSec</title>  
<link>http://182.254.247.127/websec/</link>  
<description>Focus on Web Security</description>  
<language>en-us</language>
rss_start;
        foreach($query as $row){
            $title = htmlspecialchars($row->title);
            $desc = htmlspecialchars($row->introduction);
            $time = htmlspecialchars($row->time);
            $link = htmlspecialchars($row->url);
            echo <<<item
    
    <item>
      <title>{$title}</title>
      <description>{$desc}</description>
      <pubDate>{$time}</pubDate>
      <link>{$link}</link>
    </item>  
item;
        }
        echo <<<rss_end
  <channel>  
</rss>  
rss_end;

    }

}