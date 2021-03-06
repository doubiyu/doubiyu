<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1号店登录</title>
	<link rel="stylesheet" href="/Public/Home/login/project.css">
	<script type="text/javascript" src="/Public/Home/login/js/pc_login_new_1.js"></script>


	<script>
		var LOGIN_RESULT = {SUCCESS:0,FAIL:1};                  
		var REGISTER_RESULT = {SUCCESS:10,FAIL:11};             
		var DOMAIN_TYPE = {YHD:1,MALL:2,YW_111:3};              
		var LOGIN_SOURCE={NORMAL:1,FRAME:2};                    	var URLPrefix = {"mymall":"http://my.1mall.com","passport_statics":"https://passport.yhd.com/front-passport/passport","yiwangauth":"http://mall.yiwang.cn","yaowang":"http://www.111.com.cn","sam_passport_statics":"https://passport.samsclub.cn/front-passport/passport","tracker":"tracker.yhd.com","passport":"https://passport.yhd.com","my":"http://my.yhd.com","central":"http://www.yhd.com","validCodeShowUrl":"https://captcha.yhd.com/public/validcode.do","mall":"http://www.1mall.com","passportother":"https://passport.1mall.com"}; 
		var currSiteId = 1;                         
		
		var returnUrl = "http://www.yhd.com";               
		var autoLoginFlag= "1";        
		var valid_code_service_flag="1"; 
		var showValidCode = "0"; 
		var mUrl = "http://m.yhd.com"; 
		
		var no3wUrl = "yhd.com";
		var imgPath = "https://passport.yhd.com/front-passport/passport/images";
		var fromDomain = "";         
		var resetIframeUrl = fromDomain + "/login/callback.do";       
		
		var yhdUrl="http://www.yhd.com";
	    var yhdPassportUrl="https://passport.yhd.com";
		var ywPassportUrl="https://passport.111.com.cn";
		var pubkey = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDXQG8rnxhslm+2f7Epu3bB0inrnCaTHhUQCYE+2X+qWQgcpn+Hvwyks3A67mvkIcyvV0ED3HFDf+ANoMWV1Ex56dKqOmSUmjrk7s5cjQeiIsxX7Q3hSzO61/kLpKNH+NE6iAPpm96Fg15rCjbm+5rR96DhLNG7zt2JgOd2o1wXkQIDAQAB";
	</script>
