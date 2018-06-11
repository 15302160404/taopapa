<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\taopapa\public/../application/extra\view\index\index.html";i:1528682913;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>php无限级分类实战————评论及回复功能</title>
    <!-- <link rel="stylesheet" type="text/css" href="/Public/css/comment.css"> -->
    <script type="text/javascript" src="/taopapa/public/static/jquery.min.js" ></script>
    <script type="text/javascript" src="/taopapa/public/static/comment.js" ></script>
    <style>
        .head-pic{
            width:40px;
            height:40px;
        }
        .cm{
            position:relative;
            top:0px;
            left:40px;
            top:-40px;
            width:600px;
        }
        .cm-header{
            padding-left:5px;
        }
        .cm-content{
            padding-left:5px;
        }
        .cm-footer{
            padding-bottom:15px;
            text-align:right;
            border-bottom: 1px dotted #CCC;
        }
        .comment-reply{
            text-decoration:none;
            color:gray;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="comment-filed">
  <!--发表评论区begin-->
  <div>
    <div class="comment-num">
        <span><?php echo $num; ?>条评论</span>
    </div>
    <div>
        <div>
        <textarea class="txt-commit" replyid="0"></textarea>
        </div>
        <div class="div-txt-submit">
            <a class="comment-submit" parent_id="0" style="" href="javascript:void(0);"><span style=''>发表评论</span></a>
        </div>      
    </div>
  </div>
  <!--发表评论区end-->

  <!--评论列表显示区begin-->
    <div class="comment-filed-list" >
        <div><span>全部评论</span></div>
        <div class="comment-list" >
            <!--一级评论列表begin-->
            <ul class="comment-ul">
                <?php if(is_array($commlist) || $commlist instanceof \think\Collection || $commlist instanceof \think\Paginator): $i = 0; $__LIST__ = $commlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                    <li comment_id="<?php echo $data['id']; ?>">
                    <div >
                        <div>
                            <img class="head-pic"  src="<?php echo $data['logo']; ?>" alt="">  
                        </div>
                        <div class="cm">
                            <div class="cm-header">
                            <span><?php echo $data['nickname']; ?></span>
                            <span><?php echo $data['create_time']; ?></span>
                            </div>
                            <div class="cm-content">
                                <p>
                                    <?php echo $data['content']; ?>
                                </p>
                            </div>
                            <div class="cm-footer">
                                <a class="comment-reply" comment_id="<?php echo $data['id']; ?>" href="javascript:void(0);">回复</a>                     
                            </div>  
                        </div>                                                              
                    </div>

                    <!--二级评论begin-->
                    <ul class="children">
                       <?php if(is_array($data['children']) || $data['children'] instanceof \think\Collection || $data['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                        <li comment_id="<?php echo $child['id']; ?>">
                            <div>
                                <div>
                                    <img class="head-pic"  src="<?php echo $child['logo']; ?>" alt="">
                                </div>
                                <div class="children-cm">
                                    <div  class="cm-header">
                                    <span><?php echo $child['nickname']; ?></span>
                                    <span><?php echo $child['create_time']; ?></span>
                                    </div>
                                    <div class="cm-content">
                                        <p>
                                            <?php echo $child['content']; ?>
                                        </p>
                                    </div>
                                    <div class="cm-footer">                
                                        <a class="comment-reply" replyswitch="off" comment_id="<?php echo $child['id']; ?>"  href="javascript:void(0);">回复</a>
                                    </div>
                                </div>                                                         
                            </div>

                            <!--三级评论begin-->
                            <ul class="children">
                                <?php if(is_array($child['children']) || $child['children'] instanceof \think\Collection || $child['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $child['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grandson): $mod = ($i % 2 );++$i;?>  
                                <li comment_id="<?php echo $grandson['id']; ?>">                
                                    <div >
                                        <div>
                                            <img class="head-pic"  src="<?php echo $grandson['logo']; ?>" alt="">
                                        </div>
                                        <div class="children-cm">
                                            <div  class="cm-header">
                                            <span><?php echo $grandson['nickname']; ?></span>
                                            <span><?php echo $grandson['create_time']; ?></span>
                                            </div>
                                            <div class="cm-content">
                                                <p>
                                                    <?php echo $grandson['content']; ?>
                                                </p>
                                            </div>
                                            <div class="cm-footer">                             
                                                <!-- <a class="comment-reply" comment_id="1"  href="javascript:void(0);">回复</a> -->
                                            </div>  
                                        </div>                                                              
                                    </div>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>   
                            <!--三级评论end-->

                        </li>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>   
                    <!--二级评论end-->

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>                                                                 
            </ul>
            <!--一级评论列表end-->
        </div>      
    </div>
  <!--评论列表显示区end-->
</div>  
</body>
</html>