<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\bitnami\apache2\htdocs\taopapa\public/../application/index\view\article\list1.html";i:1528113338;s:66:"D:\bitnami\apache2\htdocs\taopapa\application\index\view\base.html";i:1528113199;}*/ ?>
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
                        <li><a href="http://www.muzhuangnet.com/readers/" rel="nofollow"><?php echo session('username','','author'); ?></a></li>
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
            <div class="page-header">
              <h1 style="line-height: 1.3">
                <div class="title">
                  "<?php echo session('username','','author'); ?>"全部的博客都在这里了
                </div>
              </h1>
            </div>
            <article class="excerpt-minic excerpt-minic-index">
                <h2><span class="red">【推荐】</span><a target="_blank" href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" >用DTcms做一个独立博客网站（响应式模板）</a>
            </h2>
                <p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>
            </article>
            <?php if(($articles)): if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <article class="excerpt excerpt-1">
                <a class="focus" href="http://www.muzhuangnet.com/show/269.html" title="<?php echo $vo['title']; ?>" target="_blank">
                    <?php if($vo['logo'] == ''): ?>
                    <img class="thumb" data-original="/taopapa/public/article/default.jpg" src="/taopapa/public/author_blogLogo/default.jpg" alt="<?php echo $vo['title']; ?>"  style="display: inline;">
                    <?php else: ?>
                    <img class="thumb" data-original="<?php echo $vo['logo']; ?>" src="<?php echo $vo['logo']; ?>" alt="<?php echo $vo['title']; ?>"  style="display: inline;">
                    <?php endif; ?>
                </a>
                <header><a class="cat" href="http://www.muzhuangnet.com/list/mznetblog/" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?><i></i></a>
                    <h2><a href="http://www.muzhuangnet.com/show/269.html" title="<?php echo $vo['title']; ?>" target="_blank" ><?php echo $vo['title']; ?></a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo $vo['create_time']; ?></time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 217</span> <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 4</a></p>
                <p class="note"><?php echo $vo['description']; ?></p>
            </article>
            <?php endforeach; endif; else: echo "" ;endif; else: ?>
            <div class="jumbotron" style="display: block !important;">
                <h1>空空如也!</h1>
                <p>...</p>
                <p><a class="btn btn-danger" href="<?php echo url('edit'); ?>" role="button"><i class="fa fa-hashtag"></i>写博客</a></p>
            </div>
            <?php endif; ?>

        </div>
        <?php echo $articles->render(); ?>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget_search">
                <form class="navbar-form" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
                </form>
            </div>
            <div class="widget widget_sentence">
                <h3>标签云</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">
                        <li><a href="http://www.muzhuangnet.com/tags/list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/256/" title="404" draggable="false">404 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/162/" title="杀毒软件" draggable="false">杀毒软件 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/49/" title="循环" draggable="false">循环 <span class="badge">2</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/22/" title="百度统计" draggable="false">百度统计 <span class="badge">2</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/132/" title="sql" draggable="false">sql <span class="badge">6</span></a></li>
                    </ul>
                </div>
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
            <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" rel="nofollow" title="MZ-NetBlog主题">
        <img style="width: 100%" src="images/ad.jpg" alt="MZ-NetBlog主题" ></a>
        </div>
        <div class="widget widget_sentence">
            <a href="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设">
        <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" ></a>
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