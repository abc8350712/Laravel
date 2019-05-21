<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>17天搞定GRE单词背诵计划时间表生成器</title>
	<style type="text/css">
	a{text-decoration: none;color:#39f; }
	body{width: 988px; margin: 0 auto;}
	th{text-align: right; font-size: 14px; color: #666;width: 100px;}
	td{font-size: 12px;color: #999;padding: 3px 0;}
	input{width: 136px;}
	input[type=checkbox]{width:auto;}
	h1{text-align: center;}
	#sidebar{float: left;width: 270px;margin-right: 10px;margin-top: 70px;}
	#output{width: 707px;font-family: Verdana;float: left;font-size: 12px;}
	#output>span{
		width: 100px;
		float: left;
		height: 20px;
		border: 1px solid #aaa;
		border-left: none;
		text-align: center;
	}
	#output{border-left: 1px solid #aaa;}
	#calendar>div{
		width: 97px;
		height: 114px;
		float: left;
		padding-left: 3px;
		border-right: 1px solid #aaa;
		border-bottom: 1px solid #aaa;
	}
	@media print{form{display: none;}body{width: 708px;}}
	</style>
</head>
<body>
<form id="sidebar">
 	<table>
 		<tr><th>计划名</th><td><input id="plan" value="红宝书21天计划表"></td></tr>
 		<tr><th>List 名</th><td><input id="book" value="L"></td></tr>
 		<tr><th>开始日期</th><td><input id="startDate" type="date"></td></tr>
 		<tr><th>每天 List 数</th><td><input id="listPerDay" value="2"></td></tr>
 		<tr><th>List 总数</th><td><input id="totalList" value="42"><br></td></tr>
 		<tr><th>是否逆序</th><td><input id="reverse"	type="checkbox"></td></tr>
 		<tr><th></th><td><button id="generate">点击这里生成</button><button type="button" onclick="javascript:window.print()">打印</button></td></tr>
 		<tr><td colspan=2>注1：本工具根据最新《<a href="http://www.amazon.cn/gp/product/B0011C0ZQ0/ref=as_li_ss_tl?ie=UTF8&camp=536&creative=3132&creativeASIN=B0011C0ZQ0&linkCode=as2&tag=shawphy-23">17天搞定GRE单词</a>》第二版中，第35页上的21天时间表，动态生成时间表。与网上流传的老版扫描版略有不同。</td></tr>
 		<tr><td colspan=2>注2：本页面可以直接打印，打印的时候不会有上面的表单以及页尾的广告。</td></tr>
 		<tr><td colspan=2>注3：本工具建议使用 <a href="http://www.google.com/intl/zh-CN/chrome/browser/">谷歌浏览器</a> 访问。IE 10 以下版本不保证正常使用。 </td></tr>
 		<tr><td colspan="2"><img src="http://shawphy.com/images/mail.png"></td></tr>
		<tr><td colspan=2><div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到豆瓣" class="bshare-douban"></a><a title="分享到QQ好友" class="bshare-qqim"></a><a title="分享到微信" class="bshare-weixin"></a><a title="分享到开心网" class="bshare-kaixin001"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=3&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script></td></tr>


 	</table>
	<br>
</form>
<h1></h1>
<div id="output">
	<span>Sun</span>
	<span>Mon</span>
	<span>Tue</span>
	<span>Wed</span>
	<span>Thr</span>
	<span>Fri</span>
	<span>Sat</span>
	<div id="calendar"></div>
</div>
<form>
<fieldset>
<legend>好书推荐</legend>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0011C0ZQ0" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B005NXM58E" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B005GSVNSY" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B006OW36EA" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0011CPKVK" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0057U4GA8" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<iframe src="http://rcm-cn.amazon-adsystem.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=shawphy-23&o=28&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=B0062NIIJ4" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>

</fieldset>

</form>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- <script src="jquery-latest.min.js"></script> -->
<script >
	$("#startDate").val(new Date().toJSON().slice(0,10));
	$("#generate").click(function() {
		var book=$("#book").val();
		var startDate=$("#startDate").val();
		var listPerDay=$("#listPerDay").val()-0;
		var totalList=$("#totalList").val()-0;
		var weekday=new Date(startDate).getDay();
		var firstLineSunday=new Date(new Date(startDate)-weekday*86400000);
		var calendar=$("#calendar").empty();
		var	reverse=$("#reverse").prop("checked");

		$("h1").text($("#plan").val())
		for (var i = 0,l=totalList/listPerDay+25+weekday; i<l; i++) {
			currentDay=new Date(firstLineSunday-0+i*86400000);
			calendar.append("<div>"+(currentDay.getMonth()-0+1)+"/"+currentDay.getDate()+"</div>")
		};

		var plan=[];
		for (var i = 0,l=totalList/listPerDay; i <l; i++) {
			tmp=[];
			for (var j = 1; j <= listPerDay; j++) {
				k=i*listPerDay+j;
				if (k>totalList) break;
				tmp.push(k)
			};
			if(tmp.length==1){
				str=tmp[0]
			} else {
				str=tmp.shift()+"~"+tmp.pop();
			}
			plan.push(str);
		};
		for (var i = 0,l=plan.length; i < l; i++) {
			calendar.children().eq(weekday+i).append("<br>&nbsp;&nbsp;"+book+" "+plan[reverse?l-i-1:i])
		};
		var plan=[];
		for (var i = 0,l=totalList/listPerDay; i <l; i++) {
			tmp=[];
			for (var j = 1; j <= listPerDay; j++) {
				k=i*listPerDay+j;
				if (k>totalList) break;
				tmp.push(k)
			};
			if(tmp.length==1){
				str=tmp[0]
			} else {
				str=tmp.shift()+"~"+tmp.pop();
			}

			plan.push(str);

		};
		for (var i = 0,l=plan.length; i < l; i++) {
			calendar.children().eq(weekday+i).append("<br>*"+book+" "+plan[reverse?l-i-1:i])
			calendar.children().eq(weekday+i+1).append("<br>*"+book+" "+plan[reverse?l-i-1:i])
			calendar.children().eq(weekday+i+3).append("<br>*"+book+" "+plan[reverse?l-i-1:i])
			calendar.children().eq(weekday+i+7).append("<br>*"+book+" "+plan[reverse?l-i-1:i])
			calendar.children().eq(weekday+i+14).append("<br>*"+book+" "+plan[reverse?l-i-1:i])
			calendar.children().eq(weekday+i+25).append("<br>*"+book+" "+plan[reverse?l-i-1:i])
			
		};
		return false;
	}).click()
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43415723-1', 'exam4.us');
  ga('send', 'pageview');

</script>
</body>
</html>