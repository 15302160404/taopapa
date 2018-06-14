<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\Bitnami\apache2\htdocs\taopapa\public/../application/index\view\index\news.html";i:1528794839;s:66:"D:\Bitnami\apache2\htdocs\taopapa\application\index\view\base.html";i:1528964404;}*/ ?>
<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT新闻--博客之家 发现技术的地方</title>
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
        margin-top:60px;
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
            <div class="head_img container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#">
                            <img src="/taopapa/public/news/gg.jpg" alt="" class="img-responsive" height="90px" style="margin:0px auto;">
                        </a>
                        
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <div class="col-xs-8"  style="height:250px;">
                        <div id="focusslide" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                                <li data-target="#focusslide" data-slide-to="1"></li>
                                 <li data-target="#focusslide" data-slide-to="2"></li>
                                <li data-target="#focusslide" data-slide-to="3"></li>
                                 <li data-target="#focusslide" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a href="<?php echo url('index/index'); ?>" target="_blank" title="">
                                      <img src="/taopapa/public/news/aa.jpg" alt="" class="img-responsive" height="255">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="http://web.muzhuangnet.com/" target="_blank" title="">
                                      <img src="/taopapa/public/news/cc.jpg" alt="" class="img-responsive" height="255">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="http://web.muzhuangnet.com/" target="_blank" title="">
                                      <img src="/taopapa/public/news/dd.jpg" alt="" class="img-responsive" height="255">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="http://web.muzhuangnet.com/" target="_blank" title="">
                                      <img src="/taopapa/public/news/ee.jpg" alt="" class="img-responsive" height="255">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="http://web.muzhuangnet.com/" target="_blank" title="">
                                      <img src="/taopapa/public/news/ff.jpg" alt="" class="img-responsive" height="255">
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
                    </div>
                    <div class="col-xs-4 m0">
                        <a class="focus" href="http://www.muzhuangnet.com/show/269.html" title="" target="_blank">
                            <img class="thumb" data-original="/taopapa/public/news/new1.jpg" src="/taopapa/public/news/new1.jpg" alt=""  style="display: inline;" height="200px" width="100%">
                        </a>
                    </div>
                </div>
            </div>
            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/growing_tree/article/details/80572577" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/news_title.jpg" src="/taopapa/public/news/news_title.jpg" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/growing_tree/article/details/80572577" title="标题">GitHub被收购<i></i></a>
                    <h2><a href="https://blog.csdn.net/growing_tree/article/details/80572577" title="" target="_blank" >如果 GitHub 被中国互联网巨头收购，一定会换一个响当当的 Slogan！</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/growing_tree/article/details/80572577" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">近日听闻全球最大的代码托管平台 GitHub 或将无奈之下卖身微软，作价 50 亿美元，也可能再多一点，实在唏嘘不已。如此优秀的一款产品，终究也要折服于资本和运营的手段下。</p>
            </article>

            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/ai.jpg" src="/taopapa/public/news/ai.jpg" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="标题">跨镜追踪(ReID)技术<i></i></a>
                    <h2><a href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="" target="_blank" >刷新三项世界纪录的跨镜追踪(ReID)技术是怎样实现的？</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">跨镜追踪（Person Re-Identification，简称 ReID）技术是现在计算机视觉研究的热门方向，主要解决跨摄像头跨场景下行人的识别与检索。该技术能够根据行人的穿着、体态、发型等信息认知行人，与人脸识别结合能够适用于更多新的应用场景，将人工智能的认知水平提高到一个新阶段。</p>
            </article>

            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/ec.png" src="/taopapa/public/news/ec.png" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="标题">腾讯<i></i></a>
                    <h2><a href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="" target="_blank" >鹅厂，隐藏着让4万员工拼命工作的套路！</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">看一个老板有没有格局就看他身边的人，有没有赚大钱就行了。一个人不愿意把钱分出去，把名让出去，把权利放下去，还说自己有格局，有情怀，绝大部分都是神棍。这个角度看，格局最高的可能是腾讯，因为就是连买腾讯股票的股民基本都没亏过。</p>
            </article>
            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/guleileo/article/details/80585981" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/ai2.jpg" src="/taopapa/public/news/ai2.jpg" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/guleileo/article/details/80585981" title="标题">人工智能头条<i></i></a>
                    <h2><a href="https://blog.csdn.net/guleileo/article/details/80585981" title="" target="_blank" >身份采集、活体检测、人脸比对...旷视是如何做FaceID的？</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/guleileo/article/details/80585981" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">“刷脸”曾一度是人们互相调侃时的用语，如今早已深深地融入我们的生活。从可以人脸解锁的手机，到人脸识别打卡机，甚至地铁“刷脸”进站……</p>
            </article>

            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/growing_tree/article/details/80572577" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/news_title.jpg" src="/taopapa/public/news/news_title.jpg" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/growing_tree/article/details/80572577" title="标题">GitHub被收购<i></i></a>
                    <h2><a href="https://blog.csdn.net/growing_tree/article/details/80572577" title="" target="_blank" >如果 GitHub 被中国互联网巨头收购，一定会换一个响当当的 Slogan！</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/growing_tree/article/details/80572577" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">近日听闻全球最大的代码托管平台 GitHub 或将无奈之下卖身微软，作价 50 亿美元，也可能再多一点，实在唏嘘不已。如此优秀的一款产品，终究也要折服于资本和运营的手段下。</p>
            </article>

            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/ai.jpg" src="/taopapa/public/news/ai.jpg" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="标题">跨镜追踪(ReID)技术<i></i></a>
                    <h2><a href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="" target="_blank" >刷新三项世界纪录的跨镜追踪(ReID)技术是怎样实现的？</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/dQCFKyQDXYm3F8rB0/article/details/80563893" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">跨镜追踪（Person Re-Identification，简称 ReID）技术是现在计算机视觉研究的热门方向，主要解决跨摄像头跨场景下行人的识别与检索。该技术能够根据行人的穿着、体态、发型等信息认知行人，与人脸识别结合能够适用于更多新的应用场景，将人工智能的认知水平提高到一个新阶段。</p>
            </article>

            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/ec.png" src="/taopapa/public/news/ec.png" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="标题">腾讯<i></i></a>
                    <h2><a href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="" target="_blank" >鹅厂，隐藏着让4万员工拼命工作的套路！</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/csdnsevenn/article/details/80553341" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">看一个老板有没有格局就看他身边的人，有没有赚大钱就行了。一个人不愿意把钱分出去，把名让出去，把权利放下去，还说自己有格局，有情怀，绝大部分都是神棍。这个角度看，格局最高的可能是腾讯，因为就是连买腾讯股票的股民基本都没亏过。</p>
            </article>
            <article class="excerpt excerpt-1">
                <a class="focus" href="https://blog.csdn.net/guleileo/article/details/80585981" title="" target="_blank">
                    <img class="thumb" data-original="/taopapa/public/news/ai2.jpg" src="/taopapa/public/news/ai2.jpg" alt=""  style="display: inline;">
                </a>
                <header><a class="cat" href="https://blog.csdn.net/guleileo/article/details/80585981" title="标题">人工智能头条<i></i></a>
                    <h2><a href="https://blog.csdn.net/guleileo/article/details/80585981" title="" target="_blank" >身份采集、活体检测、人脸比对...旷视是如何做FaceID的？</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i>2018-06-04</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 6666</span> <a class="comment" href="https://blog.csdn.net/guleileo/article/details/80585981" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 555</a></p>
                <p class="note">“刷脸”曾一度是人们互相调侃时的用语，如今早已深深地融入我们的生活。从可以人脸解锁的手机，到人脸识别打卡机，甚至地铁“刷脸”进站……</p>
            </article>

        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget_search">
                <form class="navbar-form" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="widget widget_sentence">
                <h3>热门话题</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/67/" title="互联网" draggable="false">互联网 <span class="badge">1</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/256/" title="IT业界" draggable="false">IT业界 <span class="badge">1</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/252/" title="软件开发" draggable="false">软件开发 <span class="badge">1</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/162/" title="开源" draggable="false">开源 <span class="badge">1</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/133/" title="电脑硬件" draggable="false">电脑硬件 <span class="badge">1</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/49/" title="游戏" draggable="false">游戏 <span class="badge">2</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/22/" title="创业" draggable="false">创业 <span class="badge">2</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/132/" title="手机相关" draggable="false">手机相关 <span class="badge">6</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/132/" title="科学" draggable="false">科学 <span class="badge">6</span></a>
                        </li>
                        <li>
                            <a href="http://www.muzhuangnet.com/tags/list/132/" title="其他" draggable="false">其他 <span class="badge">6</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新资讯</h3>
            <ul>
                <li>
                    <a title="如果GitHub被中国互联网巨头收购?!" href="http://www.muzhuangnet.com/show/269.html">
                        <span class="thumbnail">
                            <img class="thumb" data-original="/taopapa/public/news/news_title.jpg" src="/taopapa/public/news/news_title.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
                        </span>
                        <span class="text">如果 GitHub 被中国互联网巨头收购，一定会换一个响当当的 Slogan！</span>
                        <span class="muted">
                            <i class="glyphicon glyphicon-time"></i>
                            2016-11-01
                        </span>
                        <span class="muted">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            88
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="widget widget_sentence">
            <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" rel="nofollow" title="MZ-NetBlog主题">
                <img style="width: 100%" src="/taopapa/public/news/aa.jpg" alt="MZ-NetBlog主题" >
            </a>
        </div>
        <div class="widget widget_sentence">
            <a href="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设">
                <img style="width: 100%" src="/taopapa/public/news/bb.jpg" alt="专业网站建设" >
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