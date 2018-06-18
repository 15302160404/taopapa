<?php
namespace app\common\validate;
use think\Validate;

class Category extends Validate
{
	protected $rule = [
		'categoryname'=>'require'
	];
	protected $massage = ['categoryname.require'=>'标签名不能为空'];
}