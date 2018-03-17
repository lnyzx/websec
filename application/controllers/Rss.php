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
        $this_time = date("Y-m-d\TH:i:sP");

        echo <<<rss_start
<feed xmlns="http://www.w3.org/2005/Atom">
  <title type="text">Lnyas`s WebSec</title>
  <id>http://182.254.247.127/websec/index.php?/rss</id>
  <updated>{$this_time}</updated>
  <link href="http://182.254.247.127/websec/" />
  <link href="http://182.254.247.127/websec/index.php?/rss" rel="self" />
  <author>
    <name>Unknown author</name>
  </author>
  <generator>Lnyas</generator>
rss_start;
        foreach($query as $row){
            $title = htmlspecialchars($row->title);
            $desc = htmlspecialchars($row->introduction);
            $link = htmlspecialchars($row->url);
            $time = strtotime($row->time);
            $time = date("Y-m-d\TH:i:sP", $time);
            echo <<<item
    
  <entry xml:base="http://182.254.247.127/websec/index.php?/rss">
    <title type="text">{$title}</title>
    <id>{$link}</id>
    <updated>{$time}</updated>
    <link href="{$link}" />
    <content type="html">{$desc}</content>
  </entry>
item;
        }
        echo <<<rss_end
        
</feed>
rss_end;

    }

}