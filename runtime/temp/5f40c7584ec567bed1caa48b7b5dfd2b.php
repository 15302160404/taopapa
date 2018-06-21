<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\xampp\htdocs\taopapa\public/../application/admin\view\index\index.html";i:1529546873;s:56:"D:\xampp\htdocs\taopapa\application\admin\view\main.html";i:1529546873;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>后台首页 - taopapa - 博客系统</title>
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
    <!--[if !IE]> -->
    <script type="text/javascript">
    window.jQuery || document.write("<script src='/taopapa/public/static/assets/js/jquery.min.js'>" + "<" + "/script>");
    </script>
    <!-- <![endif]-->
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
                            <i class="menu-icon fa fa-users"></i>
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

                <!-- 文章管理 start -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> 文章管理 </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="<?php echo url('article/index'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    用户文章
                                </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?php echo url('article/indexAdmin'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    我的文章
                                </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?php echo url('article/recycle'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    回收站
                                </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <!-- 文章管理 end -->


                <!-- 标签管理 start -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-bookmark"></i>
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
                            <a href="<?php echo url('category/recycle'); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    回收站
                                </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <!-- 标签管理 end -->



                <!-- 友链管理 start -->
                <li class="">
                    <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-link"></i>
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
                <a href="index.html">UI库首页</a>
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
        <!-- /section:basics/content.searchbox -->
    </div>
    <div class="page-content">
        <!-- /section:settings.box -->
        <div class="page-content-area">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="alert alert-block alert-info">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                        </button>
                        <i class="ace-icon fa fa-check green"></i>
                        <strong class="green">最新公告：</strong> 南航开通华中首条直达美国航线，广州-武汉-旧金山首航，为中部崛起注入创新活力
                    </div>
                    <div class="row center">
                        <img src="/taopapa/public/static/assets/avatars/logo_2.png" />
                    </div>
                    <!-- PAGE CONTENT ENDS -->
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
    <!-- 操作标签 -->
    <script type="text/javascript">
        $('.cz .del').click(function(){
            var id= $(this).children('input').val();
            $.ajax({
                url:"<?php echo url('category/delCategory'); ?>",
                data:{
                    id:id,
                },
                async:true,//是否异步请求
                cache:false,//是否缓存结果
                type:"POST",
                dateType:"json",
                success:function(data){
                    window.history.go(0);
                },
                error:function(data){
                    alert(data);
                }
            });
        });

    </script>
</body>

</html>