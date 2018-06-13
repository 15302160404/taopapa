<?php
namespace app\common\validate;

use think\Validate;

class Article extends Validate
{
	protected $rule = [
		'title' => 'require|max:50',
		'description'=> 'max:50',
	];
	protected $message = [
		'title.require' => '标题不能为空',
		'title.max' => '标题长度不能超过50字节，一个汉字占两个字节',
		'description.max' => '描述长度不能超过250字节，一个汉字占两个字节'
	];
}