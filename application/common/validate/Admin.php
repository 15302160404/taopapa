<?php
namespace app\common\validate;

use think\Validate;

class Admin extends Validate
{
	protected $rule = [
		'username' => 'require',
		'password' => 'require',
		'realname' => 'require',
		're_password' => 'require|confirm:password'
	];
	protected $message = [
		'username.require' => '用户名不能为空',
		'realname.require' => '真实姓名不能为空',
		'password.require' => '密码不能为空',
		're_password.require' => '确认密码不能为空',
		're_password.confirm' => '确认密码和密码不一致',
	];
	protected $scene = [
		'login' => ['username','password'],
		'regist' => ['username','realname','password','re_password'],
		'modifyPwd'=>['password'],
	];
}