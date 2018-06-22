<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\Bitnami\apache2\htdocs\taopapa\public/../application/index\view\index\index.html";i:1529652233;s:66:"D:\Bitnami\apache2\htdocs\taopapa\application\index\view\base.html";i:1529045144;}*/ ?>
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
      .caozuo,.re_caozuo{
        display: none;
      }
      .caozuo a,.re_caozuo a{
        color:#777 !important;
        font-size: 25px;
        padding:0px 10px;
      }
      .caozuo a:hover{
        color:#999 !important;
        opacity: 0.5;
      }
      .re_caozuo a:hover{
        color:#999 !important;
        opacity: 0.5;
      }
      .list_blog .thumbnail:hover .caozuo{
        display: block;
      }
      .list_blog .thumbnail:hover .re_caozuo{
        display: block;
      }
      .me_data{
        margin-top:150px;
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
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-cont="Taopapa-博客之家" title="Taopapa-博客之家" href="<?php echo url('index/index'); ?>">首页</a></li>
                        <li><a data-cont="博客" title="博客" href="<?php echo url('index/news'); ?>">IT新闻</a></li>
                        <li><a data-cont="写文章" title="写文章" href="<?php echo url('article/edit',['username'=>session('username','','author')]); ?>">写博客</a></li>
                        <li><a data-cont="会员专区" title="会员专区" href="#">会员专区</a></li>
                        <li><a data-cont="活动" title="活动" href="#">活动</a></li>
                        <li><a data-cont="IT技术笔记" title="IT技术笔记" href="#">IT技术笔记</a></li>
                        <li><a data-cont="源码分享" title="源码分享" href="#">源码分享</a></li>
                        <li><a data-cont="论坛" title="论坛" href="#">论坛</a></li>
                        <li><a data-cont="资讯分享" title="资讯分享" href="#">资讯分享</a></li>
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
                    <a href="<?php echo url('index/news'); ?>" title="业界新闻">业界新闻</a>
                    <a href="#" title="IT技术笔记">IT技术笔记</a>
                    <a href="#" title="源码分享">源码分享</a>
                    <a href="#" title="靠谱网赚">靠谱网赚</a>
                    <a href="#" title="资讯分享">资讯分享</a>
                </div>
            </div>
            
            <?php if(($lists)): if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <article class="excerpt excerpt-1" style="">
                <a class="focus" href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>" title="<?php echo $vo['title']; ?>">
                    <?php if($vo['logo'] == ''): ?>
                    <img class="thumb" data-original="/taopapa/public/article/default.jpg" src="/taopapa/public/article/default.jpg" alt="<?php echo $vo['title']; ?>"  style="display: inline;">
                    <?php else: ?>
                    <img class="thumb" data-original="<?php echo $vo['logo']; ?>" src="<?php echo $vo['logo']; ?>" alt="<?php echo $vo['title']; ?>"  style="display: inline;">
                    <?php endif; ?>
                </a>
                <header><a class="cat" href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>" title="<?php echo $vo['category']['categoryname']; ?>"><?php echo $vo['category']['categoryname']; ?><i></i></a>
                    <h2><a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a>
                </h2>
                </header>
                <p class="meta">
                    <span style="display: none;">
                        <?php if($vo['author']['username']==session('username','','author')): ?><?php echo $name = "·我"; ?><?php echo $url = "author/index"; else: ?><?php echo $name = $vo['author']['username']; ?><?php echo $url = "author/person"; endif; ?>
                    </span>
                    <time class="time"><i class="glyphicon glyphicon-time"></i><?php echo $vo['create_time']; ?></time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span> <a class="comment" href="#" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> <?php echo $vo['comment_num']; ?></a>
                    <span class="item article-meta-category"><i class="glyphicon glyphicon-list"></i> <a href="<?php echo url($url,['username'=>$vo['author']['username']]); ?>" title="作者：<?php echo $name; ?>" >作者：<?php if(($name=='·我')&&($vo['author_id'] != 0)): ?><code>·我</code><?php elseif($vo['author_id'] == 0): ?><code>taopapa</code><?php else: ?><?php echo $name; endif; ?></a></span>
                </p>
                <p class="note"><?php echo $vo['description']; ?></p>
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
                  <?php echo count(model('article')->select()); ?>篇
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
        <div class="panel panel-success m1">
            <div class="panel-heading"><small style="font-size: 18px;">友情链接</small></div>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="http://v3.bootcss.com" title="bootstrap" target="_blank">bootstrap</a>
                </li>
                <li class="list-group-item">
                    <a href="http://www.fontawesome.com.cn/" title="font-awesome" target="_blank">font-awesome</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.pexels.com/" title="pexels" target="_blank">pexels高清图片</a>
                </li>
            </ul>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>
                <?php if(is_array($comments) || $comments instanceof \think\Collection || $comments instanceof \think\Paginator): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comm): $mod = ($i % 2 );++$i;?>
                <li>
                    <a title="<?php echo $comm['title']; ?>" href="<?php echo url('index/detail',['id'=>$comm['id']]); ?>">
                        <span class="thumbnail">
                            <?php if($comm['logo'] == ''): ?>
                            <img class="thumb" data-original="/taopapa/public/article/default.jpg" src="/taopapa/public/article/default.jpg" alt="<?php echo $comm['title']; ?>"  style="display: block;">
                            <?php else: ?>
                            <img class="thumb" data-original="<?php echo $comm['logo']; ?>" src="<?php echo $comm['logo']; ?>" alt="<?php echo $comm['title']; ?>"  style="display: block;">
                            <?php endif; ?>
                        </span>
                        <span class="text"><?php echo $comm['title']; ?></span>
                        <span class="muted">
                            <i class="glyphicon glyphicon-time"></i>
                            <?php echo $comm['create_time']; ?>
                        </span>
                        <span class="muted">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            88
                        </span>
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="widget widget_sentence">
            <a href="#" target="_blank" rel="nofollow" title="taopapa博客之家">
                <img style="width: 100%" src="/taopapa/public/news/aa.jpg" alt="taopapa博客之家" >
            </a>
        </div>
        <div class="widget widget_sentence">
            <a href="#" target="_blank" rel="nofollow" title="">
                <img style="width: 100%" src="/taopapa/public/news/bb.jpg" alt="" >
            </a>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading"><small style="font-size: 18px;">关于我们</small></div>
            <div class="panel-body">
                ...
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
    <script src="/taopapa/public/static/frontend/js/respond.min.js"></script>
    <script src="/taopapa/public/static/frontend/js/nprogress.js"></script>
    <script src="/taopapa/public/static/frontend/js/jquery.lazyload.min.js"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/taopapa/public/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/taopapa/public/static/ueditor/ueditor.all.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('editor');
        ue.ready(function() {
            //设置编辑器的内容
            ue.setContent();
            //获取html内容，返回: <p>hello</p>
            var html = ue.getContent();
            //获取纯文本内容，返回: hello
            var txt = ue.getContentTxt();
        });
    </script>
</body>

</html>