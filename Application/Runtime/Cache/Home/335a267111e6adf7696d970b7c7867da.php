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
						<span class="am-icon-file"></span>(占位，暂时无用) 角色管理<span
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
				<li><a href="/flow_manger/Home/Admin/logout"><span
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
        <strong class="am-text-primary am-text-lg">表单</strong> /
        <small>form</small>
      </div>
    </div>

    <hr>

    <div class="am-tabs am-margin" data-am-tabs>
      <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">基本信息</a></li>
        <li><a href="#tab2">详细描述</a></li>
        <li><a href="#tab3">SEO 选项</a></li>
      </ul>

      <div class="am-tabs-bd">
        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">所属类别</div>
            <div class="am-u-sm-8 am-u-md-10">
              <select data-am-selected="{btnSize: 'sm'}">
                <option value="option1">选项一...</option>
                <option value="option2">选项二.....</option>
                <option value="option3">选项三........</option>
              </select>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">显示状态</div>
            <div class="am-u-sm-8 am-u-md-10">
              <div class="am-btn-group" data-am-button>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="radio" name="options" id="option1"> 正常
                </label>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="radio" name="options" id="option2"> 待审核
                </label>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="radio" name="options" id="option3"> 不显示
                </label>
              </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">推荐类型</div>
            <div class="am-u-sm-8 am-u-md-10">
              <div class="am-btn-group" data-am-button>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="checkbox"> 允许评论
                </label>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="checkbox"> 置顶
                </label>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="checkbox"> 推荐
                </label>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="checkbox"> 热门
                </label>
                <label class="am-btn am-btn-default am-btn-xs">
                  <input type="checkbox"> 轮播图
                </label>
              </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              发布日期
            </div>
            <div class="am-u-sm-8 am-u-md-10">
              <form action="" class="am-form am-form-inline">
                <div class="am-form-group am-form-icon">
                  <i class="am-icon-calendar"></i>
                  <input type="date" class="am-form-field am-input-sm" placeholder="日期">
                </div>
              </form>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              发布时间
            </div>
            <div class="am-u-sm-8 am-u-md-10">
              <form action="" class="am-form am-form-inline">
                <div class="am-form-group am-form-icon">
                  <i class="am-icon-calendar"></i>
                  <input type="datetime-local" class="am-form-field am-input-sm" placeholder="时间">
                </div>
              </form>
            </div>
          </div>

        </div>

        <div class="am-tab-panel am-fade" id="tab2">
          <form class="am-form">
            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                文章标题
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm">
              </div>
              <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                文章作者
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                信息来源
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm">
              </div>
              <div class="am-hide-sm-only am-u-md-6">选填</div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                内容摘要
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm">
              </div>
              <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                内容描述
              </div>
              <div class="am-u-sm-12 am-u-md-10">
                <textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>
              </div>
            </div>

          </form>
        </div>

        <div class="am-tab-panel am-fade" id="tab3">
          <form class="am-form">
            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                SEO 标题
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end">
                <input type="text" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                SEO 关键字
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end">
                <input type="text" class="am-input-sm">
              </div>
            </div>

            <div class="am-g am-margin-top-sm">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                SEO 描述
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end">
                <textarea rows="4"></textarea>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

    <div class="am-margin">
      <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
      <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
    </div>
  </div>

  <footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
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