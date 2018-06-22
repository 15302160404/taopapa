<?php
namespace app\admin\controller;

use think\Controller;

class Article extends Controller
{
	/**
	 * 用户文章列表
	 * @return [type] [description]
	 */
	public function index()
	{
		$articles = model('article')->order(['author_id'=>'desc'])->select();
		$arr =array();
		$authors = model('author')->select();
		for($i = 0;$i<count($authors);$i++)
		{
			if($authors[$i]['id'] != 0)
			{
				$arr[$i] = model('article')->withTrashed()->where('author_id',$authors[$i]['id'])->select();
			}
		}
		return $this->fetch('',['arr'=>$arr]);
	}
	/**
	 * 管理员文章列表
	 * @return [type] [description]
	 */
	public function indexAdmin()
	{
		$categorys = model('category')->select();
		$articles = model('article')->where('author_id',0)->select();
		return $this->fetch('',['categorys'=>$categorys,'articles'=>$articles]);
	}
	/**
	 * 回收站
	 * @return [type] [description]
	 */
	public function recycle()
	{
		$articles = model('article')->onlyTrashed()->where('author_id',0)->select();
		return $this->fetch('',['articles'=>$articles]);
	}
	/**
	 * 用户文章详情
	 * @return [type] [description]
	 */
	public function detail()
	{
		$id = input('param.id');
		$article = model('article')->where('id',$id)->find();
		return $this->fetch('',['article'=>$article]);
	}
	/**
	 * 管理员发表文章
	 * @return [type] [description]
	 */
	public function edit()
	{
		$data = input('post.');
		$file = request()->file('image');
	    $imgPath = '';
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->validate(['size'=>30720000,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' . DS .'news');
	        if($info){
	            $imgPath = dirname($_SERVER['SCRIPT_NAME']) . DS .'news' . DS . $info->getSaveName();
	        }else{
	            return $this->error($file->getError());
	        }
	    }
	    $validate = validate('article');
	    if(!$validate->check($data))
	    {
	    	return $this->error($validate->getError());
	    }
	    $result = model('article')->save([
	    	'title'=>$data['title'],
	    	'description'=>$data['description'],
	    	'logo'=>$imgPath,
	    	'author_id'=>0,
	    	'content'=>$data['content'],
	    	'category_id'=>$data['category_id']
	    ]);
	    if($result)
	    {
	    	return $this->success('提交成功','article/indexAdmin');
	    }
	    return $this->error('提交失败');
	}
	/**
	 * 管理员修改文章
	 * @return [type] [description]
	 */
	public function reedit()
	{
		$id = input('param.id');
		$article = model('article')->where('id',$id)->find();
		return $this->fetch('',['article'=>$article]);
	}
	/**
	 * 软删除管理员文章
	 * @return [type] [description]
	 */
	public function del()
	{
		$id = input('post.id');
		$result = model('article')->destroy($id);
		if($result)
		{
			model('article')->save(['status'=>0],['id'=>$id]);
			return 1;
		}
	}
	/**
	 * 还原文章
	 * @return [type] [description]
	 */
	public function delNo()
	{
		$id = input('post.id');
		$result = model('article')->save([
			'delete_time'=>null,
			'status'=>1
		],['id'=>$id]);
		if($result)
		{
			return 1;
		}
	}
	/**
	 * 删除文章
	 * @return [type] [description]
	 */
	public function delYes()
	{
		$id = input('post.id');
		$result = model('article')->destroy($id,true);
		if($result)
		{
			return 1;
		}
	}
}