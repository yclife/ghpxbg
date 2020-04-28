<?php

namespace Addons\Classes\Controller;
use Think\ManageBaseController;

class ClassesController extends ManageBaseController{

	function addregcount(){
		echo 'dddddd';
			//班级表已报名学员数加1
	 $classid=I('classid');
	 $classes=M('classes');
	 $data['regcount']=1;
     $classes->where('classid='.$classid)->save($data); 
	}
	
	function  getallclasses(){
		$classes = M('classes')->limit(10)->order('ctime desc')->select(); // 实例化 
		foreach($classes as &$vo){
			$vo['classid']=$vo['classid'];
			$vo['classname']=$vo['classname'];
			$vo['classdetail']=$vo['classdetail'];
			$vo['classimg']=get_cover_url($vo['classimg']);
			$vo['classbegin']=date("Y-m-d",$vo['classbegin']);
			$vo['ctime']=time_format($vo['ctime']);
			$vo['trainnewstitle']=$vo['trainnewstitle'];  //培训通知的标题
		}
		 
		print json_encode($classes);
	}
	

	//获取班级列表
	public function getclasses(){
		$examtypeid='';
		$pid='';
	    $did='';
		$examtypeid=I('examtypeid');
	    $pid=I('pid');
	    $dname=I('dname');	
		
		$dd=M('duties')->where('dname="'.$dname.'"')->find();
		$map['did']=$dd['did'];	
		$map['examtype']=$examtypeid;
	    $map['pid']=$pid;
     
	
		//班级没有结束
		$map['classclose']=0;
	
	    $classes = M('classes')->where($map)->order('ctime desc')->select(); // 实例化 
		foreach($classes as &$vo){
			$vo['classid']=$vo['classid'];
			$vo['classname']=$vo['classname'];
			$vo['classdetail']=$vo['classdetail'];
			$vo['classimg']=get_cover_url($vo['classimg']);
			$vo['classbegin']=date("Y-m-d",$vo['classbegin']);
			$vo['ctime']=time_format($vo['ctime']);
			$vo['trainnewstitle']=$vo['trainnewstitle'];  //培训通知的标题
		}
		 
		print json_encode($classes);
	}
	
	
	
}
