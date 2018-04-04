<script src="js/update.js"></script>
<div id="admin_form">
    <form method="post" action='index.php?/admin/add_article' class='form-horizontal' role="form">
    <!--文章标题表单-->
        <div class='form-group'>
            <label for="title" class="col-sm-5 control-label"></label>
            <div class='col-sm-3'>
                <h3 id="loginh4">HELLO <small>ADMIN</small></h3>
                <input type='text' name='title' class='form-control' id='title' placeholder="文章标题">
            </div>
        </div>
    <!--文章链接-->
        <div class='form-group'>
            <label for="url" class="col-sm-5 control-label"></label>
            <div class='col-sm-3'>
                <input type='text' name='url' class='form-control' id='url' placeholder="文章链接">
            </div>
        </div>
    <!--文章简介-->
        <div class='form-group'>
            <label for="introduction" class="col-sm-5 control-label"></label>
            <div class="col-sm-3">
                <textarea name="introduction" id="introduction" class="form-control" rows="7" placeholder="文章简介, 默认为标题"></textarea>
            </div>
        </div>
    <!--文章类型-->
        <div class="form-group">
            <label for="category" class="col-sm-5 control-label"></label>
            <div class="col-sm-1">
    <!--            加载文章分类-->
<!--                <script type="text/javascript" src="js/load_category.js"></script>-->
                <select name="category" id="category" class="form-control"></select>
            </div>
            <div class="col-sm-2">
                <input type='text' name='new_category' class='form-control' id='new_category' placeholder="新建一个类型">
            </div>
        </div>
    <!--提交按钮-->
        <div class='form-group'>
            <label class="col-sm-5 control-label"></label>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-info btn-sm btn-block">添加</button>
            </div>
            <div class="col-sm-1">
                <input type="button" id="update_button" class="btn btn-info btn-sm btn-block" value="更新"/>
            </div>
        </div>
    </form>
</div>
<?php
?>