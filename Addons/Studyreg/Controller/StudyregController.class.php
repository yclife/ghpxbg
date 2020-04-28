<?php

namespace Addons\Studyreg\Controller;
use Think\ManageBaseController;

class StudyregController extends ManageBaseController{

	function _initialize() {
		
	}
	
	public function addstu(){
		$map['classid']=$_POST['input_classid'];
		$map['idnum']=$_POST['input_idnum'];
 		$count = M("studyreg")->where($map)->count();
		if($count>0){
			echo("该证件号已在本班报名，不可重复提交！");
		}else{
			$data['classid']=$_POST['input_classid'];
			$data['classname']=$_POST['input_classname'];
		//	$data['classbegin']=$_POST['input_classbegin'];
		//	$data['classdetail']=$_POST['input_classdetail'];
			$data['regname']=$_POST['input_regname'];
			$data['sex']=$_POST['radio_sex'];
			$data['idtype']=$_POST['picker_idtype'];
			$data['idnum']=$_POST['input_idnum'];
			$data['graduate']=$_POST['picker_graduate'];
			$data['company']=$_POST['input_company'];
			$data['area']=$_POST['picker_area'];
			$data['duties']=$_POST['input_duties'];
			$data['tel']=$_POST['input_tel'];
			$data['email']=$_POST['input_email'];
			$data['ccode']=$_POST['input_ccode'];
			$data['invoice_company']=$_POST['input_invoice_company'];
			$data['invoice_ccode']=$_POST['input_invoice_ccode'];
			$data['receiver']=$_POST['input_receiver'];
			$data['recetel']=$_POST['input_recetel'];
			$data['receaddress']=$_POST['input_receaddress'];
       //     $data['regdate']=date("Y-m-d H:i:s");  
	        $data['regdate']=time();//以当前时间的时间戳保存为报名日期
			$data['openid']=$_POST['openid'];
		    $Studyreg = M("studyreg"); // 实例化 
			
			//var_dump($data);
  
			if($Studyreg->add($data)){ // 根据条件保存修改的数据
				echo("报名提交成功！");
			}else{ 
			    echo("数据错误，提交失败！");
			}
		
		//班级表当前班报名人数加1
		   $classid=$_POST['input_classid'];
	       $classes=D('classes');
	       $cc=$classes->where('classid='.$classid)->getField('regcount');
		   $classes->regcount=$cc+1;
           $classes->where('classid='.$classid)->save(); 
		}
	 }
	 
	function delstu(){
		$classid=I('classid');
		$map['id']=I('id');
		$result=M('studyreg')->where($map)->delete();
		if($result===false){
			echo "取消报名失败！";
		}else{
		   //班级表当前班报名人数减1
		   $classes=D('classes');
	       $cc=$classes->where('classid='.$classid)->getField('regcount');
		   $classes->regcount=$cc-1;
           $classes->where('classid='.$classid)->save(); 
			echo "取消报名成功！";
	
		}
	 }
	

//保存小程序上传的图片	
	public function savestuimg(){
		$file=$_FILES;
		$userId=I('userId');
		foreach($file as $k=>$v){
			$filename=md5(uniqid(microtime(true),true));
			if($file[$k]['error'][0]==0){
				$config=array(
					'maxSize'=>70000000,
					'exts'=>array('jpg','jpeg','png','gif','bmp'),
					'rootPath'=>'./uploads/',
					//保存的文件名
					'saveName'=>$filename,
					//开启子目录
					'subName'=>array('date','Ymd'),
				);
				$upload=new \Think\Upload($config);
				$info=$upload->upload();
				if($info){
					//根目录 
					$rootPath=substr($config['rootPath'],1);
					//文件保存路径 
					$savepath=$info['file']['savepath'];
					$saveName=$info['file']['saveName'];
				    $fileUrl=$rootPath.$savepath.$saveName;
					var_dump('===fileurl:'.$fileUrl.'userid:'.$userId);
				}
			}		
		}	
	}	 
  	 	
	 public function userlogin(){
		//声明CODE，获取小程序传过来的CODE
		$code = I('code');
		//配置appid
		$appid = "wxa527ee517ed2a819";
		//配置appscret
		$secret = "e89440adc9f9140012813585e796c3b3";
		//api接口
	    $api = 'https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';
		//获取GET请求
		$curl = curl_init();
 		curl_setopt($curl, CURLOPT_URL, $api);
	    //curl_setopt($curl, CURLOPT_HEADER,1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		//curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	 	$data = curl_exec($curl);
		if(curl_errno($curl)){
			var_dump(curl_error($curl));
		}
		//关闭URL请求
		curl_close($curl);
		//显示获得的数据
	 
		echo $data;
	 }
	 
    function myreglist() {
		$openid=I('openid');
		if($openid!=''){
	   //  $data=M('studyreg')->where(array('openid'=>$openid))->select();
	   
		//在mysql创建了视图we_v2   注意：M('v2')为自动为视图加上表前缀we_  所以视图名也叫we_v2 liufeng  20190122
		$data=M('v2')->where(array('openid'=>$openid))->select();
		//var_dump($data);
	    print json_encode($data);  
		}
	}
	
	function reglist_distinct() {
		
		$openid=I('openid');
		$condition['openid']=$openid;
		$condition['fed']=0;
		if($openid!=''){
		$data=M('studyreg')->where($condition)->field('classid,classname,openid')->group('classid,classname,openid')->select();
		//var_dump($data);
	    print json_encode($data);  
		}
	}
	
	//报名成功后的提醒
	function getremind(){
		$classid=I('classid','');
		$ss=M('classes')->where('classid="'.$classid.'"')->find();
		$examtype=$ss['examtype'];
		$proname=$ss['proname'];
		$classbegin=date('Y-m-d', $ss['classbegin']);		
		$remindinfo=M('remind')->where('examtype="'.$examtype.'" and proname="'.$proname.'"')->find();		
		//在显示的提醒页面中用实际开班日期替换"开班第一天"
		$remindinfo['rcontent'] = str_replace('开班第一天', $classbegin, $remindinfo['rcontent']); 		
		print json_encode($remindinfo);
	}		

   function lists(){
	//获取查询参数值，导出指定数据表格
	$classid=I('classid','');	
    $regname=I('regname','');	
	if($classid!=''){
		$top_more_button [] = array (
		'title' => '导出数据',
		'url' => U ( 'export', array (
				'classid' => $classid
				) ) 
		);	
	} else if ($regname!=''){
		$top_more_button [] = array (
		'title' => '导出数据',
		'url' => U ( 'export', array (
				'regname' => $regname
				) ) 
		);
	} else{
		$top_more_button [] = array (
				'title' => '导出数据',
				'url' => U ( 'export' ) 
			);
	}
	
	$this->assign ( 'top_more_button', $top_more_button );		
	$model = $this->getModel ( 'Studyreg' );
	
	//_get_model_list ( $model, $page, $order)
	$list_data = $this->_get_model_list ( $model,0,'classid desc' );	
	$this->assign ( $list_data );
	$this->display ();	 
  }
}
