<?php
namespace app\common\model;

use think\Model;
use traits\model\SoftDelete;
class Article extends Model
{
	use SoftDelete;
	protected $deleteTime = 'delete_time';
	protected $pk = 'id';
	protected $table = 'work_article';
	public function author()
	{
		return $this->belongsTo('author');
	}
	public function category()
	{
		return $this->belongsTo('category');
	}
}