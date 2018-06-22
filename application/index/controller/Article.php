<?php
namespace app\index\controller;
// use think\Controller;
class Article extends Common
{
	/**
	 * 新建文章编辑页面渲染
	 * @return [type] [description]
	 */
	public function edit()
	{
		$categorys = model('category')->select();
		return $this->fetch('',['categorys'=>$categorys]);
	}
	/**
	 * 发布文章提交处理
	 * @return [type] [description]
	 */
	public function finishEdit()
	{
		if(request()->isPost()){
			$data = input('post.');
			$author_username = input('param.author_username');
			$author_id = model('author')->where('username',$author_username)->find()['id'];
			$validate = validate('article');
			// 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('image');
		    $imgPath = '';
		    // 移动到框架应用根目录/public/uploads/ 目录下
		    if($file){
		        $info = $file->validate(['size'=>30720000,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' . DS .'article'. DS .'bloglogo' . DS . $author_username);
		        if($info){
		            $imgPath = dirname($_SERVER['SCRIPT_NAME']) . DS .'article'. DS .'bloglogo'. DS . $author_username .DS.$info->getSaveName();
		        }else{
		            return $this->error($file->getError());
		        }
		    }
		    //验证数据
			if(!$validate->check($data))
			{
				return $this->error($validate->getError());
			}
			$result = model('article')->save([
				'title' => $data['title'],
				'author_id' => $author_id,
				'description' => $data['description'],
				'content' => $data['content'],
				'logo' => $imgPath,
				'category_id'=>$data['category_id']
			]);
			if($result)
			{
				return $this->success('发布成功！！快去看看效果怎么样','author/index');
			}
			return $this->error('发布失败');
		}
	}
	/**
	 * 软删除文章
	 * @return [type] [description]
	 */
	public function del()
	{
		$id = input('param.id');
		$result = model('article')->destroy($id);
		if($result)
		{
			model('article')->save(['status'=>0],['id'=>$id]);
			return $this->success('文章已移至回收站','author/index');
		}
		return $this->error('删除失败');
	}
	/**
	 * 复原软删除文章
	 * @return [type] [description]
	 */
	public function restore(){
		$id = input('param.id');
		$result = model('article')->save([
			'delete_time'=>null,
			'status'=>1
		],['id'=>$id]);
		if($result){
			return $this->success('已经还原了','author/index');
		}
		return $this->error('还原失败');
	}
	/**
	 * 彻底删除文章
	 * @return [type] [description]
	 */
	public function delYes(){
		$id = input('param.id');
		$result = model('article')->destroy($id,true);
		if($result)
		{
			return $this->success('文章已经不复存在了','author/index');
		}
		return $this->error('删除失败');
	}
	/**
	 * 编辑文章页面渲染
	 * @return [type] [description]
	 */
	public function reedit(){
		$id = input('param.id');
		$article = model('article')->where('id',$id)->find();
		$categorys = model('category')->select();
		return $this->fetch('',['article'=>$article,'categorys'=>$categorys]);
	}
	public function reFinishEdit(){
		if(request()->isPost())
		{
			$id = input('param.id');
			$data = input('post.');
			$validate = validate('article');
			if(!$validate->check($data))
			{
				return $this->error($validate->getError());
			}
			$result = model('article')->save([
				'title' => $data['title'],
				'description' => $data['description'],
				'content' => $data['content'],
			],['id'=>$id]);
			if($result)
			{
				return $this->success('修改完成','author/index');
			}
			return $this->error('修改失败');
		}
	}
	/**
	 * 评论
	 * @return [type] [description]
	 */
	public function comment()
	{
		if(request()->isAjax())
		{
			$data = input('post.');
			$aid = 0;
			$author_id = model('author')->where('username',$data['username'])->find()['id'];
			$admin_id = model('article')->where('id',$data['article_id'])->find()['author_id'];
			if($admin_id == 0)
			{
				$aid = 1;
			}
			$result = model('comment')->save([
				'content'=>$data['content'],
				'article_id'=>$data['article_id'],
				'nickname'=>$data['nickname'],
				'contact'=>$data['contact'],
				'author_id'=>$author_id,
				'admin_id'=>$aid,
			]);
			if($result){
				$comment_num = count(model('comment')->where('article_id',$data['article_id'])->select());
				model('article')->save([
					'comment_num'=>$comment_num,
				],['id'=>$data['article_id']]);
				return 1;
			}
			return 0;
		}
	}
	public function delComment()
	{
		$id = input('post.id');
		$article_id = model('comment')->where('id',$id)->find()['article_id'];
		$article = model('article')->where('id',$article_id)->find();
		$result = model('comment')->where('id',$id)->delete();
		if($result){
			$comment_num = $article['comment_num'] - 1;
			model('article')->save(['comment_num'=>$comment_num],['id'=>$article['id']]);
			return 1;
		}
	}
}