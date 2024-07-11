	  <!-- 
  本代码由 旭音网络 创建
  技术支持 QQ邮箱:2412287967@qq.com
  严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 -->
<!--查单说明开始--><?php

if(!defined('IN_CRONLITE'))exit();
$chdsn_cn_zuocew = $conf['chdsn_cn_zuocew']?$conf['chdsn_cn_zuocew']:'https://s3.ax1x.com/2021/01/01/rxImKe.png';
?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    	<title><?php echo $conf['sitename'] ?> - <?php echo $conf['title'] ?></title>
    	<meta name="keywords" content="<?php echo $conf['keywords'] ?>">
    	<meta name="description" content="<?php echo $conf['description'] ?>">
		<link href="<?php echo $cdnpublic?>twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    	<link href="<?php echo $cdnpublic?>font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    	<link rel="stylesheet" href="<?php echo $cdnserver?>assets/simple/css/oneui.css">
		<link rel="stylesheet" href="<?php echo $cdnserver?>assets/css/common.css?ver=<?php echo VERSION ?>">
		<script src="<?php echo $cdnpublic?>modernizr/2.8.3/modernizr.min.js"></script>
		<!--[if lt IE 9]>
	    <script src="<?php echo $cdnpublic?>html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="<?php echo $cdnpublic?>respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
