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
			$password = md5($data['password'].$userInfo['code']);
			if($data['username'] == $userInfo['username'] && $password == $userInfo['password'])
			{
				session('username',$userInfo['username'],'admin');
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
			$validate = validate('admin');
			if(!$validate->scene('regist')->check($data))
			{
				return $this->error($validate->getError());
			}
			$code = rand(1000,9999);
			$password = $data['password'].$code;
			$result = model('admin')->save([
				'username'=>$data['username'],
				'realname'=>$data['realname'],
				'code'=>$code,
				'password'=>md5($password)
			]);
			if($result){
				session('username',$data['username'],'admin');
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
		$path = ROOT_PATH . 'public' . DS . 'Photos';
		if(is_dir($path))
		{
			$dirs=scandir($path);
			$imgs = [];
			$i = 0;
			foreach ($dirs as $file)
			{
				if(!is_dir($file))
				{
					$imgs[$i] = dirname($_SERVER['SCRIPT_NAME']).DS.'Photos'.DS.$file;
					$i++;
				}
				

			}
		}
		$user = model('admin')->where('username',session('username','','admin'))->find();
		return $this->fetch('',['user'=>$user,'imgs'=>$imgs]);
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
			$validate = validate('admin');
			if(!$validate->scene('modifyPwd')->check($data))
			{
				return $this->error($validate->getError());
			}
			$user = model('admin')->where('username',$data['username'])->find();
			if($user)
			{
				$result = model('admin')->save([
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
	/**
	 * 更换头像
	 * @return [type] [description]
	 */
	public function upload(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('image');
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->validate(['size'=>307200,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' . DS . session('username','','admin') .'_admin' . DS . date('Ymd'));
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
	            $changeLogo = model('admin')->save([
	            	'logo' => dirname($_SERVER['SCRIPT_NAME']) . DS . session('username','','admin').'_admin' . DS . date('Ymd') . DS .$info->getSaveName(),
	            ],['username'=>session('username','','admin')]);
	            return $this->success('头像上传成功，你上传的是--'.$info->getSaveName());
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
	            $msg .= $i.'、此图片由系统命名为：'.$info->getSaveName().'已上传成功';
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