<form action='index.php?/login/check_login' method='post' class='form-horizontal' role="form" id="loginform">
    <div class='form-group'>
        <label for="username" class="col-sm-5 control-label"></label>
        <div class='col-sm-2'>
            <h4 id="loginh4">Please Login</h4>
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
</form>
