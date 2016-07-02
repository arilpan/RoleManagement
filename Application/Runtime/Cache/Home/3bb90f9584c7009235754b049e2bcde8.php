<?php if (!defined('THINK_PATH')) exit();?>
    <!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>流量管理平台</title>
<meta name="description" content="打车数据管理平台">
<meta name="keywords" content="user">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/flow_manger/Public/i/favicon.png">
<link rel="apple-touch-icon-precomposed"
	href="/flow_manger/Public/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/flow_manger/Public/css/amazeui.min.css" />
<link rel="stylesheet" href="/flow_manger/Public/css/admin.css">
<script src="/flow_manger/Public/js/jquery.min.js"></script>

</head>
<body>
	<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，系统 UI暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

	<header class="am-topbar am-topbar-inverse admin-header">
		<div class="am-topbar-brand">
			<strong>流量管理</strong> <small>后台管理</small>
		</div>

		<button
			class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
			data-am-collapse="{target: '#topbar-collapse'}">
			<span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span>
		</button>

		<div class="am-collapse am-topbar-collapse" id="topbar-collapse">

			<ul
				class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
				<!-- 
					<li><a href="javascript:;"><span class="am-icon-envelope-o"></span>
						收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
				 -->



				<li><a href="/flow_manger/Home/System/index"><span
						class="am-icon-home"></span> 首页</a></li>
				<li class="am-dropdown" data-am-dropdown><a
					class="am-dropdown-toggle" data-am-dropdown-toggle
					href="javascript:;" data-am-collapse="{target: '#collapse-nav'}">
						<span class="am-icon-file"></span>占位，暂不用<span
						class="am-icon-caret-down"></span>
				</a>
					<ul class="am-dropdown-content">
						<!-- 
						<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
						<li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
						-->
						<li><a href="/flow_manger/Home/Role/index" class="am-cf"><span
								class="am-icon-check"></span> 角色管理<span
								class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
						<li><a href="/flow_manger/Home/Action/index"><span
								class="am-icon-puzzle-piece"></span> 权限管理</a></li>
						<li><a href="/flow_manger/Home/User/index"><span
								class="am-icon-puzzle-piece"></span> 用户管理</a></li>
						<li><a href="/flow_manger/Home/Flow/index"><span
								class="am-icon-pencil-square-o"></span> 流量管理</a></li>
						<!--
							<li><a href="/flow_manger/Home/Admin/edit"><span
									class="am-icon-pencil-square-o"></span> 编辑数据</a></li>-->
						<li><a href="/flow_manger/Home/Database/index"><span
								class="am-icon-puzzle-piece"></span> 数据库管理</a></li>
					</ul></li>
				<li><a href="/flow_manger/Home/Role/index"><span
						class="am-icon-table"></span> 角色管理</a></li>
				<li><a href="/flow_manger/Home/Action/index"><span
						class="am-icon-file"></span> 权限管理</a></li>
				<li><a href="/flow_manger/Home/User/index"><span
						class="am-icon-table"></span> 用户管理</a></li>
				<li><a href="/flow_manger/Home/Flow/index"><span
						class="am-icon-table"></span> 流量管理</a></li>
							<li><a href="/flow_manger/Home/Database/index"><span
						class="am-icon-table"></span> 数据库管理</a></li>
				<li><a href="/flow_manger/Home/User/logout"><span
						class="am-icon-sign-out"></span> （用户：超级管理员）注销登陆</a></li>
				<li class="am-hide-sm-only"><a href="javascript:;"
					id="admin-fullscreen"><span class="am-icon-arrows-alt"></span>
						<span class="admin-fullText">开启全屏</span></a></li>
			</ul>
		</div>
	</header>

	<div class="am-cf admin-main">
		<!-- sidebar start -->

		<!-- sidebar end -->
<!-- content start -->
<div class="admin-content">
	<div class="admin-content-body">
		<div class="am-cf am-padding am-padding-bottom-0">
			<div class="am-fl am-cf">
				<strong class="am-text-primary am-text-lg">编辑角色</strong> / <small>edit role</small>
			</div>
		</div>

		<hr>

		<div class="am-tabs am-margin" data-am-tabs>
			<ul class="am-tabs-nav am-nav am-nav-tabs">
				<li class="am-active"><a href="#tab1">编辑角色</a></li>
			</ul>

			<div class="am-tabs-bd">
				<div class="am-tab-panel am-fade am-in am-active" id="tab1">
					<form class="am-form"
						action="/flow_manger/Home/Role/edit/id/<?php echo ($_GET['id']); ?>"
						method="post">
						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">角色名</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<input type="text" class="am-input-sm" name="role_name"
									value='<?php echo ($info[title]); ?>'>
							</div>
						</div>

						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">角色备注</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<input type="text" class="am-input-sm" name="role_remark"
									value='<?php echo ($info[remark]); ?>'>
							</div>
						</div>
						
						<!-- 
						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">司机地区</div>
							<div class="am-u-sm-8 am-u-md-10">
								<select data-am-selected="{maxHeight: 150 }" name="area_id"
									id="area_id" value='<?php echo ($info[area_id]); ?>'>
									<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><br />
									<option value="<?php echo ($vo[id]); ?>"><?php echo ($vo[area]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

								</select>
								<script type="text/javascript">
									$(document)
											.ready(
													function() {
														$("#area_id")
																.find(
																		"option[value='<?php echo ($info[area_id]); ?>']")
																.attr(
																		"selected",
																		true);
													});
								</script>
							</div>
						</div>
						
						
						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">下载日期</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<input type="text" class="am-input-sm" name="download_time"
									value='<?php echo ($info[download_time]); ?>'>
							</div>
						</div> -->
						<br>
						<br>
						<br>
						<br>
						<div class="am-margin">
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<button type="submit" class="am-btn am-btn-primary am-btn-xs">
									提交编辑</button>
							</div>
						</div>
					</form>


				</div>


			</div>
		</div>


	</div>

	<footer class="admin-content-footer">
		<hr>
		<p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under
			MIT license.</p>
	</footer>
</div>
<!-- content end -->

	</div>

	<a href="#"
		class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
		data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

	<footer>
		<hr>
		<p class="am-padding-left">© 2016 arilpan@qq.com   </p>
	</footer>

	<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/flow_manger/Public/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

	<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="/flow_manger/Public/js/jquery.min.js"></script>
	<!--<![endif]-->
	<script src="/flow_manger/Public/js/amazeui.min.js"></script>

	<script src="/flow_manger/Public/js/app.js"></script>
</body>
</html>