</head>
<body>
		<link rel="shortcut icon" href="https://passport.yhd.com/front-passport/passport/images/yhd_favicon.ico"/>

		<!-- 头 -->
		<div class="regist_header clearfix">
		<div class="wrap">
			<!-- logo标志 -->
	        <a class="logo" href="#"><img height="55" alt="1号店" src="/Public/Home/login/images/loginlogo.png"></a>
	        <div class="regist_header_right clearfix">
	        	<!-- <a href="#" class="english_edition" id="edition" style="display:none">English</a> -->
	            <div class="help_wrap">
	                <a href="#" class="hd_menu">
	                	<s class="help_ico"></s>帮助中心
	                </a>
	                <div class="hd_menu_list">
	                    <ul>
	                        <li><a href="http://my.yhd.com/order/myOrder.do">包裹跟踪</a></li>
	                        <li><a href="http://www.yhd.com/cms/view.do?topicId=18991">常见问题</a></li>
	                        <li><a href="http://my.yhd.com/return/returnApplyList.do">在线退换货</a></li>
	                        <li><a href="http://my.yhd.com/opinion/opinionList.do">在线投诉</a></li>
	                        <li><a href="http://www.yhd.com/deliveryinfo/deliveryInfo.do">配送范围</a></li>
	                    </ul>
	                </div>
	            </div>
	            <span class="fr">您好，欢迎光临1号店！ <a class="blue_link" href="/passport/login_input.do">请登录</a></span>
	        </div>
	    </div>
	  </div>

	<script type="text/javascript">
		var no3wUrl="yhd.com";
		var currSiteId = 1;
		var URLPrefix = {"mymall":"http://my.1mall.com","passport_statics":"https://passport.yhd.com/front-passport/passport","yiwangauth":"http://mall.yiwang.cn","yaowang":"http://www.111.com.cn","sam_passport_statics":"https://passport.samsclub.cn/front-passport/passport","tracker":"tracker.yhd.com","passport":"https://passport.yhd.com","my":"http://my.yhd.com","central":"http://www.yhd.com","validCodeShowUrl":"https://captcha.yhd.com/public/validcode.do","mall":"http://www.1mall.com","passportother":"https://passport.1mall.com"};
		var yhdUrl="http://www.yhd.com";
        var yhdPassportUrl="https://passport.yhd.com";
        var ywPassportUrl="https://passport.111.com.cn";
        var loli = window['loli'] || {};
        var valid_code_service_flag="1"; 
	</script>
	<script type="text/javascript" src="/Public/Home/login/js/jquery.cookie.js"></script>


	<!-- 中 <-->
		
	
	<div class="login_wrap">
		<div class="wrap clearfix">
			<div class="mod_login_wrap">
				<form action="<?php echo U('Home/Login/login');?>" method="post">
					<p style="display:none" class="error_tips" id="error_tips">您填写的账户名不存在请核对后重新填写</p>
	            	<div class="clearfix">
            		<h3>1号店用户登录</h3>
            		<a class="regist_new blue_link" href="<?php echo U('Home/Register/index');?>">注册新账号</a>
            		</div>
	      
				<div class="login_form">
					<input type="hidden" value="1" id="login_source">
					<input type="hidden" value="1" id="login_pc_home_page">
	
					
					<div class="form_item_wrap">
					    <div class="form_item cur">
					        <label class="user_ico">&nbsp;</label>
					        <input type="text" value="" style="outline: none;" class="ipt ipt_username gay_text" tabindex="1" spellcheck="false" name="credentials.username" id="un">
					    </div>
					    <div class="form_item">
					        <label class="paswd_ico">&nbsp;</label>
					        <input type="password" value="" style="outline: none;" placeholder="密码 " class="ipt ipt_password gay_text" tabindex="2" name="credentials.password" oncontextmenu="return false" oncut="return false" onpaste="return false" oncopy="return false" id="pwd">
					
					    </div>
					   <div class="verify_code clearfix" id="vcd_div" style="display: none;">
					   	<input type="hidden" id="validateSig">
                    	 <div class="form_item cur_right">
                        	<label class="verify_ico">&nbsp;</label>
                            <input type="text" onkeyup="javascript: jsLoginValidatCode.login_param_validate();" onblur="javascript: jsLoginValidatCode.checkValidCodeOnBlur()" class="ipt ipt_code gay_text" value="验证码" tabindex="1" maxlength="4" name="validCode" id="vcd">
                            <span id="code_right" class="code_right" tabindex="-1"></span>
                            <span id="code_wrong" class="code_wrong" tabindex="-1"></span>
                         </div>
                    	 <a href="#" onclick="jsLoginValidatCode.passport_refresh_valid_code();return false;" class="verify_code_box">
                            <img name="valid_code_pic" id="valid_code_pic">
                            <i class="btn_change" tabindex="-1">换一张</i>
                         </a>
                      </div>
					    
					 <div class="auto_login clearfix">
					 	<p class="clearfix">
                    	<a class="uncheck_agreement" href="#" id="check_agreement">自动登录</a>
                    	<input type="hidden" id="autoLoginCheck">
                    	<span style="display: none;" class="auto_tips" id="agreement_tips">请勿在公用电脑上启用</span>
                        </p>
                         <p class="service_agreement" style="">点击登录，表示您同意1号店<a target="_blank" class="blue_link" href="http://cms.yhd.com/cms/view.do?topicId=24110">《服务协议》</a></p>
                        <a tabindex="-1" class="forget_pswd" target="_blank" href="/passport/find_pwd_input.do">忘记密码？</a>
                    </div>
					    
					    <button class="login_btn">登录</button>
					
					</div>
					</form>
					
					<div class="joint_landing_wrap">
						<p>更多合作网站账号登录</p>
		<div class="clearfix">
						<ul class="account_list clearfix">
		<li><a title="QQ" class="iconfont" target="_blank" href="https://passport.yhd.com/qq/login.do">&#xe67d;</a></li> 
		<li><a title="新浪微博" class="iconfont" target="_blank" href="https://passport.yhd.com/sina/login.do">&#xe67b;</a></li> 
		<li><a title="支付宝" class="iconfont" target="_blank" href="https://passport.yhd.com/alipay/login.do">&#xe677;</a></li> 
		<li><a title="微信" class="iconfont" target="_blank" href="https://passport.yhd.com/wechat/login.do">&#xe658;</a></li> 
						</ul>
						<a title="展开" class="unfold" href="javascript:void(0);">更多合作网站<i></i></a>
						
					</div>
						<ul class="more_landing clearfix">
							<li style="display: none;"><a target="_blank" href="https://passport.yhd.com/netease/login.do"><i class="iconfont">&#xe67e;</i>网易</a></li>
							<li style="display: none;"><a target="_blank" href="https://passport.yhd.com/baidu/login.do"><i class="iconfont">&#xe654;</i>百度</a></li>
							<li style="display: none;"><a href="javascript:alert('现已终止与139邮箱合作，请您采用其他方式登录。已绑定手机用户可通过手机号和密码登录。账号相关问题可致电客服电话400-007-1111。给您带来不便，表示抱歉！');"><i class="iconfont">&#xe621;</i>中国移动</a></li>
							<li style="display: none;"><a target="_blank" href="https://passport.yhd.com/kaixin/login.do"><i class="iconfont">&#xe604;</i>开心网</a></li>
							<li style="display: none;"><a target="_blank" href="https://passport.yhd.com/renren/login.do"><i class="iconfont">&#x3435;</i>人人网</a></li>
							<li style="display: none;"><a target="_blank" href="https://passport.yhd.com/wanlitong/login.do"><i class="iconfont">&#xe73b;</i>平安万里通</a></li>
							<li style="display: none;"><a target="_blank" href="https://passport.yhd.com/mogujie/login.do"><i class="iconfont">&#xe62f;</i>蘑菇街</a></li>
						</ul>
					</div>
					<!--
					-->
				</div>
			</div>
			<div class="mod_left_banner"><a target="_blank" id="imgLink" href="http://cms.yhd.com/sale/GpYBsbWbMM?ref=ad.19022_36683497_1"><img src="https://imgssl.yihaodian.com/V01/M09/36/4A/ChEi31cjLKGANmy0AACqQHWasnY75100.jpg" id="img"></a></div>
		</div>
	</div>


	<div id="simplefooter">
		<a target="_blank" href="http://www.miibeian.gov.cn/">沪ICP备13044278号</a>|
		<a>合字B1.B2-20130004</a>|
		<a target="_blank" data-ref="YHD_Footer_Licence" href="http://d7.yihaodianimg.com/N01/M04/14/0D/CgQCr1KgLjGAM5w3AAQiJTyDkdw48000.jpg">营业执照</a>
		<p>Copyright &copy; 1号店网上超市 2007-2016，All Rights Reserved</p>
	</div>

	<div>
		<span style="color: rgb(255, 255, 255);">
						121!$
						4%&amp;
						4#@
						10!$
				,
		</span> 
		<span style="color: #FFFFFF">1601497</span>
	</div>

	<script type="text/javascript" src="/Public/Home/login/js/global_tracker_1.js"></script>
	<script type="text/javascript" src='/Public/Home/login/js/api_1.js'></script>
	<script>	
		pageInit();
		$(document).ready(function(){
			jsLoginFed.loadImageUrl("1","Passport_Login_Ad_Click");
		});	
	</script>
</body>
</html>