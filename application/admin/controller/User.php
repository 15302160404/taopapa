<?php
namespace app\admin\controller;

use think\Controller;
class User extends Controller
{
	/**
	 * 登录页面渲染
	 * @return [type] [description]
	 */
	public function index()
	{
		return $this->fetch();
	}


	/**
	 * 登录
	 * @return [type] [description]
	 */
	public function login()
	{
		if(request()->isPost())
		{
			$data = input('post.');
			$validate = validate('Admin');
			if(!$validate->scene('login')->check($data)){
				return $this->error($validate->getError());
			}
			$userInfo = model('Admin')->where('username',$data['username'])->find();
			if($data['username'] == $userInfo['username'] && md5($data['password']) == $userInfo['password'])
			{
				session('username',$userInfo['username']);
				return $this->success('登录成功','index/index');
			}
			return $this->error('用户名或密码错误');
		}
	}


	/**
	 * 注册
	 * @return [type] [description]
	 */
	public function regist()
	{
		if(request()->isPost())
		{
			$data = input('post.');
			echo $data['realname'];
			$validate = validate('admin');
			if(!$validate->scene('regist')->check($data))
			{
				return $this->error($validate->getError());
			}
			$result = model('admin')->save([
				'username'=>$data['username'],
				'realname'=>$data['realname'],
				'password'=>md5($data['password'])
			]);
			if($result){
				session('username',$data['username']);
				return $this->success('注册成功，即将跳转网站后台首页','index/index');
			}
			return $this->error('注册失败，不要气馁');
		}
	}

	/**
	 * 登出
	 * @return [type] [description]
	 */
	public function logout()
	{
		session(null);
		return $this->redirect('user/index');
	}

	/**
	 * 查看个人信息
	 * @return [type] [description]
	 */
	public function profile()
	{
		$admin = model('admin');
		return $this->fetch('',['admin'=>$admin]);
	}
}