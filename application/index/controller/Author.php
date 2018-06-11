<?php
namespace app\index\controller;

use think\Controller;

class Author extends Controller
{
	/**
	 * 用户个人中心页面渲染
	 * @return [type] [description]
	 */
	public function index()
	{
		$author = model('author')->where('username',session('username','','author'))->find();
		$articles = model('article')->where('author_id',$author['id'])->order(['id'=>'desc'])->select();
		return $this->fetch('',['author'=>$author,'articles'=>$articles]);
	}
	/**
	 * 用户修改头像
	 * @return [type] [description]
	 */
	public function face()
	{
		$author_username = input('param.username');
		// 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('image');
	    $imgPath = '';
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->validate(['size'=>307200,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' .DS.'author'. DS . $author_username.'_logo');
	        if($info){
	            $imgPath = dirname($_SERVER['SCRIPT_NAME']). DS .'author'. DS . $author_username .'_logo'.DS.$info->getSaveName();
	        }else{
	            return $this->error($file->getError());
	        }
	    }
	    $result = model('author')->save([
	    	'logo'=> $imgPath,
	    ],['username'=>$author_username]);
	    if ($result) {
	    	return $this->success('修改成功','author/index');
	    }
	}
	public function modifyPassword(){
		if(request()->isPost())
		{
			$id = input('param.id');
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('modifyPwd')->check($data))
			{
				return $this->error($validate->getError());
			}
			$author = model('author')->where('id',$id)->find();
			if($author['password']!=md5($data['oldPassword'].$code1))
			{
				return $this->error('旧密码不正确');
			}
			echo 1;exit;
			$code = rand(1000,9999);
			$result = model('author')->save([
				'password'=>md5($data['password'].$code),
				'code' => $code
			],['id'=>$id]);
			if(!$result)
			{
				return $this->error('修改失败');
			}
			return $this->success('修改成功','author/index');
		}
	}
}
