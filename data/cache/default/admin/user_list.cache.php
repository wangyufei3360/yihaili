<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/user_list.html', 'ef3d10b47e5c421071ed3ef13ca89fb8', 1435071499);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">会员列表</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<div class="spqh mat8">
		<div class="fr searbox mat3">
			<form method="get">
				<input type="hidden" name="mod" value="<?=$_g_mod?>" />
				<input type="hidden" name="act" value="<?=$_g_act?>" />
				<input type="text" name="keyword" value="<?=$_g_keyword?>" class="inputtext inputtext_200" />
				<input type="submit" value="搜索" class="input2" />
			</form>
		</div>
		<div class="clear"></div>
	</div>
	<form method="post" id="form">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list mat5">
	<tr>
		<td class="bgtt" align="center" width="10"><input type="checkbox" name="checkall" onclick="pe_checkall(this, 'user_id')" /></td>
		<td class="bgtt" align="center" width="40">ID号</td>
		<td class="bgtt" align="center">用户名</td>
		<td class="bgtt" align="center" width="200">邮箱</td>
		<td class="bgtt" align="center" width="100">电话</td>
		<td class="bgtt" align="center" width="100">注册时间</td>
		<td class="bgtt" align="center" width="70">操作</td>
	</tr><? if(is_array($info_list)) { foreach($info_list as $key => $v) { ?><tr>
		<td align="center"><input type="checkbox" name="user_id[]" value="<?=$v['user_id']?>"></td>
		<td align="center"><?=$v['user_id']?></td>
		<td align="center"><?=$v['user_name']?></td>
		<td align="center"><?=$v['user_email']?></td>
		<td align="center"><?=$v['user_phone']?></td>
		<td align="center"><?=$v['user_atime']?></td>
		<td align="center">
			<a href="admin.php?mod=user&amp;act=edit&amp;id=<?=$v['user_id']?>" class="admin_edit">修改</a>
			<a href="admin.php?mod=user&amp;act=delsql&amp;id=<?=$v['user_id']?>" class="admin_del" onclick="return pe_cfone('删除')">删除</a>
		</td>
	</tr><? } } ?><tr>
		<td class="bgtt"><input type="checkbox" name="checkall" onclick="pe_checkall(this, 'user_id')" /></td>
		<td class="bgtt" colspan="6">
			<span class="fl"><button href="admin.php?mod=user&amp;act=delsql" onclick="return pe_cfall(this, 'user_id', 'form', '批量删除')">批量删除</button></span>
			<span class="fenye"><?=$page?></span>
		</td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
