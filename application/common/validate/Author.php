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
		'oldPassword'=>'require',
		'password'=>'require',
		're_password'=>'require|confirm:re_password',
		'note'=>'require|max:250',
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
		'oldPassword.require' => '旧密码不能为空',
		'note.require'=>'空表单不能提交',
		'note.max'=>'备注字数不能超过250字符'
	];
	protected $scene = [
		'regist'=>['username','realname','tel','email','password'],
		'login'=>['username','password'],
		'modifyPwd'=>['oldPassword','password','re_password'],
		'modifyEm'=>['email'],
		'modifyTel'=>['tel'],
		'note'=>['note']
	];
}