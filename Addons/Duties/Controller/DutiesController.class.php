<?php

namespace Addons\Duties\Controller;
use Think\ManageBaseController;

class DutiesController extends ManageBaseController{
    function  getdutieslist(){
		$pname=I('pname');
		$where['pname'] = array('like','%'.$pname.'%');
		$duties = M('duties')->where($where)->select(); // 实例化 
		print json_encode($duties);
	}
	
}
