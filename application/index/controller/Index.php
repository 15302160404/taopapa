<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	$lists = model('article')->order(['id'=>'desc'])->paginate(12);
        return $this->fetch('',['lists'=>$lists]);
    }
    public function logout()
    {
    	session(null,'author');
    	return $this->success('注销成功','index/index');
    }
}
