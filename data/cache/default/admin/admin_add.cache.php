<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/admin_add.html', '209ec3ef47cf5e337581a7967b59ee1f', 1435419488);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">修改管理信息</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">管理员 ID：</td>
		<td><?=$info['admin_id']?></td>
	</tr>
	<? if($info['admin_name']=='') { ?>
	<tr>
		<td>管理帐号：</td>
		<td><input type="text" name="admin_name" class="inputtext inputtext_200" /></td>
	</tr>
	<? } else { ?>
	<tr>
		<td>管理帐号：</td>
		<td><input type="text" name="admin_name" value="<?=$info['admin_name']?>" class="inputtext inputtext_200" /></td>
	</tr>
	<? } ?>
	  <tr>
		<td>帐号权限：<span class='f_red'></span></td>
		<td><? if($info['super']==1) { ?>超级管理员<? } else { ?><?=$groupid_select?><? } ?><br /><span class="f_gray">非系统管理员的权限组，系统管理员拥有所有操作权限。</span></td>
	  </tr>
	<tr>
		<td>管理密码：</td>
		<td><input type="password" name="admin_pw" class="inputtext inputtext_200" /> 每次修改密码必须填写</td>
	</tr>
	<tr>
		<td>上次登录：</td>
		<td><?=$info['admin_ltime']?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<input type="hidden" value="<?=$info['admin_atime']?>" name="admin_atime" />
		<td><input type="submit" value="提 交" class="tjbtn" /></td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
