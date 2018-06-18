<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	$lists = model('article')->order(['update_time'=>'desc'])->paginate(12);
        $articles = model('article')->select();
        $comments = array();
        for($i=0;$i<count($articles);$i++){
            if($articles[$i]['comment_num']>0){
                $comments[] = $articles[$i];
            }
        }
        return $this->fetch('',['lists'=>$lists,'comments'=>$comments]);
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
        $categorys = model('category')->select();
        return $this->fetch('',['categorys'=>$categorys]);
    }
}
