<?php /* Smarty version Smarty-3.1.5, created on 2012-02-18 21:58:14
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304094f400499cc0403-08768068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1329596713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304094f400499cc0403-08768068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4f400499de30c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f400499de30c')) {function content_4f400499de30c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title>eBulletin Login Form</title>
		<link href="./css/login-box.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div style="width: 485px; margin: 20px auto">
			<div id="login-box">

				<H1>Members Login</H1>

				<br />
						<div id="login-box-name" style="margin-top:20px;">
                        	Username:
						</div>
                        <form method="post" action="">
                        <div id="login-box-field" style="margin-top:20px;">
							<input name="username" class="form-login" title="Username" value="" size="30" maxlength="2048" />
                        </div>
						<div id="login-box-name">Password:</div><div id="login-box-field">
							<input name="password" type="password" class="form-login" title="Password" value="" size="30" />
                        </div>
				<br />
					<span class="login-box-options">
						<a href="#" style="margin-left: 0px;">Forgot password?</a>
					</span>
				<br />
				<br />
                	<input type="submit" name="login" value="Login" class=" class="btn-login" />
                    </fo
			</div>
		</div>
	</body>
</html>
<?php }} ?>