<?php

namespace Addons\Feedback\Controller;
use Think\ManageBaseController;

class FeedbackController extends ManageBaseController{
	function addfeedback(){	
		$classid=I('classid','');
		$classname=I('classname','');
		$regname=I('regname','');
		$openid=I('openid','');
		
		$data['classid']=$classid;
		$data['classname']=$classname;
		$data['regname']=$regname;
		$data['openid']=$openid;		
		$count = M("feedback")->where($data)->count();
		if($count>0){
			echo("已收到您的反馈，不用重复提交了！");
		}else
		{						
			$data['att']=I('att','');
			$data['meth']=I('meth','');
			$data['effe']=I('effe','');
			$data['arra']=I('arra','');
			$data['dev']=I('dev','');
			$data['env']=I('env','');
			$data['serv']=I('serv','');
			$data['advise']=I('advise','');
			$data['ctime']=time();
			//  $data['regdate']=time();//以当前时间的时间戳保存为报名日期
			$feedback = M("feedback"); // 实例化		
			if($feedback->add($data)){ // 根据条件保存修改的数据
				$reg=M("studyreg");
				$savedata['fed'] = 1;
				$condition['opendid'] = $openid;
				$condition['classid'] = $classid;
				$result=$reg->where($condition)->save($savedata);	
				echo("提交成功！");	
				
			}else{ 
				echo("数据错误，提交失败！");
			}
				
		
		
			}
         }
}
