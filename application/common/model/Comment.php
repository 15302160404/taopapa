<?php
namespace app\common\model;
use think\Model;

class Comment extends Model
{
	protected $pk = 'id';
	protected $table = 'work_comment';
	public function add($t)
	{
		$this->save([
			'parent_id'=>$t['parent_id'],
			'content'=>$t['content'],
			'create_time'=>$t['create_time'],
			'nickname'=>$t['nickname'],
			'logo'=>$t['logo'],
		]);
	}
}