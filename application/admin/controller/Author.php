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
}