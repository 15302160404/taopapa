<?php
namespace app\admin\controller;

use think\Controller;

class Comment extends Controller
{
	public function index()
	{
		$comments = model('comment')->where('admin_id',1)->select();
		return $this->fetch('',['comments'=>$comments]);
	}
}