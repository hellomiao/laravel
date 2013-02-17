<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">

	{{ HTML::style(URL::$base.'/bundles/admin/bootstrap.css') }}

</head>
<body>
    <form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">用户名</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="输入您的用户名">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">密码</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="输入您的密码">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
    
      <button type="submit" class="btn">登录</button>
    </div>
  </div>
</form>
</body>
</html>