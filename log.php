<?php
date_default_timezone_set('Asia/Shanghai');
$ip = $_SERVER["REMOTE_ADDR"];
$filename = $_SERVER['PHP_SELF'];
$parameter = $_SERVER["QUERY_STRING"];
$time = date('Y-m-d H:i:s',time());
$logadd = '[+] TIME: '.$time.' IP: '.$ip.' URL: '.$filename.'?'.$parameter."\r\n";
$f = fopen("log.txt", "a");
fwrite($f, $logadd);
fclose($f);
