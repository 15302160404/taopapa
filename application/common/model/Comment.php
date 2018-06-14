<?php
namespace app\common\model;
use think\Model;

class Comment extends Model
{
	protected $pk = 'id';
	protected $table = 'work_comment';
	public function Article()
	{
		return $this->belongsTo('article');
	}
}