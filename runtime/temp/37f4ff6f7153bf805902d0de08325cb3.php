<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\bitnami\apache2\htdocs\taopapa\public/../application/index\view\index\index.html";i:1528112752;s:66:"D:\bitnami\apache2\htdocs\taopapa\application\index\view\base.html";i:1528116394;}*/ ?>
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
                        <li><a data-cont="博客" title="博客" href="<?php echo url('article/list1',['username'=>session('username','','author')]); ?>">博客</a></li>
                        <li><a data-cont="写文章" title="写文章" href="<?php echo url('article/edit',['username'=>session('username','','author')]); ?>">写文章</a></li>
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
        <div class="content">
            <div id="focusslide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                    <li data-target="#focusslide" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active" style="height:161.875px;">
                        <a href="<?php echo url('index/index'); ?>" target="_blank" title="青山">
                          <img src="/taopapa/public/static/frontend/images/list1.jpg" alt="青山" class="img-responsive">
                        </a>
                    </div>
                    <div class="item" style="height:161.875px;">
                        <a href="http://web.muzhuangnet.com/" target="_blank" title="湖泊">
                          <img src="/taopapa/public/static/frontend/images/list2.jpg" alt="湖泊" class="img-responsive">
                        </a>
                    </div>
                </div>
                <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">上一个</span>
                </a>
                <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">下一个</span>
                </a> 
            </div>
            <article class="excerpt-minic excerpt-minic-index">
                <h2><span class="red">【推荐】</span><a target="_blank" href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" >用DTcms做一个独立博客网站（响应式模板）</a>
            </h2>
                <p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>
            </article>
            <div class="title">
                <h3>最新发布</h3>
                <div class="more">
                    <a href="http://www.muzhuangnet.com/list/mznetblog/" title="MZ-NetBlog主题">MZ-NetBlog主题</a>
                    <a href="http://www.muzhuangnet.com/list/code/" title="IT技术笔记">IT技术笔记</a>
                    <a href="http://www.muzhuangnet.com/list/share/" title="源码分享">源码分享</a>
                    <a href="http://www.muzhuangnet.com/list/money/" title="靠谱网赚">靠谱网赚</a>
                    <a href="http://www.muzhuangnet.com/list/news/" title="资讯分享">资讯分享</a>
                </div>
            </div>
            <?php if(($lists)): if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <article class="excerpt excerpt-1" style="">
                
                <a class="focus" href="http://www.muzhuangnet.com/show/269.html" title="<?php echo $vo['title']; ?>" target="_blank">
                    <?php if($vo['logo'] == ''): ?>
                    <img class="thumb" data-original="/taopapa/public/article/default.jpg" src="/taopapa/public/article/default.jpg" alt="<?php echo $vo['title']; ?>"  style="display: inline;">
                    <?php else: ?>
                    <img class="thumb" data-original="<?php echo $vo['logo']; ?>" src="<?php echo $vo['logo']; ?>" alt="<?php echo $vo['title']; ?>"  style="display: inline;">
                    <?php endif; ?>
                </a>
                <header><a class="cat" href="http://www.muzhuangnet.com/list/mznetblog/" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?><i></i></a>
                    <h2><a href="http://www.muzhuangnet.com/show/269.html" title="<?php echo $vo['title']; ?>" target="_blank" ><?php echo $vo['title']; ?></a>
                </h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i><?php echo $vo['create_time']; ?></time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span> <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 4</a>
                </p>
                <p class="note"><?php echo $vo['content']; ?></p>
            </article>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            <?php echo $lists->render(); ?>

        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">统计信息</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane contact active" id="notice">
                        <h2>日志总数:
                  <?php echo count($lists); ?>篇
              </h2>
                        <h2>网站运行:
              <span id="sitetime"><?php echo floor((time()-strtotime('2018-05-28'))/86400); ?>天 </span></h2>
                    </div>
                    <div role="tabpanel" class="tab-pane contact" id="contact">
                        <h2>QQ:
                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1279728601&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:1279728601">1279728601</a>
              </h2>
                        <h2>Email:
              <a href="mailto:1279728601@qq.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="Email:1279728601@qq.com">1279728601@qq.com</a></h2>
                    </div>
                </div>
            </div>
            <div class="widget widget_search">
                <form class="navbar-form" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
                </form>
            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
                <li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html"><span class="thumbnail">
                    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                </span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                    2016-11-01
                </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
            </ul>
        </div>
        <div class="widget widget_sentence">
            <a href="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设">
        <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" ></a>
        </div>
        <div class="widget widget_sentence">
            <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" rel="nofollow" title="MZ-NetBlog主题">
        <img style="width: 100%" src="/taopapa/public/static/frontend/images/ad.jpg" alt="MZ-NetBlog主题" ></a>
        </div>
        <div class="widget widget_sentence">
            <h3>友情链接</h3>
            <div class="widget-sentence-link">
                <a href="http://www.bootcss.com" title="bootstrap" target="_blank">bootstrap</a>&nbsp;&nbsp;&nbsp;
                <a href="http://fontawesome.dashgame.com/" title="font-awesome" target="_blank">font-awesome</a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.pexels.com/" title="pexels" target="_blank">pexels高清图片</a>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </aside>
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