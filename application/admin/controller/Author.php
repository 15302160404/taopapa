<?php

namespace app\admin\controller;

use think\Controller;
class Author extends Controller
{
	public function index()
	{
		$author = model('author')->select();
		return $this->fetch("",['author'=>$author]);
	}
	public function details()
	{
		if(input('?param.username')){
			$username = input('param.username');
			$author = model('author')->where('username',$username)->find();
		}
		return $this->fetch('',['author'=>$author]);
	}
	/**
	 * 更换头像
	 * @return [type] [description]
	 */
	public function upload(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('image');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	    	$author = input('param.username');
	        $info = $file->validate(['size'=>307200,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' . DS . $author . DS . date('Ymd'));
	        // echo ROOT_PATH . 'public' . DS . session('username','','admin') . DS . date('Ymd') . DS .$info->getSaveName();
	        // exit;
	        if($info){
	            // 成功上传后 获取上传信息
	            // 输出 jpg
	            // echo $info->getExtension();
	            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
	            // echo $info->getSaveName();
	            // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            // echo $info->getFilename();
	            $changeLogo = model('author')->save([
	            	'logo' => dirname($_SERVER['SCRIPT_NAME']) . DS . $author . DS . date('Ymd') . DS .$info->getSaveName(),
	            ],['username'=>$author]);
	            return $this->success('头像上传成功，系统命名为:'.$info->getSaveName());
	        }else{
	            // 上传失败获取错误信息
	            return $this->error($file->getError());
	        }
	    }
	}
	/**
	 * 相册批量上传
	 * @return [type] [description]
	 */
	public function uploads(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $files = request()->file('image');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    $i = 0;
	    $msg = '';
	    foreach($files as $file){
	        // 移动到框架应用根目录/public/uploads/ 目录下
	        $info = $file->validate(['size'=>307200,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'Photos');
	        if($info){
	            // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            $i++;
	            $msg .= $i.'、此图片由系统命名为：'.$info->getFilename().'已上传成功';
	            if($i == count($files)){
	            	return $this->success($msg);
	            }
	        }else{
	            // 上传失败获取错误信息
	            return $this->error($file->getError());
	        }
	    }
	}
}