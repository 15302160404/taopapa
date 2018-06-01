<?php
namespace app\common\validate;
use think\Validate;

class Author extends Validate
{
	protected $rule = [
		'username' => 'require',
		'realname' => 'require',
		'tel' => 'require|max:11',
		'email' => 'require|email',
		'password'=>'require',
		're_password'=>'require|confirm:re_password'
	];
	protected $message = [
		'username.require' => '用户名不能为空',
		'realname.require' => '真实姓名不能为空',
		'email.require' => '邮箱不能为空',
		'email.email' => '邮箱格式错误',
		'tel.require' => '电话不能为空',
		'tel.max' => '电话格式错误',
		'password.require' => '密码不能为空',
		're_password.confirm' => '密码和确认密码不一致',
		're_password.require' => '确认密码不能为空',
	];
	protected $scene = [
		'regist'=>['username','realname','tel','email','password'],
		'login'=>['username','password'],
		'modifyPwd'=>['password'],
	];
}