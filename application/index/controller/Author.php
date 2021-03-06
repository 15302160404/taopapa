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
		$re_articles = model('article')->onlyTrashed()->where('author_id',$author['id'])->order(['update_time'=>'desc'])->select();
		$articles = model('article')->where('author_id',$author['id'])->order(['update_time'=>'desc'])->select();
		$comments = array();
		for($i = 0;$i<count($articles);$i++){
			if($articles[$i]['author_id'] == $author['id']){
				$comments[] = model('comment')->where('article_id',$articles[$i]['id'])->order(['update_time'=>'desc'])->select();
			}
		}
		return $this->fetch('',['author'=>$author,'articles'=>$articles,'re_articles'=>$re_articles,'comments'=>$comments]);
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
	/**
	 * 个人中心修改密码
	 * @return [type] [description]
	 */
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
			$code1 = $author['code'];
			if($author['password']!=md5($data['oldPassword'].$code1))
			{
				return $this->error('旧密码不正确');
			}
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
	/**
	 * 修改邮箱
	 * @return [type] [description]
	 */
	public function modifyEmail()
	{
		if(request()->isPost())
		{
			$id = input('param.id');
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('modifyEm')->check($data))
			{
				return $this->error($validate->getError());
			}
			$email = model('author')->where('id',$id)->find()['email'];
			if($data['email']==$email){
				return $this->error('修改内容不能与近期使用的一样');
			}
			$result = model('author')->save([
				'email'=>$data['email']
			],['id'=>$id]);
			if(!$result)
			{
				return $this->error('修改失败');
			}
			return $this->success('修改成功','author/index');
		}
	}
	/**
	 * 修改手机号
	 * @return [type] [description]
	 */
	public function modifyTel()
	{
		if(request()->isPost())
		{
			$id = input('param.id');
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('modifyTel')->check($data))
			{
				return $this->error($validate->getError());
			}
			$tel = model('author')->where('id',$id)->find()['tel'];
			if($data['tel']==$tel){
				return $this->error('修改内容不能与近期使用的一样');
			}
			$result = model('author')->save([
				'tel'=>$data['tel']
			],['id'=>$id]);
			if(!$result)
			{
				return $this->error('修改失败');
			}
			return $this->success('修改成功','author/index');		
		}
	}
	/**
	 * 修改备注
	 * @return [type] [description]
	 */
	public function remark()
	{
		if(request()->isPost())
		{
			$id = input('param.id');
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('note')->check($data))
			{
				return $this->error($validate->getError());
			}
			$result = model('author')->save(['note'=>$data['note'],'birthday'=>$data['birthday'],'sex'=>$data['sex']],['id'=>$id]);
			if($result)
			{
				return $this->success('备注修改完成','author/index');
			}
			return $this->error('备注修改失败');
		}
	}
	/**
	 * 他人的主页
	 * @return [type] [description]
	 */
	public function person()
	{
		$author=model('author')->where('username',input('param.username'))->find();
		$articles = model('article')->where('author_id',$author['id'])->select();
		return $this->fetch('',['author'=>$author,'articles'=>$articles]);
	}
}
