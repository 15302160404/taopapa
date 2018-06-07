<?php

namespace app\admin\controller;

use think\Controller;
class Author extends Controller
{
	public function index()
	{
		$author = model('author')->select();
		return $this->fetch("",['author'=>$author]);
	}
	public function details()
	{
		if(input('?param.username')){
			$username = input('param.username');
			$author = model('author')->where('username',$username)->find();
		}
		return $this->fetch('',['author'=>$author]);
	}
	/**
	 * 更换头像
	 * @return [type] [description]
	 */
	public function send(){
	      
	}
}