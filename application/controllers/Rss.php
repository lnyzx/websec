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
        header("Content-type: application/rss+xml");
        $query  = $this -> article_model -> all_articles_rss();

        echo <<<rss_start
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
<title>Lnyas`s WebSec</title>  
<link>http://182.254.247.127/websec/</link>  
<description>Focus on Web Security</description>  
<language>en-us</language>
<atom:link href="http://182.254.247.127/websec/index.php?/rss" rel="self" type="application/rss+xml" />
rss_start;
        foreach($query as $row){
            $title = htmlspecialchars($row->title);
            $desc = htmlspecialchars($row->introduction);
            $link = htmlspecialchars($row->url);
            $time = strtotime($row->time);
            $time = date("D, d M y H:i:s O", $time);
            echo <<<item
    
    <item>
      <title>{$title}</title>
      <description>{$desc}</description>
      <link>{$link}</link>
      <guid>{$link}</guid>
      <pubDate>{$time}</pubDate>
    </item>  
item;
        }
        echo <<<rss_end
        
  </channel>
</rss>  
rss_end;

    }

}