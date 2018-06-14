<?php
namespace app\common\validate;

use think\Validate;

class Article extends Validate
{
	protected $rule = [
		'title' => 'require|max:100',
		'description'=> 'max:250',
	];
	protected $message = [
		'title.require' => '标题不能为空',
		'title.max' => '标题长度过长',
		'description.max' => '描述长度过长'
	];
}