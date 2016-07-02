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
				<strong class="am-text-primary am-text-lg">角色管理</strong> / <small>role
					manager</small>
			</div>
		</div>

		<hr>

		<div class="am-tabs am-margin" data-am-tabs>
			<ul class="am-tabs-nav am-nav am-nav-tabs">
				<li class="am-active"><a href="#tab1">增加角色</a></li>
				
				<!--
					<li><a href="#tab2">查询角色</a></li> 
        			<li><a href="#tab3">编辑角色</a></li> 
        		-->
				<li><a href="#tab2">角色列表</a></li>
			</ul>

			<div class="am-tabs-bd">
				<div class="am-tab-panel am-fade am-in am-active" id="tab1">
					<form class="am-form" action="/flow_manger/Home/Role/add"
						method="post">
						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">角色名</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<input type="text" class="am-input-sm" name="role_name">
							</div>
						</div>

						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">角色备注</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<input type="text" class="am-input-sm" name="role_remark">
							</div>
						</div>
						 
						<input type="hidden" class="am-input-sm" name="download_time">
						<!--  
						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">下载日期</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<input type="text" class="am-input-sm" name="download_time">
							</div>
						</div>
-->

						<div class="am-g am-margin-top-sm">
							<div class="am-u-sm-4 am-u-md-2 am-text-right">描述</div>
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<p><?php echo ($errmsg); ?>
									温馨提示：这段话前面有个 errmsg 字段，可以将错误信息传过来，然后可以在这里写用户提示。</p>

							</div>
						</div>
						<div class="am-margin">
							<div class="am-u-sm-8 am-u-md-4 am-u-end">
								<button type="submit" class="am-btn am-btn-primary am-btn-xs">
									添加</button>
							</div>
						</div>
					</form>


				</div>

				<div class="am-tab-panel am-fade" id="tab2">
					<form class="am-form">
						<div class="am-g am-margin-top">
							<table
								class="am-table am-table-striped am-table-hover table-main">
								<thead>
									<tr>
										<th class="table-check"></th>
										<th class="table-id">ID</th>
										<th class="table-type">角色名称</th>
										<th class="table-title">角色状态</th>
										<th class="table-author am-hide-sm-only">角色可访问路径</th>
										<th class="table-author am-hide-sm-only">角色备注</th>
										<th class="table-author am-hide-sm-only">创建日期</th>
										<th class="table-date am-hide-sm-only">修改日期</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td>
											<!-- -<input type="checkbox" /> -->
										</td>
										<td><?php echo ($vo["id"]); ?></td>
										<td><a href="#"><?php echo ($vo["title"]); ?>  </a></td>
										<td class="am-hide-sm-only"><?php echo ($vo["status"]); ?></td>
										<td><?php echo ($vo["rules"]); ?></td>
										<td class="am-hide-sm-only"><?php echo ($vo["remark"]); ?></td>
										<td class="am-hide-sm-only"><?php echo ($vo["create_time"]); ?></td>
										<td class="am-hide-sm-only"><?php echo ($vo["update_time"]); ?></td>
										<td>
											<div class="am-btn-toolbar">
												<div class="am-btn-group am-btn-group-xs">
													<button
														class="am-btn am-btn-default am-btn-xs am-text-secondary">
														<a href="/flow_manger/Home/Role/edit/id/<?php echo ($vo["id"]); ?>">
															<span class="am-icon-pencil-square-o"></span> 编辑
														</a>
													</button>

													<button
														class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
														<a href="/flow_manger/Home/Role/delete/id/<?php echo ($vo["id"]); ?>">
															<span class="am-icon-trash-o"></span> 删除
														</a>
													</button>
													
													<button
														class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
														<a href="/flow_manger/Home/Role/member/id/<?php echo ($vo["id"]); ?>">
															<span class="am-icon-trash-o"></span> 成员管理
														</a>
													</button>
													<button
														class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
														<a href="/flow_manger/Home/Role/member/id/<?php echo ($vo["id"]); ?>">
															<span class="am-icon-trash-o"></span> 栏目可视权限
														</a>
													</button>
													<button
														class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
														<a href="/flow_manger/Home/Role/member/id/<?php echo ($vo["id"]); ?>">
															<span class="am-icon-trash-o"></span> 栏目操作权限
														</a>
													</button>
												</div>
											</div>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>

								</tbody>
							</table>
						</div>


					</form>
				</div>
			</div>
 
		</div>

		<footer class="admin-content-footer">
			<hr>
			<p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed
				under MIT license.</p>
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