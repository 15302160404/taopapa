<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\Bitnami\apache2\htdocs\taopapa\public/../application/extra\view\index\index.html";i:1528892674;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>评论</title>
    <script src="/taopapa/public/static/jquery.min.js"></script>
</head>
<body>
    <form id="formData">
        <p><span id="count"></span>条评论</p>
        昵称：<input type="text" name="nickname" id="nickname"><br>
        内容：<textarea name="content" id="content" cols="30" rows="3"></textarea>
        <br>
        <button type="button" id="submit">发表</button>
    </form>
</body>
</html>
<script>
    $('#submit').click(function(){
        var nickname = $('#nickname').val();
        var content = $('#content').val();
        $.ajax({
            url: "<?php echo url('index/comment1'); ?>",
            data: {
                nickname:nickname,
                content:content,
            },
            async: true,   //是否为异步请求
            cache: false,  //是否缓存结果
            type: "POST", //请求方式为POST
            dataType: "json",  //服务器返回的数据是什么类型
            success: function(data){
                var data = JSON.parse(data);
                $('#count').html(data);
            }
        });
    });
</script>