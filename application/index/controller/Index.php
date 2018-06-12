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
    /**
     * 注销
     * @return [type] [description]
     */
    public function logout()
    {
    	session(null,'author');
    	return $this->success('注销成功','index/index');
    }
    /**
     * IT新闻
     * @return [type] [description]
     */
    public function news()
    {
        return $this->fetch();
    }
}
