<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
	/**
	 * 首页渲染
	 * @return [type] [description]
	 */
	public function index()
	{
		return $this->fetch();
	}
	/**
	 * 执行登录
	 * @return [type] [description]
	 */
	public function check()
	{
		if(request()->isPost())
		{
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('login')->check($data))
			{
				return $this->error($validate->getError());
			}
			$author = model('author')->where('username',$data['username'])->find();
			if($author['password'] == md5($data['password'].$author['code']))
			{
				session('username',$author['username'],'author');
				return $this->success('欢迎来到  Taopapa博客之家','index/index');
			}
			return $this->error('用户名或密码错误');
		}
	}
	/**
	 * 用户注册
	 * @return [type] [description]
	 */
	public function regist()
	{
		if(request()->isPost())
		{
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('regist')->check($data))
			{
				return $this->error($validate->getError());
			}
			$random = rand(1000,9999);
			$result = model('author')->save([
				'username'=>$data['username'],
				'realname'=>$data['realname'],
				'email'=>$data['email'],
				'tel'=>$data['tel'],
				'code'=>$random,
				'password'=>md5($data['password'].$random),
			]);
			if($result)
			{
				session('username',$data['username'],'author');
				return $this->success('恭喜你成为我们的一员,快开始写你的博客吧！','index/index');
			}
			return $this->error('不要气馁，重新开始吧~');
		}
	}
	/**
	 * 修改密码
	 * @return [type] [description]
	 */
	public function modifyPwd()
	{
		if(request()->isPost())
		{
			$data = input('post.');
			$validate = validate('author');
			if(!$validate->scene('modifyPwd')->check($data))
			{
				return $this->error($validate->getError());
			}
			$user = model('author')->where('username',$data['username'])->find();
			if($user)
			{
				$result = model('author')->save([
					'password'=>md5($data['password'].$user['code']),
				],['username'=>$data['username']]);
				if($result)
				{
					return $this->success('密码修改成功了，快去登录吧');
				}
				return $this->error('不要气馁，再来一遍');
			}
			return $this->error('用户不存在，请前往注册');
		}
	}
}