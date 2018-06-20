<?php
namespace app\admin\controller;

use think\Controller;

class Article extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	public function indexAdmin()
	{
		return $this->fetch();
	}
	public function recycle()
	{
		return $this->fetch();
	}
} 