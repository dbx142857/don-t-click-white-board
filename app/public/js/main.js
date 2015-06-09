//通过.cur_must_click_black类定义当前必须点击的黑块儿
var game={
	type:null,//游戏类型
	$wrapper:null,//当前游戏的容器
	live:true,//是否活着
	start:false,//游戏是否开始进行
	chan:{
		time:30,//总时间
		clock:null,//定时器
	},
	make_black_in_heng:function($heng)//在某一行中选出一个黑色的块儿
	{
		var rand=Math.floor(Math.random()*4),$black_point;
		$heng.children().each(function(k)
		{
			if(k==rand)
			{
				$(this).addClass("black_point");
				$black_point=$(this);
			}
			else
			{
				$(this).addClass("white_point");
			}
		})
		return $black_point;
	},
	make_heng:function()
	{
		var shu_w=$("body").width()/4-4;
		var $heng=$("<div>")
				.addClass("heng")
				.prependTo(game.$wrapper);
			for(var j=0;j<4;j++)
			{
				var $shu=$("<div>")
					.addClass("shu")
					.appendTo($heng);
				if(j==3)
				{
					$shu.css({
						width:shu_w+"px"
					})
				}
			}
		return $heng;
	},
	init:function()
	{
		for(var i=0;i<4;i++)
		{
			var $heng=game.make_heng();
			if(i==0)
			{
				$heng.children().css({
					background:"yellow"
				})
			}
			if(i>0)
			{
				game.make_black_in_heng($heng);
			}
			if(i==1)
			{
				$heng.find($(".black_point")).addClass("cur_must_click_black").html("start")
                .click(function()
				{
					game.start=true;
				})
                .middle_txt();
			}
		}
	}
}
//plugin
jQuery.fn.extend({
	middle_txt:function()
	{
		$(this).css({
			lineHeight:$(this).height()+"px"
		})
		return $(this);
	}
})
$(function()
{
	//界面初始化
	$(".game_type").middle_txt();
	$(".game_type a").click(function()
	{
		game.$wrapper=$("#"+$(this).attr("type"));
	})
	$(".white_point").live("tap",function()
	{
		if(!game.start||!game.live) return false;
		$(this).css("background","red");
		game.live=false;
		setTimeout(function(){
			confirm("you are die");
			location.href="index.php";
		},500)
	})
	$(".cur_must_click_black").live("click",function()
	{
		if(!game.start||!game.live) return false;
		var $thi=$(this).html("").css({
			position:"relative"
		}),$thi_heng=$thi.parent();
		game.make_black_in_heng(game.make_heng());
		game.$wrapper.css({
			top:-$("body").height()/4-1+"px"
		}).stop().animate({
			top:"0"
		},300);
		$thi_heng.prev().find($(".black_point")).addClass("cur_must_click_black");
		
		var $anim_div=$("<div>").appendTo($thi)
			.css({
				background:"gray",
				position:"absolute",
				width:"0",
				height:"100%",
				left:"50%"
			})
			.animate({
				width:"100%",
				left:"0"
			},300);
		$thi.removeClass("cur_must_click_black")
	})
})
