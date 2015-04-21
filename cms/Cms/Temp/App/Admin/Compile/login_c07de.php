<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta charset="UTF-8">
<title>后台登录入口</title>
<script type='text/javascript' src='http://localhost/test/hd/v6/cms/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/test/hd/v6/cms/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hd/v6/cms/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/test/hd/v6/cms/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/test/hd/v6/cms/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/test/hd/v6/cms';
		WEB = 'http://localhost/test/hd/v6/cms/index.php';
		URL = 'http://localhost/test/hd/v6/cms/index.php/Admin/Login/login';
		HDPHP = 'http://localhost/test/hd/v6/cms/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/test/hd/v6/cms/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/test/hd/v6/cms/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/test/hd/v6/cms/hdphp/hdphp/Extend';
		APP = 'http://localhost/test/hd/v6/cms/index.php/Admin';
		CONTROL = 'http://localhost/test/hd/v6/cms/index.php/Admin/Login';
		METH = 'http://localhost/test/hd/v6/cms/index.php/Admin/Login/login';
		GROUP = 'http://localhost/test/hd/v6/cms/Cms';
		TPL = 'http://localhost/test/hd/v6/cms/Cms/App/Admin/Tpl';
		CONTROLTPL = 'http://localhost/test/hd/v6/cms/Cms/App/Admin/Tpl/Login';
		STATIC = 'http://localhost/test/hd/v6/cms/Static';
		PUBLIC = 'http://localhost/test/hd/v6/cms/Cms/App/Admin/Tpl/Public';
		HISTORY = 'http://localhost/test/hd/v6/cms/index.php/Admin/Login/out';
		HTTPREFERER = 'http://localhost/test/hd/v6/cms/index.php/Admin/Login/out';
</script>
<script type="text/javascript" src="http://localhost/test/hd/v6/cms/Cms/App/Admin/Tpl/Login/js/js.js"></script>

<link href='http://localhost/test/hd/v6/cms/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hd/v6/cms/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js'></script>
                <!--[if lte IE 6]>
                <link rel="stylesheet" type="text/css" href="http://localhost/test/hd/v6/cms/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
                <![endif]-->
                <!--[if lt IE 9]>
                <script src="http://localhost/test/hd/v6/cms/hdphp/hdphp/Extend/Org/bootstrap/js/html5shiv.min.js"></script>
                <script src="http://localhost/test/hd/v6/cms/hdphp/hdphp/Extend/Org/bootstrap/js/respond.min.js"></script>
                <![endif]-->
</head>
<body>
<div class='title-header'>
	<h3>管理员登陆</h3>
	</div>
	<form method="post" action='http://localhost/test/hd/v6/cms/index.php/Admin/Login/login' class="hd-form">
		<table class="table1">
			<tr>
				<td class='w100'>账户：</td>
				<td><input type='text' name='username' class='w200' /></td>
			</tr>
			<tr>
				<td class='w100'>密码：</td>
				<td><input type='password' name='password' class='w200' /></td>
			</tr>

			<tr>
				<td class='w100'>验证码：</td>
				<td>
				<input type='text' name='code' /> 
				<img src='http://localhost/test/hd/v6/cms/index.php/Admin/Login/code' /> 
				<span id='hd_code'></span>
				</td>				
			</tr>

			<tr>
				<td colspan='2'><input type='submit' value='登陆' class="hd-success" /></td>
			</tr>

		</table>
	</form>
</body>
</html>