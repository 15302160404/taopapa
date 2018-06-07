<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\xampp\htdocs\taopapa\public/../application/index\view\author\index.html";i:1528341925;s:56:"D:\xampp\htdocs\taopapa\application\index\view\base.html";i:1528339569;}*/ ?>
<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taopapa-博客之家 发现技术的地方</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/taopapa/public/static/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/taopapa/public/static/frontend/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/taopapa/public/static/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/taopapa/public/static/frontend/css/author.css">
    <link rel="stylesheet" type="text/css" href="/taopapa/public/static/frontend/css/font-awesome.min.css">
    <link href="/taopapa/public/static/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" href="/taopapa/public/static/frontend/images/icon.png">
    <link rel="shortcut icon" href="/taopapa/public/static/frontend/images/title.ico">
    <script src="/taopapa/public/static/frontend/js/jquery-2.1.4.min.js"></script>
    <script src="/taopapa/public/static/frontend/js/nprogress.js"></script>
    <script src="/taopapa/public/static/frontend/js/jquery.lazyload.min.js"></script>
    <!--[if gte IE 9]>
      <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script src="js/html5shiv.min.js" type="text/javascript"></script>
      <script src="js/respond.min.js" type="text/javascript"></script>
      <script src="js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
    <style>
      .pagination{
        display: block !important;
      }
      .caozuo{
        display: none;
      }
      .caozuo a{
        color:#777 !important;
        font-size: 25px;
        padding:0px 10px;
      }
      .caozuo a:hover{
        color:#999 !important;
        opacity: 0.5;
      }
      .list_blog .thumbnail:hover .caozuo{
        display: block;
      }
      .me_data{
        margin-top:20px;
      }
    </style>
</head>

<body class="user-select">
    <header class="header">
        <nav class="navbar navbar-default" id="navbar">
            <div class="container">
                <div class="header-topbar hidden-xs link-border">
                    <?php if(session('username','','author') == ''): ?>
                    <ul class="site-nav topmenu">
                        <li><a href="http://www.muzhuangnet.com/tags/">标签云</a></li>
                        <li><a href="http://www.muzhuangnet.com/readers/" rel="nofollow">读者墙</a></li>
                        <li><a href="http://www.muzhuangnet.com/rss.html" title="RSS订阅">
                <i class="fa fa-rss">
                </i> RSS订阅
            </a></li>
                        <li><a href="<?php echo url('login/index'); ?>" rel="nofollow">登录</a></li>
                        <li><a href="<?php echo url('regist/index'); ?>" rel="nofollow">注册</a></li>
                    </ul>
                    <?php else: ?>
                    <ul class="site-nav topmenu">
                        <li><a href="http://www.muzhuangnet.com/tags/">标签云</a></li>
                        <li><a href="http://www.muzhuangnet.com/readers/" rel="nofollow">读者墙</a></li>
                        <li><a href="http://www.muzhuangnet.com/rss.html" title="RSS订阅">
                <i class="fa fa-rss">
                </i> RSS订阅
            </a></li>
                        <li><em class="text-info">欢迎您</em></li>
                        <li><a href="<?php echo url('author/index'); ?>" rel="nofollow"><?php echo session('username','','author'); ?></a></li>
                        <li><a href="<?php echo url('index/logout'); ?>">注销</a></li>
                    </ul>
                    <?php endif; ?> 勤记录 懂分享</div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <h1 class="logo hvr-bounce-in"><a href="<?php echo url('index/index'); ?>" title="Taopapa-博客之家"><img src="/taopapa/public/static/frontend/images/logo.png" alt="Taopapa-博客之家"></a></h1>
                </div>
                <div class="collapse navbar-collapse" id="header-navbar">
                    <form class="navbar-form visible-xs" action="/Search" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
                            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-cont="Taopapa-博客之家" title="Taopapa-博客之家" href="<?php echo url('index/index'); ?>">首页</a></li>
                        <li><a data-cont="博客" title="博客" href="<?php echo url('article/list1',['username'=>session('username','','author')]); ?>">IT新闻</a></li>
                        <li><a data-cont="写文章" title="写文章" href="<?php echo url('article/edit',['username'=>session('username','','author')]); ?>">写博客</a></li>
                        <li><a data-cont="会员专区" title="会员专区" href="404.html">会员专区</a></li>
                        <li><a data-cont="活动" title="活动" href="http://www.muzhuangnet.com/list/mznetblog/">活动</a></li>
                        <li><a data-cont="IT技术笔记" title="IT技术笔记" href="http://www.muzhuangnet.com/list/code/">IT技术笔记</a></li>
                        <li><a data-cont="源码分享" title="源码分享" href="http://www.muzhuangnet.com/list/share/">源码分享</a></li>
                        <li><a data-cont="论坛" title="论坛" href="http://www.muzhuangnet.com/list/money/">论坛</a></li>
                        <li><a data-cont="资讯分享" title="资讯分享" href="http://www.muzhuangnet.com/list/news/">资讯分享</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
