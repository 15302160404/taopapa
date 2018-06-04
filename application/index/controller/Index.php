<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	$lists = model('article')->order(['id'=>'desc'])->paginate();
        return $this->fetch('',['lists'=>$lists]);
    }
}
