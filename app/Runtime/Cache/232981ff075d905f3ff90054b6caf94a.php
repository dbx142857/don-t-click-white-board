<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta charset="utf8" />
		<title></title>
	</head>
	<script src="app/public/js/jquery.js"></script>
	<script src="app/public/admin/js/jquery.ajaxPage.js"></script>
	<style>
		*
	{
		font-family:"微软雅黑";
		font-weight:bolder;
		font-size:14px;
	}
	a
	{
		margin-right:10px;
	}
	td
	{
		height:30px;
		width:100px;
		overflow:hidden;
	}
	tr
	{
		height:30px;
	}
	</style>
	<body>
		<center><table border="1">
			
		</table></center>
	</body>
</html>
<script>
	$('table').eq(0).ajax_page({

	});
</script>