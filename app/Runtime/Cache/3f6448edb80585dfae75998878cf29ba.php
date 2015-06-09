<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
	<head>
		<meta charset="UTF-8">
		<title>别踩白块儿</title>
		<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
		<meta name="mobileOptimized" content="240" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-touch-fullscreen" content="YES" />
		<meta name="apple-mobile-web-app-capable" content="yes"/>
	</head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet"  type="text/css" href="app/public/css/jqm.css" />
	<link rel="stylesheet"  type="text/css" href="app/public/css/1.css" />
	<script src="app/public/js/jquery.min.js"></script>
	<script src="app/public/js/jqm.js"></script>
	<script src="app/public/js/main.js"></script>
	<!-- 		<script type="text/javascript" src="app/public/js/record.js"></script> -->
	<body ondrag="return false;" ondragstart="return false;">
		<div data-role="page" id="page_home">
			<div data-role="content" id="home_content">
				<div class="game_type jingdian"><a type="jingdian">经典</a></div>
				<div class="game_type jieji"><a type="jieji">街机</a></div>
				<div class="game_type chan"><a type="chan" href="#chan" data-transition="flip">禅</a></div>
			</div>
		</div>
		
		
		<div data-role="page" id="chan" class="game_wrapper">
			
		</div>
	</body>
</html>