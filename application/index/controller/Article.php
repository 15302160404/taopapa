<?php
namespace app\index\controller;

class Article extends Common
{
	/**
	 * 文章编辑页面渲染
	 * @return [type] [description]
	 */
	public function edit()
	{
		return $this->fetch();
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
		        $info = $file->validate(['size'=>307200,'ext'=>'jpg,png,gif'])->rule('uniqid')->move(ROOT_PATH . 'public' . DS .'article_logo' . DS . $author_username);
		        if($info){
		            $imgPath = $info->getSaveName();
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
				'logo' => $imgPath
			]);
			if($result)
			{
				return $this->success('发布成功！！快去看看效果怎么样','article/edit');
			}
			return $this->error('发布失败');
		}
	}
	/**
	 * 博客列表
	 * @return [type] [description]
	 */
	public function list()
	{
		$author = model('author')->where('username',input('param.username'))->find()['username'];
		$articles = model('article')->where('status',1)->paginate();
		return $this->fetch('',['articles'=>$articles,'author'=>$author]);
	}
}