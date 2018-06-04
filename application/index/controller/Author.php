<?php
namespace app\index\controller;

use think\Controller;

class Author extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	public function blog()
	{
		return $this->fetch();
	}
	public function setting()
	{
		return $this->fetch();
	}
	public function news()
	{
		return $this->fetch();
	}
	public function member()
	{
		return $this->fetch();
	}
	public function photo()
	{
		return $this->fetch();
	}
}
