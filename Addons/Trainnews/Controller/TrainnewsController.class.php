<?php

namespace Addons\Trainnews\Controller;
use Think\ManageBaseController;

class TrainnewsController extends ManageBaseController{
	public function gettrainlist(){
		$trainlist = M("trainnews")->order('ctime desc')->field('id,title,img,ctime,publisher')->select(); // 实例化 
		
		//get_cover_url根据存储的图片id获取picture里的图片路径
		foreach($trainlist as &$vo){
			$vo['img']=get_cover_url($vo['img']);
			$vo['ctime']=time_format($vo['ctime']);
		}
				
		print json_encode($trainlist );
	}
	
	public function gettraininfo(){
		 
	    $map['id']=I('get.id');
		$traininfo=M('trainnews')->where($map)->find();
		
		print json_encode($traininfo);
	}
	
	

}
