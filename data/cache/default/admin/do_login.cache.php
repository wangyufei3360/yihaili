<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/do_login.html', 'cd3a07c36f3ab24ef8f284c2e35bc53e', 1435585581);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统登录</title>
<meta name="keywords" content="<?=$seo['keywords']?>" />
<meta name="description" content="<?=$seo['description']?>" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/admin/css/all.css" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/admin/css/style.css" />
<script src="<?=PATH_URL?>templates/default/admin/js/jquery.js" type="text/javascript"></script>
</head>
<style type="text/css">
body{font-size:12px; margin:0 auto; background:#fff url(<?=PATH_URL?>templates/default/admin/images/adminlogin_bg.gif) repeat-x;}
.center{background:url(<?=PATH_URL?>templates/default/admin/images/adminlogin_bg.jpg) no-repeat center; width:667px; margin:0 auto; height:264px; margin-top:150px; padding-top:70px;}
.input200{border:1px #d1d1d1 solid; background:url(<?=PATH_URL?>templates/default/admin/images/adminlogin_inputbg.gif) repeat-x; width:200px; height:32px; line-height:32px; font-size:14px;}
.center td{padding:10px 0; font-size:14px;color:#555}
.btn{background:url(<?=PATH_URL?>templates/default/admin/images/adminlogin_btn.gif) no-repeat; width:99px; height:36px; border:0; line-height:36px; font-weight:bold; font-size:14px; color:#fff; cursor:pointer}
</style>
<body>
<div class="center">
	<form method="post" action="<?=$action?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="12%" align="right">用户名：</td>
		<td width="88%"><input type="text" name="admin_name" class="input200" /></td>
	</tr>
	<tr>
		<td align="right">密　码：</td>
		<td><input type="password" name="admin_password" class="input200" autocomplete="off" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" class="btn" value="登 录"></td>
	</tr>
	</table>
	</form>
</div>
<script type="text/javascript">
$(function(){
$(":submit").click(function(){
	if ($(":input[name='admin_name']").val() == '') {
		alert('用户名不能为空！')
		return false;
	}
	if ($(":input[name='admin_pw']").val() == '') {
		alert('密码不能为空！')
		return false;
	}
	return true;
})
})
</script>
</body>
</html>