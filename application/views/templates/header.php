<!DOCTYPE html>
<html>
<head>
    <title>Web security</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/load_category4menu.js"></script>

    <script src="js/jquery.twbsPagination.min.js"></script>
    <script src="js/search_form.js"></script>
    <link href="css/login.css" rel="stylesheet" style="text/css"/>


</head>

<body style="padding: 50px;">
<!--导航栏-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Web-Sec-Au1ge</a></li>
                <li><a href="index.php">主页</a></li>
                <li><a href="http://www.au1ge.xyz">博客</a></li>
                <li><a href="index.php?/login">登录</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        文章分类 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" id="category">
                        <li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <div class="navbar-form navbar-left" role="search">
                    <input type="text" class="form-control" placeholder="Search" id="search">
                    <button type="button" id="search_button" class="btn btn-default">搜索</button>
            </div>
        </div>

    </div>

</nav>