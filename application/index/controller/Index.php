<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	$lists = model('article')->order(['update_time'=>'desc'])->paginate(8);
        $articles = model('article')->order(['update_time'=>'desc'])->paginate(6);
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
        $articles = model('article')->where('author_id',0)->select();
        return $this->fetch('',['categorys'=>$categorys,'articles'=>$articles]);
    }
    /**
     * 文章详情
     * @return [type] [description]
     */
    public function detail()
    {
        $id = input('param.id');
        $num=0;
        $comments = model('comment')->where('article_id',$id)->select();
        $article = model('article')->where('id',$id)->find();
        $articles = model('article')->order(['update_time'=>'desc'])->paginate(6);
        $comment_list = array();
        for($i=0;$i<count($articles);$i++){
            if($articles[$i]['comment_num']>0){
                $comment_list[] = $articles[$i];
            }
        }
        return $this->fetch('',['article'=>$article,'comments'=>$comments,'num'=>$num,'comment_list'=>$comment_list]);
    }
}
