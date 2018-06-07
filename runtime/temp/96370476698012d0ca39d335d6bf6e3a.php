<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\xampp\htdocs\taopapa\public/../application/index\view\article\edit.html";i:1528337622;s:56:"D:\xampp\htdocs\taopapa\application\index\view\base.html";i:1528337622;}*/ ?>
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
    
<section>
    <script>
    $(document).ready(function() {
        $('#aa').modal({
            keyboard: false,
            backdrop: "static",
        });
    });
    </script>
    <div id="aa" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Taopapa-博客之家 发现技术的地方</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal" id="startEdit">开始写博客</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>
<div class="container">
  <form enctype="multipart/form-data" action="<?php echo url('article/finishEdit',['author_username'=>session('username','','author')]); ?>" method="post" class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-1 control-label">标题：</label>
      <div class="col-sm-9">
        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="请把标题写在这里">
      </div>
      <div class="col-sm-2">
        <button type="button" class="btn btn-warning form-control" data-toggle="modal" data-target="#upLogo">发表</button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="upLogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">上传博客封面</h4>
            </div>
            <div class="modal-body">
                  <input type="file" name="image" id="img_bool"/><br>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" id="img_false">不需要封面并发布</button>
              <button type="submit" class="btn btn-primary" id="img_true">选好封面并发布</button>
              <script>
                $('#img_true').attr('disabled',"disabled");
                $('#img_bool').click(function(){
                    $('#img_true').removeAttr('disabled');
                    $('#img_false').attr('disabled',"disabled");
                });
            </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-1 control-label">描述：</label>
      <div class="col-sm-11">
        <input type="text" name="description" class="form-control" id="inputEmail3" placeholder="描述">
      </div>
    </div>
    <!-- 文章编辑页面 -->
    <div class="form-group">
        <label for="myEditor" class="col-sm-1 control-label">内容</label>
        <div class="col-sm-11">
            <!--style给定宽度可以影响编辑器的最终宽度-->
            <textarea name="content" id="myEditor"></textarea>
        </div>
    </div>
  </form>
</div>


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