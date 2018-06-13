<?php
namespace app\extra\controller;
use think\Controller;

class Index extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	public function comment1()
	{
		if(request()->isAjax())
		{	
			$content = input('post.content');
			$nickname = input('post.nickname');
			$data = [
				'content'=>$content,
				'nickname'=>$nickname
			];
			$a = model('Comment')->save($data);
			return json_encode($content);
		}
	}
}
?>