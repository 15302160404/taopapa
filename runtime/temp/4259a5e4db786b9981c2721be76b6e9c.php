<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"D:\Bitnami\apache2\htdocs\taopapa\public/../application/admin\view\author\details.html";i:1529116251;s:66:"D:\Bitnami\apache2\htdocs\taopapa\application\admin\view\main.html";i:1529288101;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>用户详情 - taopapa - 博客系统</title>
    <meta name="description" content="This is page-header (.page-header &gt; h1)" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/ace-fonts.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/ace.min.css" id="main-ace-style" />
    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/webupload/webuploader.css" />
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/datepicker.css" />
    <link rel="stylesheet" href="/taopapa/public/static/assets/css/ui.jqgrid.css" />
    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
        <style type="text/css">
            .CSSearchTbl{ border:1px #008CD4 solid;}
            .CSSearchTbl thead{}
            .CSSearchTbl thead tr{}
            .CSSearchTbl thead tr th{  text-align:left; padding-left:10px;}
            .CSSearchTbl tbody{}
            .CSSearchTbl tbody tr{}
            .CSSearchTbl tbody tr td{  padding: 10px;}
            .CSSearchTbl tbody tr td.right{ text-align: left;}
            .CSSearchTbl tbody tr td.left{ text-align: right;}
            .table-responsive{ display: none;}
        </style>
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default">
        <div class="navbar-container" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /section:basics/sidebar.mobile.toggle -->
            <div class="navbar-header pull-left">
                <!-- #section:basics/navbar.layout.brand -->
                <a href="<?php echo url('index/index'); ?>" class="navbar-brand">
						<small>
							<img src="/taopapa/public/static/assets/avatars/logo.png" alt="" />
						</small>
					</a>
            </div>
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="green">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>
                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-envelope-o"></i> 13条未读信息
                            </li>
                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#">
											<img src="/taopapa/public/static/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">B2C:</span>
													系统产生20个错误，12个警告...
												</span>
												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>2014-12-15 18:00:00</span>
												</span>
											</span>
										</a>
                                    </li>
                                    <li>
                                        <a href="#">
												<img src="/taopapa/public/static/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">积分商城:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
                                    </li>
                                    <li>
                                        <a href="#">
												<img src="/taopapa/public/static/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">政府机票采购:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
                                    </li>
                                    <li>
                                        <a href="#">
												<img src="assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">B2B:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
                                    </li>
                                    <li>
                                        <a href="#">
												<img src="assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">货运系统:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer">
                                <a href="inbox.html">
										查看全部消息
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #section:basics/navbar.user_menu -->
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/taopapa/public/static/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									欢迎您<br />
									<?php echo session('username_user','','admin'); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
										<i class="ace-icon fa fa-cog"></i>
										系统设置
									</a>
                            </li>
                            <li>
                                <a href="<?php echo url('user/profile'); ?>">
										<i class="ace-icon fa fa-user"></i>
										个人信息设置
									</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo url('user/logout'); ?>">
										<i class="ace-icon fa fa-power-off"></i>
										登出
									</a>
                            </li>
                        </ul>
                    </li>
                    <!-- /section:basics/navbar.user_menu -->
                </ul>
            </div>
            <!-- /section:basics/navbar.dropdown -->
        </div>
        <!-- /.navbar-container -->
    </div>
    <!-- /section:basics/navbar.layout -->
    <div class="main-container" id="main-container">
        <!-- #section:basics/sidebar -->
        <div id="sidebar" class="sidebar responsive">
            <ul class="nav nav-list">
                <li class="active">
                    <a href="<?php echo url('index/index'); ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> 总控制台 </span>
						</a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="<?php echo url('index/index/index'); ?>">
                            <i class="menu-icon fa fa-paper-plane"></i>
                            <span class="menu-text"> 前台通道 </span>
                        </a>
                    <b class="arrow"></b>
                </li>




                <!-- 作者管理 start -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> 管理作者 </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="<?php echo url('author/index'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    作者列表
                                </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <!-- 作者管理 end -->


                <!-- 友链管理 start -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> 友链管理 </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="http://v3.bootcss.com" target="_blank">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    bootstrap
                                </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="http://fontawesome.dashgame.com/" target="_blank">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    font-awesome
                                </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="https://www.pexels.com/" target="_blank">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    pexels高清图片
                                </a>
                            <b class="arrow"></b>
                        </li>     
                    </ul>
                </li>

                <!-- 友链管理 end -->





                <!-- 标签管理 start -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text"> 标签管理 </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="<?php echo url('category/index'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    所有标签
                                </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="#">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    回收站
                                </a>
                            <b class="arrow"></b>
                        </li>     
                    </ul>
                </li>

                <!-- 标签管理 end -->



                <li class="">
                    <a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> UI &amp; 元素 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="typography.html">
									<i class="menu-icon fa fa-caret-right"></i>
									排版
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									UI元素
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="buttons.html">
									<i class="menu-icon fa fa-caret-right"></i>
									按钮 &amp; 图标
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="treeview.html">
									<i class="menu-icon fa fa-caret-right"></i>
									树状结构
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="jquery-ui.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jQuery UI
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="nestable-list.html">
									<i class="menu-icon fa fa-caret-right"></i>
									可拖拽列表
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									三级菜单
									<b class="arrow fa fa-angle-down"></b>
								</a>
                            <b class="arrow"></b>
                            <ul class="submenu">
                                <li class="">
                                    <a href="#">
											<i class="menu-icon fa fa-leaf green"></i>
											第一级
										</a>
                                    <b class="arrow"></b>
                                </li>
                                <li class="">
                                    <a href="#" class="dropdown-toggle">
											<i class="menu-icon fa fa-pencil orange"></i>

											第四级
											<b class="arrow fa fa-angle-down"></b>
										</a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                        <li class="">
                                            <a href="#">
													<i class="menu-icon fa fa-plus purple"></i>
													添加商品
												</a>
                                            <b class="arrow"></b>
                                        </li>
                                        <li class="">
                                            <a href="#">
													<i class="menu-icon fa fa-eye pink"></i>
													查看商品
												</a>
                                            <b class="arrow"></b>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 表格 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									简单通用表格
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jqGrid插件表格
								</a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> 表单 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="form-elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									表单组件
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="form-wizard.html">
									<i class="menu-icon fa fa-caret-right"></i>
									向导提示 &amp; 验证
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="wysiwyg.html">
									<i class="menu-icon fa fa-caret-right"></i>
									编辑器
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="dropzone.html">
									<i class="menu-icon fa fa-caret-right"></i>
									文件上传
								</a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="widgets.html">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> 插件 </span>
						</a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								日历

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-transparent tooltip-error" title="有2件重要事件">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>

								<!-- /section:basics/sidebar.layout.badge -->
							</span>
						</a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="gallery.html">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> 相册 </span>
						</a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> 更多页面 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="profile.html">
									<i class="menu-icon fa fa-caret-right"></i>
									用户信息
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="pricing.html">
									<i class="menu-icon fa fa-caret-right"></i>
									售价单
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="invoice.html">
									<i class="menu-icon fa fa-caret-right"></i>
									购物车
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="timeline.html">
									<i class="menu-icon fa fa-caret-right"></i>
									时间轴
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="login.html">
									<i class="menu-icon fa fa-caret-right"></i>
									登录注册
								</a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								其他页面

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-primary">5</span>

								<!-- /section:basics/sidebar.layout.badge -->
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="faq.html">
									<i class="menu-icon fa fa-caret-right"></i>
									帮助页面
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="error-404.html">
									<i class="menu-icon fa fa-caret-right"></i>
									404错误页面
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="error-500.html">
									<i class="menu-icon fa fa-caret-right"></i>
									500错误页面
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="grid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									网格
								</a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="blank.html">
									<i class="menu-icon fa fa-caret-right"></i>
									空白页面
								</a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.nav-list -->
            <!-- #section:basics/sidebar.layout.minimize -->
            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>
        
<!-- /section:basics/sidebar -->
<div class="main-content">
    <!-- #section:basics/content.breadcrumbs -->
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="index.html">后台首页</a>
            </li>
            <li>
                <a href="javascript:void(0)">用户个人资料</a>
            </li>
        </ul>
        <!-- /.breadcrumb -->
        <!-- #section:basics/content.searchbox -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
								<input type="text" placeholder="请输入关键字 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
            </form>
        </div>
        <!-- /.nav-search -->
    </div>
    <!-- /section:basics/content.breadcrumbs -->
    <div class="page-content">
        <!-- /section:settings.box -->
        <div class="page-content-area">
            <div class="row">
                <div class="col-xs-12">
                    <div id="user-profile-2" class="user-profile">
                        <div class="tabbable">
                            <ul class="nav nav-tabs padding-18">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">
														<i class="green icon-user bigger-120"></i>
														详细资料
													</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#friends">
														<i class="blue icon-group bigger-120"></i>
														联系人
													</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#pictures">
														<i class="pink icon-picture bigger-120"></i>
														个人博客
													</a>
                                </li>
                            </ul>
                            <div class="tab-content no-border padding-24">
                                <div id="home" class="tab-pane in active">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <span class="profile-picture">
												<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?php if($author['logo'] == ''): ?>/taopapa/public/static/assets/avatars/profile-pic.jpg<?php else: ?><?php echo $author['logo']; endif; ?>" />
											</span>
                                            <div class="space space-4"></div>
                                            <a href="#" class="btn btn-sm btn-block btn-primary" data-toggle="modal" data-target="#upload">
												<i class="icon-envelope-alt bigger-110"></i>
												<span class="bigger-110">发送消息</span>
											</a>
                                            <!-- 模态框 -->
                                            <div class="modal fade" tagindex="-1" id="upload" role="dialog" aria-labelledby="gridSystemModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="gridSystemModalLabel">通知他（她）</h4>
                                                        </div>
                                                        <form action="<?php echo url('author/send',['username'=>$author['username']]); ?>" method="post"  class="form-horizontal">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="title1" class="col-sm-2 control-label">标题</label>
                                                                    <div class="col-sm-10">
                                                                      <input type="text" class="form-control" id="title1" placeholder="标题">
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="content1" class="col-sm-2 control-label">内容</label>
                                                                    <div class="col-sm-10">
                                                                      <textarea class="form-control" rows="3" id="content1" placeholder="内容"></textarea>
                                                                    </div>
                                                                  </div>
                                                                  
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                                                <input type="submit" value="发送" class="btn btn-success" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /span -->
                                        <div class="col-xs-12 col-sm-9">
                                            <h4 class="blue">
																<span class="middle"><?php echo $author['realname']; ?></span>

																<span class="label label-purple arrowed-in-right">
																	<i class="icon-circle smaller-80 align-middle"></i>
																	<?php switch($author['status']): case "0": ?>删除<?php break; case "1": ?>在线<?php break; case "2": ?>私有<?php break; case "3": ?>禁用<?php break; default: endswitch; ?>
																</span>
															</h4>
                                            <div class="profile-user-info">
                                                
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> 用户名 </div>
                                                    <div class="profile-info-value">
                                                        <span><?php echo $author['username']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> 地址 </div>
                                                    <div class="profile-info-value">
                                                        <i class="icon-map-marker light-orange bigger-110"></i>
                                                        <span>中山市火炬开发区</span>
                                                        <span>博爱七路25号中山职业技术学院</span>
                                                    </div>
                                                </div>
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> 年龄 </div>
                                                    <div class="profile-info-value">
                                                        <span><?php echo date('Y')-1994; ?></span>
                                                    </div>
                                                </div>
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> 加入公司时间 </div>
                                                    <div class="profile-info-value">
                                                        <span><?php echo date('d/m/Y'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr hr-8 dotted"></div>
                                            <div class="profile-user-info">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> 个人网站 </div>
                                                    <div class="profile-info-value">
                                                        <a href="http://wlh.whoisMy94.top" target="_blank">wlh.whoisMy94.top</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /span -->
                                    </div>
                                    <!-- /row-fluid -->
                                    <div class="space-20"></div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h4 class="smaller">
																		<i class="icon-check bigger-110"></i>
																		自我介绍
																	</h4>
                                                </div>
                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <p>
                                                            我是一 名本科毕业生，毕业刚半年，学的是英语专业，大学毕业后一直从事翻译员一职。一直以来都很想从事教育工作，但因为一些特殊的原因一直未去考取教师资格证， 这段时间才开始准备考取此证书。不过，我认为，一个人的能力并非完全是由一纸证书来权衡的；同时，暂时还未取得教师资格证并不能说明以后不会有。我忠诚地 希望贵单位能够给我一次任职的机会，让我能够在教育行业中干出一番事业！
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small header-color-blue2">
                                                    <h4 class="smaller">
																		<i class="icon-lightbulb bigger-120"></i>
																		技能专长
																	</h4>
                                                </div>
                                                <div class="widget-body">
                                                    <div class="widget-main padding-16">
                                                        <div class="clearfix">
                                                            <div class="grid3 center">
                                                                <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
                                                                    <span class="percent">45</span>%
                                                                </div>
                                                                <div class="space-2"></div>
                                                                平面设计
                                                            </div>
                                                            <div class="grid3 center">
                                                                <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                                                    <span class="percent">90</span>%
                                                                </div>
                                                                <div class="space-2"></div>
                                                                HTML5 & CSS3
                                                            </div>
                                                            <div class="grid3 center">
                                                                <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                                                    <span class="percent">80</span>%
                                                                </div>
                                                                <div class="space-2"></div>
                                                                Javascript/jQuery
                                                            </div>
                                                        </div>
                                                        <div class="hr hr-16"></div>
                                                        <div class="profile-skills">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width:80%">
                                                                    <span class="pull-left">HTML5 & CSS3</span>
                                                                    <span class="pull-right">80%</span>
                                                                </div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-success" style="width:72%">
                                                                    <span class="pull-left">Javascript & jQuery</span>
                                                                    <span class="pull-right">72%</span>
                                                                </div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                    <span class="pull-left">PHP & MySQL</span>
                                                                    <span class="pull-right">70%</span>
                                                                </div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                    <span class="pull-left">Wordpress</span>
                                                                    <span class="pull-right">50%</span>
                                                                </div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-danger" style="width:35%">
                                                                    <span class="pull-left">Photoshop</span>
                                                                    <span class="pull-right">35%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #home -->
                                <div id="friends" class="tab-pane">
                                    <div class="profile-users clearfix">
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar4.png" alt="Bob Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-online"></span>
																			Bob Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">Content Editor</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 orange"></i>
                                                            <span class="green"> 20 mins ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar1.png" alt="Rose Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-offline"></span>
																			Rose Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">Graphic Designer</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 grey"></i>
                                                            <span class="grey"> 30 min ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar.png" alt="Jim Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-busy"></span>
																			Jim Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">SEO &amp; Advertising</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 red"></i>
                                                            <span class="grey"> 1 hour ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar5.png" alt="Alex Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-idle"></span>
																			Alex Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">Marketing</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 orange"></i>
                                                            <span class=""> 40 minutes idle </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar2.png" alt="Phil Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-online"></span>
																			Phil Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">Public Relations</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 orange"></i>
                                                            <span class="green"> 2 hours ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar3.png" alt="Susan Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
															<span class="user-status status-online"></span>
															Susan Doe
														</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">HR Management</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 orange"></i>
                                                            <span class="green"> 20 mins ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar1.png" alt="Jennifer Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-offline"></span>
																			Jennifer Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">Graphic Designer</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 grey"></i>
                                                            <span class="grey"> 2 hours ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itemdiv memberdiv">
                                            <div class="inline position-relative">
                                                <div class="user">
                                                    <a href="#">
																		<img src="/taopapa/public/static/assets/avatars/avatar3.png" alt="Alexa Doe's avatar" />
																	</a>
                                                </div>
                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">
																			<span class="user-status status-offline"></span>
																			Alexa Doe
																		</a>
                                                    </div>
                                                </div>
                                                <div class="popover">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="bolder">Accounting</div>
                                                        <div class="time">
                                                            <i class="icon-time middle bigger-120 grey"></i>
                                                            <span class="grey"> 4 hours ago </span>
                                                        </div>
                                                        <div class="hr dotted hr-8"></div>
                                                        <div class="tools action-buttons">
                                                            <a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>
                                                            <a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr hr10 hr-double"></div>
                                    <ul class="pager pull-right">
                                        <li class="previous disabled">
                                            <a href="#">&larr; 前一页</a>
                                        </li>
                                        <li class="next">
                                            <a href="#">后一页 &rarr;</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /#friends -->
                                <div id="pictures" class="tab-pane">
                                    <ul class="ace-thumbnails">
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-3.jpg" />
											     <div class="text">
												    <div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-2.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-3.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-4.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-5.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-6.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-1.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-rel="colorbox">
												<img alt="150x150" src="/taopapa/public/static/assets/images/gallery/thumb-2.jpg" />
												<div class="text">
													<div class="inner">带遮罩提示的相册例子</div>
												</div>
											</a>
                                            <div class="tools tools-bottom">
                                                <a href="#">
													<i class="icon-link"></i>
												</a>
                                                <a href="#">
													<i class="icon-paper-clip"></i>
												</a>
                                                <a href="#">
													<i class="icon-pencil"></i>
												</a>
                                                <a href="#">
													<i class="icon-remove red"></i>
												</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /#pictures -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.page-content-area -->
    </div>
    <!-- /.page-content -->
</div>
<!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner"> 
                <!-- #section:basics/footer -->
                <div class="footer-content">
                    <span class="bigger-120">
						taopapa-博客系统 &copy; <?php echo date('Y'); ?>
					</span>
                </div>
                <!-- /section:basics/footer -->
            </div>
        </div>
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
    </div>
    <!-- /.main-container -->
    <!--[if !IE]> -->
    <script type="text/javascript">
    window.jQuery || document.write("<script src='/taopapa/public/static/assets/js/jquery.min.js'>" + "<" + "/script>");
    </script>
    <!-- <![endif]-->
    <!--[if IE]>
			<script type="text/javascript">
			 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
			</script>
		<![endif]-->
    <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/taopapa/public/static/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="/taopapa/public/static/assets/js/bootstrap.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="/taopapa/public/static/assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="/taopapa/public/static/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
    <script src="/taopapa/public/static/assets/js/jqGrid/i18n/grid.locale-en.js"></script>
    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="/taopapa/public/static/assets/js/jquery-ui.custom.min.js"></script>
    <script src="/taopapa/public/static/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/taopapa/public/static/assets/webupload/webuploader.js"></script>
    <script src="/taopapa/public/static/assets/js/jquery.dataTables.min.js"></script>
    <script src="/taopapa/public/static/assets/js/jquery.dataTables.bootstrap.js"></script>
    <!-- ace -->
    <script src="/taopapa/public/static/assets/js/ace-elements.min.js"></script>
    <script src="/taopapa/public/static/assets/js/ace-extra.min.js"></script>
    <script src="/taopapa/public/static/assets/js/ace.min.js"></script>
    <script>
        var pathname = window.location.pathname + window.location.search;
        $(".submenu li a").each(function() {
            var href = $(this).attr("href");
            if (pathname == href) {
                console.log('a');
                $(this).parent("li").addClass("active");
                $(this).parent().parent().parent().addClass("active open");
            }
        });
        </script>
    <script type="text/javascript">
    jQuery(function($) {

        $(".tbl-search").click(function(){
            $(".table-responsive").slideDown("fast");
        })

        var oTable1 = 
        $('#sample-table-2')
        .dataTable( {
            bAutoWidth: false,
            bInfo:flase,
            "aoColumns": [
              { "bSortable": false },
              null, 
              null,
              null,
              null, 
              null,
              { "bSortable": false },
              null,
              { "bSortable": false }
            ],
            "aaSorting": [],
        } );
    
        $(document).on('click', 'th input:checkbox' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
            .each(function(){
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
        });                  
    })
    </script>
</body>

</html>