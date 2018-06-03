<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<fieldset style="border: 1px solid #CDCDCD; padding: 8px; padding-bottom:0px; margin: 8px 0">
    	<legend>
    		<strong> 多文件上传</strong>
    	</legend>
	    <div>
	    	<input id="fileInput2" name="fileInput2" type="file" />
	    	<input type="button" value="确定上传" onclick="javascript:$('#fileInput2').uploadifyUpload();">
	    	&nbsp;&nbsp;||&nbsp;&nbsp;
	    	<a href="javascript:$('#fileInput2').uploadifyClearQueue();">清除上传列表</a>
	 	</div>
    	<p></p>
   	</fieldset>
    <from name="form2" method='post' action="db.php">
     	<div id="divTxt" style="display:none"><span style="color:red"><strong>已经上传的图片有：</strong></span><br></div><br>
     	<input TYPE="submit" value="提  交">
    </from>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php'
			});
		});
	</script>
	<script type="text/javascript">
     $(document).ready(function() {
     $("#fileInput2").uploadify({
     'uploader': 'js/uploadify.swf',//所需要的flash文件
     'cancelImg': 'cancel.png',//单个取消上传的图片
     'script': 'js/uploadify.php',//实现上传的程序
     'folder': 'uploads',//服务端的上传目录
     //'auto': true,//自动上传
     'multi': true,//是否多文件上传
     //'checkScript': 'js/check.php',//验证 ，服务端的
     'displayData': 'speed',//进度条的显示方式
     //'fileDesc': 'Image(*.jpg;*.gif;*.png)',//对话框的文件类型描述
     'fileExt': '*.jpg;*.jpeg;*.gif;*.png',//可上传的文件类型
     //'sizeLimit': 999999 ,//限制上传文件的大小
     'simUploadLimit' :3, //并发上传数据
     'queueSizeLimit' :20, //可上传的文件个数
     'buttonText' :'文件上传',//通过文字替换钮扣上的文字
     'buttonImg': 'css/images/browseBtn.png',//替换上传钮扣
     'width': 80,//buttonImg的大小
     'height': 24,//
     'rollover': true,//button是否变换
     onComplete: function (evt, queueID, fileObj, response, data) {
     //alert("Successfully uploaded: "+fileObj.filePath);
     //alert(response);
     getResult(response);//获得上传的文件路径
     }
     //onError: function(errorObj) {
     //     alert(errorObj.info+"  "+errorObj.type);
     //}
     });
     });
     </script>
     <script type="text/javascript">
 function getResult(content){
 //通过上传的图片来动态生成text来保存路径
 var board = document.getElementById("divTxt");
 board.style.display="";
 var newInput = document.createElement("input");
 newInput.type = "text";
 newInput.size = "45";
 newInput.name="myFilePath[]";
 var obj = board.appendChild(newInput);
 var br= document.createElement("br");
 board.appendChild(br);
 obj.value=content;
 }
 </script>
</body>
</html>