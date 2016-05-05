<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="tp_page" content="3.0">
<title>注册1号店</title>
<link href="/Public/Home/Register/css/register_3.0.css" rel="stylesheet" type="text/css" />
<script src="/js/register_new.js"></script>
</head>
  <body>
	    <link rel="shortcut icon" href="https://passport.yhd.com/front-passport/passport/images/yhd_favicon.ico"/>
	
  <div class="regist_header clearfix">
	<div class="wrap">
        <a href="" class="logo"><img src="/Public/Home/Register/picture/loginlogo.jpg" height="55" alt="1号店" /></a>
        <div class="regist_header_right clearfix">
        	<!--<a href="#" class="english_edition" id="edition" style="display:none">English</a>-->
            <div class="help_wrap">
                <a class="hd_menu" href="http://www.yhd.com/cms/view.do?topicId=18942"><s class="help_ico"></s>帮助中心</a>
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
            <span class="fr">您好，欢迎光临1号店！ <a href="<?php echo U('Home/Login/index');?>" class="blue_link">请登录</a></span>
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
	<script type="text/javascript" src="/Public/Home/Registerjs/jquery.cookie.js"></script>
  
<input type="hidden" id="validateSig" /> 
<input type="hidden" name="returnUrl" value="" id="returnUrl">
<input id="p" type="hidden" value=""/>
<input type="password" style="display:none">
		<div class="y_regist_wrap">
        	<!--背景小图标 -->
            <div class="r_icon1"></div>
            <div class="r_icon2"></div>
            <div class="r_icon3"></div>
            <div class="r_icon4"></div>
            <div class="r_icon5"></div>
           <div class="y_regist_model">
           
                 <h4 class="y_regist_tit">1号店注册</h4>
                 <form action="<?php echo U('Home/Register/register');?>" method="post">
                  <input type="hidden" name="type" value="0" />
                 <div class="y_regist_form">
                     <ul class="clearfix">
                         <li>
                             <div class="y_same_item">
                                 <input class="ysame_input" type="text" name="username" id="phone" placeholder="请输入用户名"/>
                                 <span class="y_same_label"></span>
                                 
                             </div>
                             <div class="y_regist_tips y_regist_tips_black">
                               <div class="y_regtip_rel"> 
                                  <i></i>
                                  <div class="y_tips_words">
                               		       
                                  </div>
                               </div> 
                             </div>

                             <div class="y_regist_right"></div>
                         </li>               
                         <li>
                             <div class="y_same_item">
                                 <input class="ysame_input" type="password" name="password" id="phone" placeholder="请输入密码"/>
                                 <span class="y_same_label"></span>
                             </div>
                             <div class="y_regist_tips y_regist_tips_black">
                               <div class="y_regtip_rel"> 
                                  <i></i>
                                  <div class="y_tips_words">
                                         
                                  </div>
                               </div> 
                             </div>

                             <div class="y_regist_right"></div>
                         </li>
                         <li>
                             <div class="y_same_item">
                                 <input class="ysame_input" type="password" name="repassword" id="phone" placeholder="请再次输入密码"/>
                                 <span class="y_same_label"></span>
                              </div>
                             <div class="y_regist_tips y_regist_tips_black">
                               <div class="y_regtip_rel"> 
                                  <i></i>
                                  <div class="y_tips_words">
                                         
                                  </div>
                               </div> 
                             </div>

                             <div class="y_regist_right"></div>
                         </li>
                         <li>
                             <div class="y_same_item">
                                 <input class="ysame_input" type="text" name="email" id="phone" placeholder="请输入你的邮箱"/>
                                 <span class="y_same_label"></span>
                              </div>
                             <div class="y_regist_tips y_regist_tips_black">
                               <div class="y_regtip_rel"> 
                                  <i></i>
                                  <div class="y_tips_words">
                                         
                                  </div>
                               </div> 
                             </div>

                             <div class="y_regist_right"></div>
                         </li>
                          <li>
                             <div class="y_agreement_word">点击注册，表示您同意1号店  <a href="http://cms.yhd.com/cms/view.do?topicId=24110" target="_blank" >《服务协议》</a></div>
                             <button class="y_agreement_btn1" >同意协议并注册
                            </button>  
                         </li>
                     </ul>                 
                 </div> <!-- // y_regist_form ending -->  
              </form>
           </div>
       </div><!--// y_regist_wrap ending -->   
          <script type="text/javascript" src='js/api.js'></script>
         
        <div class="regist_popWin regist_success_newst" id="sale_pop">
          <div class="regist_popWin_con">
              <div class="regist_popWin_title">
                  <a href="javascript:void(0)" class="regist_popWin_closeBtn"></a>
              </div>
              <div class="regist_popWin_Info clearfix">
                  <p class="tit"><i></i>注册成功</p>
                  <p class="fuli"><b>0元抢、双倍积分、爆款低价</b></p>
                  <a href="http://cms.yhd.com/sale/vxlcQIriuqo" class="shopping_btn" data-tpa="2548" >领取福利</a>
              </div>
          </div>
        </div>
        <div class="regist_success regist_popWin" id="default_pop">
          <div class="regist_popWin_con">
              <div class="regist_popWin_title">
                  <a href="javascript:void(0)" class="regist_popWin_closeBtn"></a>
              </div>
              <div class="regist_popWin_Info clearfix">
                  <div class="regist_popWin_main">
                      <div class="regist_popWin_mainCon">
                          <p class="tit"><i></i>注册成功</p>
                      </div>
                  </div>
              </div>
              <div class="popWin_tips">
                  <span>3</span>s后跳转至首页
              </div>
          </div>
       </div>

	<div id="simplefooter"><a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备13044278号</a>|<a>合字B1.B2-20130004</a>|<a href="http://d7.yihaodianimg.com/N01/M04/14/0D/CgQCr1KgLjGAM5w3AAQiJTyDkdw48000.jpg" data-ref="YHD_Footer_Licence" target="_blank">营业执照</a><p>Copyright © 1号店网上超市 2007-2016，All Rights Reserved</p></div><div>
<span style="color: #FFFFFF">
				121!$
				4%&
				4#@
				10!$
		,
</span> 
<span style="color: #FFFFFF">1607912</span>
</div>	 <script type="text/javascript" src="/Public/Home/Registerjs/global_tracker.js"></script>
  </body>
<script type="text/javascript">
	var showValidCodeWhenRegistByMobile = false; 
	var registerValidateUserBehaviorSwitcher = true;
	jRegist.init();
</script> 
</html>


background-color: #ff3c3c;
    border-radius: 2px;
    color: #fff;
    display: block;
    font: 16px/52px "microsoft yahei";
    height: 52px;
    margin-top: 6px;
    text-align: center;
    width: 330px;