<style type="text/css">
	.form-control {color: #646464;border: 1px solid #f8f8f8;border-radius: 3px;-webkit-box-shadow: none;box-shadow: none;-webkit-transition: all 0.15s ease-out;transition: all 0.15s ease-out;}
	.block{margin-bottom:10px;background-color:#fff;-webkit-box-shadow:0 2px 17px 2px rgb(222,223,241);box-shadow:0 2px 17px 2px rgb(222,223,241);font-weight:400}
	ul.ft-link{margin:0;padding:0}
	ul.ft-link li{border-right:1px solid #E6E7EC;display:inline-block;line-height:30px;margin:8px 0;text-align:center;width:24%}
	ul.ft-link li a{color:#74829c;text-transform:uppercase;font-size:12px}
	ul.ft-link li a:hover,ul.ft-link li.active a{color:#58c9f3}
	ul.ft-link li:last-child{border-right:none}
	ul.ft-link li a i{display:block}
	.well {min-height: 20px;padding: 19px;margin-bottom: 15px;background-color: #f9f9f9;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);}
	.input-group-addon {color: #646464;background-color: #f9f9f9;border-color: #f9f9f9;border-radius: 3px;}
	.panel-primary {border-color: #ffffff;}
	::-webkit-scrollbar-thumb {-webkit-box-shadow: inset 1px 1px 0 rgba(0,0,0,.1), inset 0 -1px 0 rgba(0,0,0,.07);background-clip: padding-box;background-color: #1bc74c;min-height: 40px;padding-top: 100px;border-radius: 4px;}
	.panel-primary {border-color: #ffffff;}
	.block > .nav-tabs > li.active > a, .block > .nav-tabs > li.active > a:hover, .block > .nav-tabs > li.active > a:focus {color: #646464;background-color: #f9f9f9;border-color: transparent;}
	.btn-info{color:#ffffff;background-color:#4098f2;border-color:#ffffff}
	.btn{font-weight:100;-webkit-transition:all 0.15s ease-out;transition:all 0.15s ease-out}
	.btn-sm,.btn-group-sm > .btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
	.btn-primary{color:#ffffff;background-color:rgb(64,152,242);border-color:rgb(64,152,242)}
	.bg-image {background-color: #ffffff;background-position: center center;background-repeat: no-repeat;-webkit-background-size: cover;background-size: cover;}
</style>
 <body>
	<!--弹出公告-->
	<div class="modal fade" align="left" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">
							×
						</span>
						<span class="sr-only">
							Close
						</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo $conf['sitename']?>
					</h4>
				</div>
				<div class="modal-body">
					<?php echo $conf['modal']?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						知道啦
					</button>
				</div>
			</div>
		</div>
	</div>
	<!--弹出公告-->
	<!--公告-->
	<div class="modal fade" align="left" id="mustsee" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">
							×
						</span>
						<span class="sr-only">
							Close
						</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						公告
					</h4>
				</div>
				<div class="modal-body">
					<?php echo $conf['anounce']?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						关闭
					</button>
				</div>
			</div>
		</div>
	</div>
	<!--公告-->
	<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block" style="float: none;">
		<br/>
		<!--顶部导航-->
		<div class="block block-link-hover3" href="javascript:void(0)">
			<div class="block-content block-content-full text-center bg-image" style="background-image: url('https://pan.suyanw.cn/view.php/eb8bc72f59390127437ddad046006d9b.png');background-size: 100% 100%;">
				<div>
					<div>
						<img class="img-avatar img-avatar80 img-avatar-thumb animated zoomInDown"
						src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']?>&spec=100">
					</div>
				</div>
			</div>
			<div class="panel-body text-center">
				<ul class="ft-link">
					<li>
						<a href="#mustsee" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-envelope-open-o">
									公告
								</i>
							</h5>
					</li>
					</a>
					<li>
						<a href="/user" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-cogs">
									登录
								</i>
							</h5>
					</li>
					<li>
						<a href="#about" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-user-o">
									帮助
								</i>
							</h5>
					</li>
	                   <li>
						<a href="/user/login.php" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-user-o">
									注册
								</i>
							</h5>
				</ul>
			</div>
		</div>
		<aside id="php_text-8" class="widget php_text wow fadelnUp" data-wow-delay="3.0s">
			<div class="textwidget widget-text">
				</table>
				</a>
				<!--logo下面按钮结束-->
				
	</span><style> #nr{ font-size:20px; margin: 0; background: -webkit-linear-gradient(left, #ffffff, #ff0000 6.25%, #ff7d00 12.5%, #ffff00 18.75%, #00ff00 25%, #00ffff 31.25%, #0000ff 37.5%, #ff00ff 43.75%, #ffff00 50%, #ff0000 56.25%, #ff7d00 62.5%, #ffff00 68.75%, #00ff00 75%, #00ffff 81.25%, #0000ff 87.5%, #ff00ff 93.75%, #ffff00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-size: 200% 100%; animation: masked-animation 2s infinite linear; } @keyframes masked-animation { 0% { background-position: 0 0; } 100% { background-position: -100%, 0; } } </style> <div style="background-color:#333;border-radius: 25px;box-shadow: 0px 0px 5px #f200ff;padding:5px;margin-top: 10px;margin-bottom:0px;"> <marquee> <b id="nr">专业的服务平台,货源最全,售后最好,开通分战,密价提卡,信誉保证,库存不足请及时联系上级补!</b> </marquee> </div><br>	
				
				<!--查单说明开始-->
				<div class="modal fade" align="left" id="cxsm" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">
										&times;
									</span>
									<span class="sr-only">
										Close
									</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">
									查询内容是什么？该输入什么？
								</h4>
							</div>
							<li class="list-group-item">
								<font color="red">
									请在右侧的输入框内输入您下单时，在第一个输入框内填写的信息
								</font>
							</li>
							<li class="list-group-item">
								例如您购买的是QQ名片赞，输入下单的QQ账号即可查询订单
							</li>
							<li class="list-group-item">
								例如您购买的是邮箱类商品，需要输入您的邮箱号，输入QQ号是查询不到的
							</li>
							<li class="list-group-item">
								例如您购买的是快手商品，需要输入作品链接里“userid=”后面的数字，输入快手号是一般是查询不到的
							</li>
							<li class="list-group-item">
								例如您购买的是全民K歌商品，需要输入歌曲链接里“shareuid=”后面的，&amp;前面的一串英文数字，输入歌曲链接是查询不到的
							</li>
							<li class="list-group-item">
								<font color="red">
									如果不清楚下单账号是什么，可以不填写，直接点击查询，则会根据浏览器缓存查询
								</font>
							</li>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									关闭
								</button>
							</div>
						</div>
					</div>
				</div>
				<!--查单说明结束-->
				<div class="block animated bounceInDown btn-rounded" style="border:1px solid #b3cde3; background: url(https://pan.suyanw.cn/view.php/c1740e560abfd65028e4c6b2ba26d604.png);margin-top:0px;font-size:15px;padding:5px;border-radius:15px;background-color: white;">
					<ul class="nav nav-tabs btn btn-block animated zoomInLeft btn-rounded"
					style="overflow: hidden;" data-toggle="tabs">
						<li class="active" style="width: 20%;" align="center">
							<a href="#shop" data-toggle="tab">
								<img border="0" width="22" src="https://pan.suyanw.cn/view.php/a4c308fe41a57c4751b133d9189161b4.gif">
								下单
							</a>
						</li>
						<li style="width: 25%;" align="center">
							<a href="#search" data-toggle="tab" id="tab-query">
								<i class="fa fa-search">
								</i>
								查单
							</a>
						</li>
						<li style="width: 25%;" align="center">
							<a href="#ktfz" data-toggle="tab">
							<i class="fa fa-smile-o fa-spin"></i>
								赚钱
							</a>
						</li>
						</li>
						<li style="width: 25%;" align="center" class="hide">
							<a href="#cardbuy" data-toggle="tab">
								<i class="glyphicon glyphicon-th">
								</i>
								卡密
							</a>
						</li>
						<li style="width: 25%;" align="center">
							<a href="#more" data-toggle="tab">
								<i class="fa fa-folder-open">
								</i>
								更多
							</a>
						</li>
					</ul>
					<!--TAB-->
					<div class="block-content tab-content">
						<!--在线下单-->

						<div class="tab-pane fade fade-up in active" id="shop">
							<?php include TEMPLATE_ROOT.'default/shop.inc.php'; ?>
						</div>
						<!--在线下单-->
						<!--查询订单-->
						<div class="tab-pane fade fade-up" id="search">
							<table class="table table-striped table-borderless table-vcenter remove-margin-bottom">
								<tbody>
									<tr class="shuaibi-tip animation-fadeInQuick2">
										<td class="text-center" style="width: 100px;">
											<img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']?>&spec=100" alt="avatar"
											class="img-circle img-thumbnail img-thumbnail-avatar">
										</td>
										<td>
											<h5>
												<strong>
													售后客服
												</strong>
											</h5>
											<i class="fa fa-comment-o text-success">
											</i>
											客服QQ:<?php echo $conf['kfqq']?>
										</td>
										<td class="text-right" style="width: 20%;">
											<a styel="letter-spacing: 3px;" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes"
											target="_blank" class="btn btn-sm btn-info">
												<i class="fa fa-qq">
												</i>
												&nbsp;联系
											</a>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="col-xs-12 well well-sm animation-pullUp">
								<p align="left">
									<font color="blue">
										<i class="">
										</i>
									</font>
									<font color="blue">
										付款未收到卡密,请在二十四小时内联系客服<br>-------------最简单的查单方式--------------
									</font>							
									<br>
									<font color="red">
										<i class="">
										</i>
									</font>
									<font color="red">
										什么浏览器购买的，直接用什么浏览器打开，什么也别填写，直接点立即查询。在手机QQ打开的购买的，用手机QQ打开网址点立即查询~！
									</font>						
								</p>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-btn">
										<select class="form-control" id="searchtype" style="padding: 6px 4px;width:90px">
											<option value="0">
												下单账号
											</option>
											<option value="1">
												订单号
											</option>
										</select>
									</div>
									<input type="text" name="qq" id="qq3" value="" class="form-control" placeholder="请输入要查询的内容（留空则显示最新订单）"
									required/>
									<span class="input-group-btn">
										<a href="#cxsm" target="_blank" data-toggle="modal" class="btn btn-warning">
											<i class="glyphicon glyphicon-exclamation-sign">
											</i>
										</a>
									</span>
								</div>
							</div>
							<input type="submit" id="submit_query" class="btn btn-primary btn-block"
							value="立即查询">
								<font color="red">
										<i class="">
										</i>
									</font>
									<font color="red">
								1.查单号:请输入您购买时候填写的手机号，如果填写的时候忘记填写的手机号请留空点击立即查询即可！
									</font>						
							<br/>
							<div id="result2" class="form-group" style="display:none;">
								<center>
									<small>
										<font color="#ff0000">
											手机用户可以左右滑动
										</font>
									</small>
								</center>
								<div class="table-responsive">
									<table class="table table-vcenter table-condensed table-striped">
										<thead>
											<tr>
												<th class="hidden-xs">
													下单账号
												</th>
												<th>
													商品名称
												</th>
												<th>
													数量
												</th>
												<th class="hidden-xs">
													购买时间
												</th>
												<th>
													状态
												</th>
												<th>
													操作
												</th>
											</tr>
										</thead>
										<tbody id="list">
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--查询订单-->
						<!--开通分站-->
    <div class="tab-pane" id="ktfz">
	<table class="table table-borderless animated bounceIn" style="text-align: center;">
    <tbody>	  <!-- 
  本代码由 五秒男 创建
  技术支持 QQ:836721503 
  严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 -->
<!--查单说明开始-->
      <tr class="active">
        <td>
          <h4>
            <span style="font-weight:bold">
              <font color="#FF8000">搭</font>
              <font color="#EC6D13">建</font>
              <font color="#D95A26">属</font>
              <font color="#C64739">于</font>
              <font color="#A0215F">自</font>
              <font color="#8D0E72">己</font>
              <font color="#5400AB">的</font>
              <font color="#4100BE">云</font>
              <font color="#2E00D1">商</font>
              <font color="#1B00E4">城</font></span>
          </h4>
        </td>
      </tr>
      <tr class="active">
        <td>0成本-适合学生/宅男/上班族/游戏科技大佬/游戏爱好者/自由职业/可以当作你的副业</tr>
      <tr class="active">
        <td>
          <strong>
            与本站一模一样的独立网站可以自己在站长后台修改内容公告等内容</strong></td>
      </tr>
            <tr class="active">
        <td><span class="glyphicon glyphicon-magnet"></span>&nbsp;快加入我们成为大家庭中的一员吧<hr> <a href="#userjs" data-toggle="modal" class="btn btn-effect-ripple  btn-info btn-sm" style="float:left;overflow: hidden; position: relative;">
            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;网站详情介绍</a>
          <a href="./user/regsite.php" target="_blank" class="btn btn-effect-ripple  btn-success btn-sm" style="float:right;overflow: hidden; position: relative;">
            <span class="glyphicon glyphicon-share-alt"></span>&nbsp;免费开通网站</a></td></tr>
      <tr>
    </tbody>
  </table>
	</div>
						<!--开通分站-->
						<!--抽奖-->
						<div class="tab-pane fade fade-up" id="gift">
							<div class="panel-body text-center">
								<div id="roll">
									点击下方按钮开始抽奖
								</div>
								<hr>
								<p>
									<a class="btn btn-info" id="start" style="display:block;">
										开始抽奖
									</a>
									<a class="btn btn-danger" id="stop" style="display:none;">
										停止
									</a>
								</p>
								<div id="result">
								</div>
								<br/>
								<div class="giftlist" style="display:none;">
									<strong>
										最近中奖记录
									</strong>
									<ul id="pst_1">
									</ul>
								</div>
							</div>
						</div>
						<!--抽奖-->	  <!-- 
  本代码由 五秒男 创建
  技术支持 QQ:836721503 
  严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 -->
<!--查单说明开始-->
						<!--卡密下单-->
						<div class="tab-pane fade fade-up" id="cardbuy">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										输入卡密
									</div>
									<input type="text" name="km" id="km" value="" class="form-control" onkeydown="if(event.keyCode==13){submit_checkkm.click()}"
									required/>
								</div>
							</div>
							<input type="submit" id="submit_checkkm" class="btn btn-primary btn-block"
							value="检查卡密">
							<div id="km_show_frame" style="display:none;">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											商品名称
										</div>
										<input type="text" name="name" id="km_name" value="" class="form-control"
										disabled/>
									</div>
								</div>
								<div id="km_inputsname">
								</div>
								<div id="km_alert_frame" class="alert alert-success animation-pullUp"
								style="display:none;">
								</div>
								<input type="submit" id="submit_card" class="btn btn-primary btn-block"
								value="立即购买">
								<div id="result1" class="form-group text-center" style="display:none;">
								</div>
							</div>
							<br />
						</div>
						<!--卡密下单-->
						<!--更多-->
						<div class="tab-pane fade fade-right" id="more">
							<div class="col-xs-6 col-sm-4 col-lg-4<?php if(empty($conf['appurl'])){?> hide<?php }?>">
								<a class="block block-link-hover2 text-center" href="<?php echo $conf['appurl'] ?>"
								target="_blank">
									<div class="block-content block-content-full bg-success">
										<i class="fa fa-cloud-download fa-3x text-white">
										</i>
										<div class="font-w600 text-white-op push-15-t">
											APP下载
										</div>
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-4 col-lg-4<?php if(empty($conf['daiguaurl'])){?> hide<?php }?>">
								<a class="block block-link-hover2 text-center" href="./?mod=daigua">
									<div class="block-content block-content-full bg-primary">
										<i class="fa fa-circle-o fa-3x text-white">
										</i>
										<div class="font-w600 text-white-op push-15-t">
											QQ代挂
										</div>
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-4 col-lg-4<?php if(empty($conf['invite_tid'])){?> hide<?php }?>">
								<a class="block block-link-hover2 text-center" href="./?mod=invite" target="_blank">
									<div class="block-content block-content-full bg-warning">
										<i class="fa fa-paper-plane-o fa-3x text-white">
										</i>
										<div class="font-w600 text-white-op push-15-t">
											免费领赞
										</div>
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-4 col-lg-4">
								<a class="block block-link-hover2 text-center" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes">
									<div class="block-content block-content-full bg-amethyst">
										<i class="fa fa-credit-card fa-3x text-white">
										</i>
										<div class="font-w600 text-white-op push-15-t">
											售后客服
											
                                        </div>
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-4 col-lg-4">
								<a class="block block-link-hover2 text-center" href="/user/findpwd.php">
									<div class="block-content block-content-full bg-success">
										<i class="fa fa-comments fa-3x text-white">
										</i>
										<div class="font-w600 text-white-op push-15-t">
											找回密码
										</div>
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-4 col-lg-4">
								<a class="block block-link-hover2 text-center" href="./user" target="_blank">
									<div class="block-content block-content-full bg-city">
										<i class="fa fa-certificate fa-3x text-white">
										</i>
										<div class="font-w600 text-white-op push-15-t">
											分站登录
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--版本介绍-->	  <!-- 
  本代码由 五秒男 创建
  技术支持 QQ:836721503 
  严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 -->
<!--查单说明开始-->
				<div class="modal fade" id="userjs" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-popin">
						<div class="modal-content">
							<div class="block block-themed block-transparent remove-margin-b">
								<div class="block-header bg-primary-dark">
									<ul class="block-options">
										<li>
											<button data-dismiss="modal" type="button">
												<i class="si si-close">
												</i>
											</button>
										</li>
									</ul>
									<h4 class="block-title">
										版本介绍
									</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table class="table table-borderless table-vcenter">
											<thead>
												<tr>
													<th style="width: 100px;">
														功能
													</th>
													<th class="text-center" style="width: 20px;">
														普及版/专业版
													</th>
												</tr>
											</thead>
											<tbody>
												<tr class="active">
													<td>
														专属代刷平台
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														三种在线支付接口
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="success">
													<td>
														专属网站域名
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														赚取用户提成
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="info">
													<td>
														赚取下级分站提成
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														设置商品价格
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="warning">
													<td>
														设置下级分站商品价格
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														搭建下级分站
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="danger">
													<td>
														赠送专属精致APP
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<center style="color: #b2b2b2;">
										<small>
											<em>
												* 自己的能力决定着你的收入！
											</em>
										</small>
									</center>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									关闭
								</button>
							</div>
						</div>
					</div>
				</div>
				<!--版本介绍-->
					  <!-- 
  本代码由 五秒男 创建
  技术支持 QQ:836721503 
  严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 -->
<!--查单说明开始-->
				<!--关于我们弹窗-->
				<div class="modal fade" align="left" id="about" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">
										&times;
									</span>
									<span class="sr-only">
										Close
									</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">
									新手下单帮助
								</h4>
							</div>
							<div class="modal-body">
								<a href="javascript:void(0)" class="widget">
									<center>
										<strong>
											<font size="3">
												站长ＱＱ:
												<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes"
												target="_blank">
													<?php echo $conf['kfqq']?>
												</a>
											</font>
										</strong>
										<br />
										<strong>
											<font size="2">
												本站域名：<?php echo $_SERVER['HTTP_HOST']; ?>
											</font>
										</strong>
									</center>
									<center>
										<div id="demo-acc-faq" class="panel-group accordion">
											<div class="panel panel-trans pad-top">
												<a href="#demo-acc-faq1" class="text-semibold text-lg text-main collapsed"
												data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">
													1.辅助下载地址打不开
												</a>
												<div id="demo-acc-faq1" class="mar-ver collapse" aria-expanded="false"
												style="height: 0px;">
														在您购买任何辅助之前都有先自己去打开看看下载地址是否失效<br>
					如果失效了及时反馈我们好处理这样也就更快的解决你的问题
												</div>
											</div>
											<div class="panel panel-trans pad-top">
												<a href="#demo-acc-faq2" class="text-semibold text-lg text-main collapsed"
												data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">
												2.我要申请退款
												</a>
												<div id="demo-acc-faq2" class="mar-ver collapse" aria-expanded="false">
												大部分情况下不支持退款，列如卡密已经发货了，买错了这些等都不能退款，自己的问题和本站没有关系
												</div>
											</div>
											<div class="panel panel-trans pad-top">
												<a href="#demo-acc-faq3" class="text-semibold text-lg text-main collapsed"
												data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">
													3.买了的东西能不能退换其他的
												</a>
												<div id="demo-acc-faq3" class="mar-ver collapse" aria-expanded="false">
												在你购买的时候你已经确认好要买的了，中途想换一款那是不可能的，本站产品不是实物没办法给你换希望理解
												</div>
											</div>
											<div class="panel panel-trans pad-top">
												<a href="#demo-acc-faq4" class="text-semibold text-lg text-main collapsed"
												data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">
												4.推荐玩什么那个好一点
												</a>
												<div id="demo-acc-faq4" class="mar-ver collapse" aria-expanded="false">
												如果你不知道玩什么那可以看商品列表最前面的前6个商品，有站长推荐字眼的商品都可以玩因为是站长主推的项目一般来说都比较稳定的
												</div>
												</div>
											</div>
										</div>
									</center>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<?php if($conf['articlenum']>0){
				$limit = intval($conf['articlenum']);
				$rs=$DB->query("SELECT id,title FROM pre_article WHERE active=1 ORDER BY top DESC,id DESC LIMIT {$limit}");
				$msgrow=array();
				while($res = $rs->fetch()){
					$msgrow[]=$res;
				}
				$class_arr = ['danger','warning','primary','success','info'];
				$i=0;
				?>
				<!--文章列表-->
				<div class="block block-themed" style="border-radius: 20px;box-shadow:0 5px 10px 0 rgba(0, 0, 0, 0.09);">
					<div class="block-header bg-amethyst" style="border-top-left-radius: 20px; border-top-right-radius: 20px;background-color: #b3cde3;border-color: #b3cde3; padding: 10px 10px;">
						<h3 class="block-title"><i class="fa fa-newspaper-o"></i> 文章列表</h3>
					</div>
					<?php foreach($msgrow as $row){
					echo '<a target="_blank" class="list-group-item" href="'.article_url($row['id']).'"><span class="btn btn-'.$class_arr[($i++)%5].' btn-xs">'.$i.'</span>&nbsp;'.$row['title'].'</a>';
					}?>
					<a href="<?php echo article_url()?>" title="查看全部文章" class="btn-default btn btn-block" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;font-weight: 100;/* border-radius: 20px; */-webkit-transition: all 0.15s ease-out;transition: all 0.15s ease-out;" target="_blank">查看全部文章</a>
				</div>
				<!--文章列表-->
				<?php }?>
				<?php if($conf['hide_tongji']==0){
				echo '
				<div class="block panel panel-primary btn btn-block animated bounceInUp btn-rounded" style="border:1px solid #b3cde3; background: url(https://s3.ax1x.com/2021/01/02/sSy9rq.png);margin-top:15px;font-size:15px;padding:15px;border-radius:15px;background-color: white;">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td align="center">
									<font size="2">
										<span id="count_yxts">
										</span>
										天
										<br>
										<font color="#fbb4c4">
											<i class="fa fa-shield fa-2x">
											</i>
										</font>
										<br>
										安全运营
									</font>
								</td>
								<td align="center">
									<font size="2">
										<span id="count_site">
										</span>
										个
										<br>
										<font color="#fbb4c4 ">
											<i class="fa fa-sitemap fa-2x">
											</i>
										</font>
										<br>
										代理分站
									</font>
								</td>
								<td align="center">
									<font size="2">
										<span id="count_orders">
										</span>
										笔
										<br>
										<font color="#fbb4c4 ">
											<i class="fa fa-check-square-o fa-2x">
											</i>
										</font>
										<br>
										订单总数
									</font>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			    ';}?>
				<!--底部导航-->
				<center>
					<div class="block panel-body btn btn-block animated bounceInUp btn-rounded" style="border:1px solid #b3cde3; background: url(https://s3.ax1x.com/2021/01/02/sSy9rq.png);margin-top:2px;font-size:15px;padding:2px;border-radius:10px;background-color: white;">
						<div class="block-content text-center border-t">
		<a href="javascript:void(0);" onclick="AddFavorite('货源总站',location.href)">
  <b style="text-shadow: LightSteelBlue 1px 0px 0px;">
  <i class="fa fa-heart text-danger animation-pulse"></i>
  <font color=#CB0034>本</font>
  <font color=#BE0041>站</font>
  <font color=#B1004E>网</font>
  <font color=#A4005B>址</font>
  <font color=#970068>：<?php echo $_SERVER['HTTP_HOST'];?></font>
  <font color=#2F00D0></font>
  <font color=#CB0034>&nbsp;</font>
  <font color=#CB0034>建</font>
  <font color=#BE0041>议</font>
  <font color=#B1004E>收</font>
  <font color=#A4005B>藏</font>
  </b>
</a>
<br/><?php echo $conf['footer']?>
	</div>
							<div id="tingliu">
								<font color="#093f86">
								<span class="tingliu2">
									您浏览了本站：
								</span>
								<span class="tingliu3" id="stime">
									0小时00分00秒
								</span>
							</div>
						</a>
					</div>
			</div>
			<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<!--底部导航-->
			<!-- 收藏代码开始-->
<script>
    function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("手机用户：点击底部 “≡” 添加书签/收藏网址!\n\n电脑用户：请您按 Ctrl+D 手动收藏本网址! ");
     }
  }
}
</script>
<!-- 收藏代码结束-->

	</div>
	<!--音乐代码-->
	<div id="audio-play" <?php if(empty($conf['musicurl'])){?>style="display:none;"<?php }?>>
	  <div id="audio-btn" class="on" onclick="audio_init.changeClass(this,'media')">
	    <audio loop="loop" src="<?php echo $conf['musicurl']?>" id="media" preload="preload"></audio>
	  </div>
	</div>
	<!--音乐代码-->
	<script src="<?php echo $cdnpublic?>jquery/1.12.4/jquery.min.js">
	</script>
	<script src="<?php echo $cdnpublic?>jquery.lazyload/1.9.1/jquery.lazyload.min.js">
	</script>
	<script src="<?php echo $cdnpublic?>twitter-bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script src="<?php echo $cdnpublic?>jquery-cookie/1.4.1/jquery.cookie.min.js">
	</script>
	<script src="<?php echo $cdnpublic?>layer/2.3/layer.js">
	</script>
	<script src="<?php echo $cdnserver ?>assets/appui/js/app.js">
	</script>
	<script type="text/javascript">
		var isModal = <?php echo empty($conf['modal']) ? 'false' : 'true'; ?> ;
		var homepage = true;
		var hashsalt = <?php echo $addsalt_js ?> ;
		$(function() {
   		 	$("img.lazy").lazyload({
        		effect: "fadeIn"
    		});
		});
		var ss = 0,
		    mm = 0,
		    hh = 0;
		
		function TimeGo() {
		    ss++;
		    if (ss >= 60) {
		        mm += 1;
		        ss = 0
		    }
		    if (mm >= 60) {
		        hh += 1;
		        mm = 0
		    }
		    ss_str = (ss < 10 ? "0" + ss : ss);
		    mm_str = (mm < 10 ? "0" + mm : mm);
		    tMsg = "" + hh + "小时" + mm_str + "分" + ss_str + "秒";
		    document.getElementById("stime").innerHTML = tMsg;
		    setTimeout("TimeGo()", 1000)
		}
		TimeGo();
		$("#submit_cart_shop").attr({'class':'btn btn-block animated zoomInLeft btn-rounded','style':'background-image: radial-gradient(circle 168px at center,  #ffc0cb 0%, #ffc0cb 47%, #ffc0cb 100%);color:#FFFFFF;'});
		$("#submit_buy").attr({'class':'btn btn-block animated zoomInRight btn-rounded','style':'background-image: radial-gradient(circle 168px at center,  #ff6781 0%, #ff6781 47%, #ff6781 100%);color:#FFFFFF;'});
	</script>
	<script src="assets/js/main.js?ver=<?php echo VERSION ?>"></script>
</body>
</html>