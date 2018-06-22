<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
	public function __construct(Request $request = null)
	{
		parent::__construct($request);
		if(!session('username','','author')){
			return $this->redirect('index/login/index');
		}
	}
}