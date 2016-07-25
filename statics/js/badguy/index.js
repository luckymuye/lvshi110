$(function(){
	//微信标识hover时展现的页面
	$(".weixinlogo").hover(function(){
		$(".weixinlogo-addon").show();
	},function(){
		$(".weixinlogo-addon").hide();
	});
	$(".address").hover(function(){
		$(".address-addon").show();
	},function(){
		$(".address-addon").hide();
	});
	$("#lysubmit").click(function(){
		var sname = $("input[name=mnickname]").val();	
		if(sname==''){
			alert("请先登录再留言！");
			$('#myModal').modal('hide')	
			return;
		}
		$("form#lyban").submit();
	});
	 
 
 
})