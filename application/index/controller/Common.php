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
		$articles = model('article')->select();
        $comment_list = array();
        for($i=0;$i<count($articles);$i++){
            if($articles[$i]['comment_num']>0){
                $comment_list[] = $articles[$i];
            }
        }
		return $this->fetch('',['article'=>$article,'comments'=>$comments,'num'=>$num,'comment_list'=>$comment_list]);
	}
}