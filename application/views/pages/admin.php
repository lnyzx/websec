<h2>hello my admin <small>hello world</small></h2>
<form method="post" enctype='application/json' action='index.php?/admin/add_article' class='form-horizontal' role="form">
<!--文章标题表单-->
    <div class='form-group'>
        <label for="title" class="col-sm-5 control-label"></label>
        <div class='col-sm-2'>
            <input type='text' name='title' class='form-control' id='title' placeholder="文章标题">
        </div>
    </div>
<!--文章链接-->
    <div class='form-group'>
        <label for="url" class="col-sm-5 control-label"></label>
        <div class='col-sm-2'>
            <input type='text' name='url' class='form-control' id='url' placeholder="文章链接">
        </div>
    </div>
<!--文章简介-->
    <div class='form-group'>
        <label for="description" class="col-sm-5 control-label"></label>
        <div class="col-sm-2">
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="文章简介"></textarea>
        </div>
    </div>
<!--文章类型-->
    <div class="form-group">
        <label for="category" class="col-sm-5 control-label"></label>
        <div class="col-sm-2">
            <select name="category" id="category" class="form-control">
                <option>xss</option>
                <option>注入</option>
            </select>
        </div>
    </div>
<!--提交按钮-->
    <div class='form-group'>
        <div class="col-sm-offset-5 col-sm-2">
            <button type="submit" class="btn btn-info btn-sm btn-block">提交</button>
        </div>
    </div>

</form>

<?php
?>