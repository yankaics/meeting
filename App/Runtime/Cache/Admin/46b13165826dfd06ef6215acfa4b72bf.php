<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="__PUBLIC__/Css/login.css" />
</head>
<body>
	<div class="login">
	<?php if($type == 'index'): ?><form action="<?php echo U('Admin/User/add');?>" method="post" id="login">
		<table border="1" width="100%">
			<tr>
				<th>用户名:</th>
				<td>
					<input style="width:490px;" type="text" name="username"/>
				</td>
			</tr>
			<tr>
				<th>用户密码:</th>
				<td>
					<input style="width:490px;" type="password" name="password"/>
				</td>
			</tr>
			<tr>
				<th>确认密码:</th>
				<td>
					<input style="width:490px;" type="password" name="repwd"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center;"> <input type="submit" class="submit" value="提交"/></td>
			</tr>
		</table>
		</form>
	<?php elseif($type == 'change'): ?>
		<form action="<?php echo U('Admin/User/save');?>" method="post" id="login">
		<table border="1" width="100%">
			<tr>
				<th>旧密码:</th>
				<td>
					<input style="width:490px;" type="password" name="oldpwd"/>
				</td>
			</tr>
			<tr>
				<th>新密码:</th>
				<td>
					<input style="width:490px;" type="password" name="password"/>
				</td>
			</tr>
			<tr>
				<th>确认密码:</th>
				<td>
					<input style="width:490px;" type="password" name="repwd"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center;"> <input type="submit" class="submit" value="提交"/></td>
			</tr>
		</table>
		</form>
	<?php elseif($type == 'watch'): ?>
		<form action="<?php echo U('Admin/User/watcher_add');?>" method="post" id="login">
		<table border="1" width="100%">
			<tr>
				<th>用户名:</th>
				<td>
					<input style="width:490px;" type="text" name="username"/>
				</td>
			</tr>
			<tr>
				<th>用户密码:</th>
				<td>
					<input style="width:490px;" type="password" name="password"/>
				</td>
			</tr>
			<tr>
				<th>确认密码:</th>
				<td>
					<input style="width:490px;" type="password" name="repwd"/>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center;"> <input type="submit" class="submit" value="提交"/></td>
			</tr>
		</table>
		</form><?php endif; ?>
	</div>
</body>
</html>