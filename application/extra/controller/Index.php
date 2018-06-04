<?php
namespace app\extra\controller;
use think\Controller;

class Index extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	public function uploadify()
	{
	    if (!empty($_FILES)) {
	        import("@.ORG.UploadFile");
	        $upload = new \Org\UploadFile();
	        $upload->maxSize = 2048000;
	        $upload->allowExts = array('jpg','jpeg','gif','png');
	        $upload->savePath = "./Public/images/";
	        $upload->thumb = true; //设置缩略图
	        $upload->imageClassPath = "@.ORG.Image";
	        $upload->thumbPrefix = "130_,75_,24_"; //生成多张缩略图
	        $upload->thumbMaxWidth = "130,75,24";
	        $upload->thumbMaxHeight = "130,75,24";
	        $upload->saveRule = uniqid; //上传规则
	        $upload->thumbRemoveOrigin = true; //删除原图
	        if(!$upload->upload()){
	            $this->error($upload->getErrorMsg());//获取失败信息
	        } else {
	            $info = $upload->getUploadFileInfo();//获取成功信息
	        }
	        echo $info[0]['savename'];    //返回文件名给JS作回调用
	    }
	}
}