<section class="container">
    <div class="content-wrap">
        <div class="widget widget-tabs"  style="height:100%;">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                	<a href="#person" aria-controls="notice" role="tab" data-toggle="tab">个人中心</a>
                </li>
                <li role="presentation">
                	<a href="#blog" aria-controls="contact" role="tab" data-toggle="tab">我的博客</a>
                </li>
                <li role="presentation">
                	<a href="#news" aria-controls="contact" role="tab" data-toggle="tab">我的消息</a>
                </li>
                <li role="presentation">
                	<a href="#setting" aria-controls="contact" role="tab" data-toggle="tab">帐号设置</a>
                </li> 
            </ul>
            <div class="tab-content">
            	<!-- 个人中心 start -->
                <div role="tabpanel" class="tab-pane contact active" id="person">
                    <dl class="pull-left">
                    	<dt>
                    		<a class="focus" href="#" title="头像" target="_blank" data-toggle="modal" data-target="#face">
                    			<?php if($author['logo'] == ''): ?>
                    			<img class="thumb" data-original="/taopapa/public/article/default.jpg" src="/taopapa/public/article/default.jpg" alt=""  style="display: inline; width: 200px;">
                    			<?php else: ?>
                    			<img class="thumb" data-original="<?php echo $author['logo']; ?>" alt=""  style="display: inline; width: 200px;">
                    			<?php endif; ?>
                			</a>
							<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="face">
							  	<div class="modal-dialog" role="document">
							    	<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        									<h4 class="modal-title" id="gridSystemModalLabel">修改头像</h4>
										</div>
										<form action="<?php echo url('author/face',['username'=>session('username','','author')]); ?>" enctype="multipart/form-data" method="post">
											<div class="modal-body">
												<input type="file" name="image">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        									<button type="submit" class="btn btn-primary">确定</button>
											</div>
										</form>
										
							    	</div>
							   	</div>
							</div>
                		</dt>
                    	<dd style="display: inline-block;padding:10px 30px;text-align: center">
                    		<b style="display: block;"><a href="#" title="有0个用户关注了你">0</a></b>关注
                    	</dd> | 
                    	<dd style="display: inline-block;padding:10px 30px;text-align: center">
                    		<b style="display: block;"><a href="#" title="你拥有0个粉丝">0</a></b>粉丝
                    	</dd>
                    </dl>
                    <div class="details">
                    	<div class="head">
                    		<h1>
	                    		<code><?php echo $author['username']; ?></code>
	                    	</h1>
	                    	<ul class="aaaa">
	                    		<li><a href="#" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="tel:1279728601"><i class="fa fa-mobile fa-lg icons"></i>电话</a></li>
	                    		<li><a href="#" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="email:1279728601@qq.com"><i class="fa fa-envelope icons"></i>邮箱</a></li>
	                    		<li><a href="#" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="性别:男"><i class="fa fa-transgender icons"></i>性别</a></li>
	                    		<li><a href="#" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="birthday:1994-06-01"><i class="fa fa-birthday-cake icons"></i>生日</a></li>
	                    	</ul>
                    	</div>
                    	<p class="readme">
                    		我是菜鸟
                    	</p>
                    	<p class="bb">
                    		<kbd class="bg-info">等级 <span class="badge">42</span></kbd>
                    	</p>
                    </div>
                    <div class="me_data">
						<h3 style="margin-bottom: 10px;">详细资料</h3>
						<div class="list-group">
						  	<button type="button" class="list-group-item" data-toggle="collapse" data-target="#edu" aria-expanded="false" aria-controls="collapseExample">教育经历</button>
							<div class="collapse" id="edu">
							  	<div class="panel panel-default">
								  <div class="panel-body">
								    未添加
								  </div>
								</div>
							</div>
						  	<button type="button" class="list-group-item" data-toggle="collapse" data-target="#work" aria-expanded="false" aria-controls="collapseExample">工作经验</button>
						  	<div class="collapse" id="work">
							  	<div class="panel panel-default">
								  <div class="panel-body">
								    未添加
								  </div>
								</div>
							</div>
						  	<button type="button" class="list-group-item" data-toggle="collapse" data-target="#power" aria-expanded="false" aria-controls="collapseExample">能力特长</button>
						  	<div class="collapse" id="power">
							  	<div class="panel panel-default">
								  <div class="panel-body">
								    未添加
								  </div>
								</div>
							</div>
						  	<button type="button" class="list-group-item" data-toggle="collapse" data-target="#hobby" aria-expanded="false" aria-controls="collapseExample">兴趣爱好</button>
						  	<div class="collapse" id="hobby">
							  	<div class="panel panel-default">
								  <div class="panel-body">
								    未添加
								  </div>
								</div>
							</div>
						  	<button type="button" class="list-group-item" data-toggle="collapse" data-target="#aph" aria-expanded="false" aria-controls="collapseExample">格言警句</button>
						  	<div class="collapse" id="aph">
							  	<div class="panel panel-default">
								  <div class="panel-body">
								    未添加
								  </div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- 个人中心 end -->

                <!-- 我的博客 start -->
                <div role="tabpanel" class="tab-pane contact" id="blog">
                	<!-- <aside class="col-xs-3">
                		<div class="list-group blog_left">
						  	<strong class="list-group-item active">
						    	管理博客
						  	</strong>
						  	<a href="#" class="list-group-item">评论管理</a>
						  	<a href="#" class="list-group-item">标签管理</a>
						  	<a href="#" class="list-group-item">媒体管理</a>
						</div>
                		<ul class="list-group">
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	计算机语言
						  	</button>
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	前端设计
						  	</button>
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	安卓
						  	</button>
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	iOS
						  	</button>
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	操作系统
						  	</button>
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	工作生活
						  	</button>
						  	<button type="button" class="list-group-item">
						  		<span class="badge">14</span>
						    	工具软件
						  	</button>
						    	
						</ul>
                	</aside> -->
                	
                	<div class="search_blog">
                		<form class="navbar-form search_blog" action="/Search" method="post">
	                    	<div class="input-group">
	                        	<input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
	                        	<span class="input-group-btn">
	            					<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
	            				</span>
	            			</div>
	                	</form>
                	</div>
		            <div class="list_blog">
		            	<div class="row">
		            		<?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		            		<div class="col-lg-3 col-md-4 col-xs-6">
		            			<div class="thumbnail">
		            				<?php if($vo['logo'] == ''): ?>
		            				<a href="<?php echo url('author/detail',['id'=>$vo['id']]); ?>" title="<?php echo $vo['title']; ?>"><img src="/taopapa/public/article/default.jpg" alt="<?php echo $vo['title']; ?>">
		            				</a>
		            				<span class="caozuo" style="position: absolute; top:30%;left:25%">
										<a href="#" title="编辑" class="glyphicon glyphicon-edit" aria-hidden="true"></a>
										<a href="#" title="删除" class="glyphicon glyphicon-trash" aria-hidden="true"></a>
										<a href="#" title="置顶" class="glyphicon glyphicon-open" aria-hidden="true"></a>
									</span>
		            				<?php else: ?>
		            				<a href="<?php echo url('author/detail',['id'=>$vo['id']]); ?>" title="<?php echo $vo['title']; ?>"><img src="<?php echo $vo['logo']; ?>" alt="<?php echo $vo['title']; ?>"></a>
		            				<span class="caozuo" style="position: absolute; top:30%;left:25%">
										<a href="#" title="编辑" class="glyphicon glyphicon-edit" aria-hidden="true"></a>
										<a href="#" title="删除" class="glyphicon glyphicon-trash" aria-hidden="true"></a>
										<a href="#" title="置顶" class="glyphicon glyphicon-open" aria-hidden="true"></a>
									</span>
		            				<?php endif; ?>
								    <div class="caption">
								        <h3><?php echo $vo['title']; ?></h3>
								        <p><?php echo $vo['description']; ?></p>
								        <p class="list_bottom">
								        	<a href="#" class="comment" title="发表时间" target="_blank">
								        		<small class="muted">
								        			<i class="glyphicon glyphicon-time"></i>
                    								2016-11-01
                								</small>
                							</a>
								        	<a href="#" class="comment" title="查阅" target="_blank">
								        		<small class="muted">
								        			<i class="glyphicon glyphicon-eye-open"></i>
								        			88
								        		</small>
								        	</a>
								        	<a class="comment" href="#" title="评论" target="_blank">
								        		<small class="muted">
								        			<i class="glyphicon glyphicon-comment"></i> 4
								        		</small>
								        	</a>
								        </p>
								    </div>
		            			</div>
						    </div>
						    <?php endforeach; endif; else: echo "" ;endif; ?>
		            	</div>	
		            </div>
                </div>
                <!-- 我的博客 end -->

                
				<!-- 我的消息 start  -->
                <div role="tabpanel" class="tab-pane contact" id="news">
					<a href="#">aaa</a>
                </div>
                <!-- 我的消息 end  -->



                <!-- 帐号设置 start -->
                <div role="tabpanel" class="tab-pane contact" id="setting">
                    <h2>
                    	QQ:
                  		<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1279728601&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:1279728601">1279728601</a>
              		</h2>
                    <h2>
                    	Email:
              			<a href="mailto:1279728601@qq.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="Email:1279728601@qq.com">1279728601@qq.com</a>
              		</h2>
                </div>
                <!-- 帐号设置 end -->
            </div>
        </div>
    </div>
