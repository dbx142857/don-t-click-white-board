<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
	<head>
		<meta charset="UTF-8">
		<title>炫音dj网</title>
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
	<body>
		<div data-role="page" id="page" data-theme="b">

			<div data-role="header" data-theme="c" class="header ui_fixed_hidden">
				<h1>
				<input type="search" placeholder="搜索dj或歌手" class="search" data-inline="true" data-mini="true" data-iconpos="right" />
				</h1>
				<div class="ui-grid-d nav">
					<div class="ui-block-a">
						排行
					</div>
					<div class="ui-block-b" tpl_name="tuijian">
						推荐
					</div>
					<div class="ui-block-c" tpl_name="tuijian">
						分类
					</div>
					<div class="ui-block-d" tpl_name="tuijian">
						DJ
					</div>
					<div class="ui-block-e" tpl_name="tuijian">
						我的
					</div>
				</div>
				<div class="nav_bottom_bg_wrapper">
					<div class="nav_bottom_bg"></div>
				</div>
			</div>
			<div data-role="content">

				<div id="content_div_wrapper">
					<div id="div_0" class="content_div">
						<ul data-role="listview" data-inset="true" data-mini="true">
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
							<li src="app/public/media/test.mp3" class="music_li" data-mini="true">
								<a href="#"> <img src="app/public/images/chrome.png"> <h2>这首歌曲是用来测试的</h2>
								<p>
									Google Chrome is a free, open-source web browser. Released in 2008.
								</p> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div data-role="footer" id="footer">
				<div id="xia_yi_qu">

				</div>
				<div id="play_and_pause">

				</div>

				<!-- 				<input type="range" name="points" id="points" value="50" min="0" max="100" data-highlight="true"> -->
				<div data-role="rangeslider" data-track-theme="b" data-theme="a" id="range_area">
					<input type="range" name="range-3a" id="range1" min="0" max="100" value="20">
					<input type="range" name="range-3b" id="range2" min="0" max="100" value="50">
				</div>

				<div id="footer_logo_area"></div>

			</div>
			<audio controls style="width:0; height:0;" id="the_audio">
				<source src=""></source>
			</audio>
			<div id="msg_tishi"></div>
		</div>
	</body>
</html>