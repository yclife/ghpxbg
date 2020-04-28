<?php

namespace Addons\Pubedu\Controller;
use Think\ManageBaseController;

class PubeduController extends ManageBaseController{
public function getpelist(){
		$pelist = M("pubedu")->order('ctime desc')->field('id,title,img,ctime,publisher')->select(); // 实例化 
		
		//get_cover_url根据存储的图片id获取picture里的图片路径
		foreach($pelist as &$vo){
			$vo['img']=get_cover_url($vo['img']);
			$vo['ctime']=time_format($vo['ctime']);
		}
				
		print json_encode($pelist );
	}
	
	public function getpeinfo(){
		 
	    $map['id']=I('get.id');
		$peinfo=M('pubedu')->where($map)->find();
		
		print json_encode($peinfo);
	}
}