</section>

    <footer class="footer">
        <div class="container">
            <div><a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">粤ICP备18054061号-1</a> <br><br>&nbsp;本站[<a href="http://www.whoismy94.top/">Taopapa-博客之家</a>]的部分内容来源于网络，若侵犯到您的利益，请联系站长删除！谢谢！&nbsp; </div>
        </div>
    </footer>
    <script src="/taopapa/public/static/frontend/js/bootstrap.min.js"></script>
    <script src="/taopapa/public/static/frontend/js/jquery.ias.js"></script>
    <script src="/taopapa/public/static/frontend/js/scripts.js"></script>
    <script type="text/javascript" charset="utf-8" src="/taopapa/public/static/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" src="/taopapa/public/static/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/taopapa/public/static/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/taopapa/public/static/umeditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
      //实例化编辑器
      var um = UM.getEditor('myEditor');
      um.ready(function() {
          //设置编辑器的内容
          um.setContent('');
          //获取html内容，返回: <p>hello</p>
          var html = um.getContent();
          //获取纯文本内容，返回: hello
          var txt = um.getContentTxt();
          var ww = $('body').width();
          UM.getEditor('myEditor').setHeight(500);
          UM.getEditor('myEditor').setWidth(ww*0.805);
      });
    </script>
</body>

</html>