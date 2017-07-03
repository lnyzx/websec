<form action='index.php?/login/check_login' method='post' class='form-horizontal' role="form">
    <div class='form-group'>
        <label for="username" class="col-sm-5 control-label"></label>
        <div class='col-sm-2'>
            <input type='text' name='username' class='form-control' id='username' placeholder="用户名">
        </div>
    </div>
    <div class='form-group'>
        <label for="password" class="col-sm-5 control-label"></label>
        <div class='col-sm-2'>
            <input type='password' name='password' class='form-control' id='password' placeholder="密码">
        </div>
    </div>
    <div class='form-group'>
        <div class="col-sm-offset-5 col-sm-2">
            <button type="submit" class="btn btn-info btn-sm btn-block">登录</button>
        </div>
    </div>
<!--    测试用，管理员登录-->
    <div class="form-group">
        <div class="col-sm-offset-5 col-sm-2">
            <a href="index.php?/login/test_login" class="btn btn-info btn-sm btn-block">test</a>
        </div>
    </div>
</form>