<?php
namespace app\admin\controller;

use think\Controller;
class Category extends Controller
{
	/**
	 * 标签列表也渲染
	 * @return [type] [description]
	 */
	public function index()
	{
		$categorys = model('category')->select();
		$articles = model('article')->select();
		return $this->fetch('',['categorys'=>$categorys,'articles'=>$articles]);
	}
	public function recycle()
	{
		$delCategorys = model('category')->onlyTrashed()->order(['update_time'=>'desc'])->select();
		return $this->fetch('',['delCategorys'=>$delCategorys]);
	}
	/**
	 * 增加标签
	 */
	public function addCategory()
	{
		if(request()->isPost())
		{
			$data = input('post.');
			$validate = validate('category');
			$delete_time = null;
			if(!$validate->check($data))
			{
				return $this->error($validate->getError());
			}
			if($data['status']==0){
				$delete_time = time();
			}
			$result = model('category')->save([
				'id'=>$data['id'],
				'categoryname'=>$data['categoryname'],
				'status'=>$data['status'],
				'delete_time'=>$delete_time
			]);
			if($result)
			{
				return $this->success('标签添加成功','category/index');
			}
			return $this->error('标签编号已存在');
		}
	}
	/**
	 * 删除标签
	 * @return [type] [description]
	 */
	public function delCategory()
	{
		$id = input('post.id');
		model('category')->save([
			'status'=>0,
		],['id'=>$id]);
		$result = model('category')->destroy($id);
		if($result)
		{
			return $id;
		}
		return json_encode("删除失败");
	}
	/**
	 * 编辑标签
	 * @return [type] [description]
	 */
	public function editCategory()
	{
		$data = input('post.');
		$delete_time = null;
		if($data['status']==0)
		{
			$delete_time = time();
		}
		$result = model('category')->save([
			'categoryname'=>$data['name'],
			'status'=>$data['status'],
			'delete_time'=>$delete_time
		],['id'=>$data['id']]);
		if($result)
		{
			return json_encode(['msg'=>'修改成功']);
		}
	}
	/**
	 * 还原标签
	 * @return [type] [description]
	 */
	public function restore()
	{
		$id = input('post.id');
		$result = model('category')->save([
			'status'=>1,
			'delete_time'=>null
		],['id'=>$id]);
		if($result){
			return 1;
		}
	}
	/**
	 * 彻底删除标签
	 * @return [type] [description]
	 */
	public function delYes()
	{
		$id = input('post.id');
		model('category')->destroy($id,true);
		return 1;
	}
	/**
	 * 清空回收站
	 * @return [type] [description]
	 */
	public function delAll()
	{
		$delCategorys = model('category')->onlyTrashed()->select();
		// dump($delCategorys['0']['id']);exit
		foreach ($delCategorys as $i) {
			model('category')->destroy($i['id'],true);
		}
		if(model('category')->onlyTrashed()->select() == null)
		{
			return $this->success('回收站已经空空如也了','category/recycle');
		}
	}
}