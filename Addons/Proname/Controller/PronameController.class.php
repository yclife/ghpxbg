<?php

namespace Addons\Proname\Controller;
use Think\ManageBaseController;

class PronameController extends ManageBaseController{
	    
	function getprolist(){
		$examtype=I('examtype','');
		$data=M('proname')->where(array('examtype'=>$examtype))->select();
		foreach($data as &$vo){
			$vo['img']=get_cover_url($vo['img']);	
		}
		print json_encode($data);
	}
}
