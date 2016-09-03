<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<title>index</title>
<link rel="stylesheet" type="text/css" href="res/css/mobile.css" />
<script type="text/javascript" src="res/js/jquery-1.7.js"></script>
 
</head>
<body>
	<div class="header">
    	<div class="logo_box clearfix">
        	<img src="res/images/logo1.png" class="logo1" />
            <img src="res/images/logo2.png" class="logo2" />
        </div>
        <div class="title_box"><img src="res/images/title.png" /></div>
        <div class="time_box">
            <div class="last_time">
            	<div class="time_tit">距优惠结束还有</div>
                <div class="num_box">
                    <span id="day" class="time1">00</span>
                    <span id="hous" class="time2">00</span>
                    <span id="minute" class="time3">00</span>
                    <span id="second" class="time4">00</span>
                </div>
            </div>
            <div class="price_box"><img src="res/images/price1.jpg" /></div>
        </div>
    </div>
    <div class="page">
    	<div class="section_one">
            <div class="content_box clearfix">
                <div class="l_box">
                    <img src="res/images/pic1.png" />
                </div>
                <div class="r_box">
                    <div class="info_txt1">
                        <p>临床工作繁忙，无法参会？</p>
                        <p>临床工作繁忙，无法参会？</p>
                        <p>回顾大会精彩内容？</p>
                        <p>CSCO年会视频U盘</p>
                        <p>帮您把CSCO年会带回家！</p>
                    </div>
                </div>
                <div class="link_box">
                	<a href="https://item.taobao.com/item.htm?id=537698576103" class="link1"></a>
                    <a href="https://item.taobao.com/item.htm?id=537698576103" class="link2"></a>
                </div>
                <div class="buy_notes">
                    <a href="https://item.taobao.com/item.htm?id=537698576103">[购买须知]</a>
                </div>
            </div>
        </div>
        <div class="section_two">
        	<div class="content_box clearfix">
            	<div class="l_box">
                	<h1><img src="res/images/tit1.png" /></h1>
                    <div class="info_txt2">
                        <p class="gray_txt">传播学术，我们一直在前行</p>
                        <p><span>30</span>个专科论坛</p>
                        <p><span>600</span>位行业专家</p>
                        <p><span>200</span>小时专题报告</p>
                    </div>
                </div>
                <div class="r_box">
                	<div class="imgs_roll">
                    	<h2>视频示例</h2>
                        <div class="img_body">
                            <ul>
                                <li id="vouch_photo1" style="display:block">
                                    <p class="img_box"><img src="res/images/img1.jpg" /></p>
                                    <p class="p_txt">吴一龙教授学术报告</p>
                                </li>
                                <li id="vouch_photo2" style="display:none">
                                    <p class="img_box"><img src="res/images/pic1.png" /></p>
                                    <p class="p_txt">吴一龙教授学术报告2</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_three">
        	<div class="content_box">
            	<div class="l_box">
                	<img src="res/images/pic2.png" />
                </div>
                <div class="r_box">
                	<h1><img src="res/images/tit2.png" /></h1>
                    <div class="info_txt3">
                        <p>经典学术内容</p>
                        <p>不需要华丽的外表</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_four">
            <div class="content_box clearfix">
            	<h1><img src="res/images/tit3.png" /></h1>
                <p>会议内容全程报道，精准、及时，专业</p>
                <div class="info_txt4">
                	<div class="txt1"><a href="https://item.taobao.com/item.htm?id=537698576103">会议通知</a></div>
                    <div class="txt2"><a href="http://reg.csco.org.cn/reg2016/html/dhrc.asp">会议日程</a></div>
                    <div class="txt3"><a href="">会议亮点</a></div>
                    <div class="txt4"><a href="http://meeting.medlive.cn/detail/index-7937.html">2015CSCO</a></div>
                </div>
            </div>
        </div>
    </div>
    <script>
		//经过
		$(".info_txt4 a").hover(function(){
			$(this).parent().toggleClass("hover"+($(this).parent().index()+1));
		});

		//轮播
		var _currentTab = 1;
		function switchVouch(value){
			for(var i=1; i<=2; i++) {
			if(i == value) {
				$("#photo_order" + i).addClass("current");
				$("#vouch_photo" + i).fadeIn("slow");
				} else {
				$("#photo_order" + i).removeClass("current");
				$("#vouch_photo" + i).fadeOut("slow");
				}
			}
		}
		function auto() {
			_currentTab++;
			if(_currentTab > 2) _currentTab = 1;
			switchVouch(_currentTab);
		}
		function clearAuto() {
			clearInterval(autoStart);
		}
		function setAuto() {
			autoStart = setInterval("auto();", 3000);
		}		
		setAuto();
		var pull_down = {
		ids : {},
		show : function (id,navid){
			this._clear(id);
			$("#"+id).show();
			//$('#'+navid).css('background-color','#EAEAEA');
		},
		hide : function (id,navid){
			this._clear(id);
			this.ids[id] = setTimeout(function(){
				$("#"+id).hide();
				}, 200);
			//$('#'+navid).css('background-color','#D6D6D6');
		},
		  _clear : function(id){
			  if(this.ids[id] > 0){
				  clearTimeout(this.ids[id]);
				  this.ids[id] = 0;
			  }
		  },
		  nav_class : function(obj,navid){
			  $(obj).addClass('current');
			  $(obj).siblings().removeClass('current');
			  //$('#'+navid).css('background-color','#EAEAEA');
		  }
		
		};			
	</script>
    <script>
		//倒计时		
		var endTime = <?php echo strtotime('2016-9-3 11:30:00');?>;//结束时间
		var nowTime = <?php echo time(); ?> + 1;//当前时间
		//判断当前时间
		 if(nowTime<endTime){
			setInterval("GetRTime()",1000);
			//计算出服务器和客户端的时间差。		
			var runtimes = 0;
			function GetRTime(){
				nowTime = nowTime + 1;
				var NowTime = nowTime;
				var nMS = endTime - nowTime;

				var nDay=Math.floor(nMS/(60*60) / 24); //Math.floor(nMS/(60*60) / 24) % 31
				var nH=Math.floor(nMS/(60*60)) % 24;//折合小时 var nH=Math.floor(nMS/(60*60) / 24)*24+Math.floor(nMS/(60*60)) % 24;
				var nM=Math.floor(nMS/(60)) % 60;//分
				var nS=Math.floor(nMS) % 60;//秒
				
				$('#day').html(numToStr(Math.floor(nDay/10))+numToStr(Math.floor(nDay%10)));
				$('#hous').html(numToStr(Math.floor(nH/10))+numToStr(Math.floor(nH%10)));
				$('#minute').html(numToStr(Math.floor(nM/10))+numToStr(Math.floor(nM%10)));
				$('#second').html(numToStr(Math.floor(nS/10))+numToStr(Math.floor(nS%10)));
				runtimes++;	
			}
			$('#liveUrl').attr("target","_blank");
			$('#liveUrl').attr("href","http://www.kingyee.com.cn/order/cart.do?product_goods_id=83");		
		}else if(nowTime>endTime){
			$('#day').html("00");
			$('#hous').html("00");
			$('#minute').html("00");
			$('#second').html("00");
			$('.price_box img').attr("src","res/images/price2.jpg");
			//location.replace(document.referrer);
		}
		function numToStr(num){
			var arr=new Array();
			arr[0]='0';
			arr[1]='1';
			arr[2]='2';
			arr[3]='3';
			arr[4]='4';
			arr[5]='5';
			arr[6]='6';
			arr[7]='7';
			arr[8]='8';
			arr[9]='9';
			if(arr[num]){
				return arr[num];
			}else{
				return arr[0];
			}
		}
	</script>
</body>
</html>
