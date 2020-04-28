<?php

namespace Addons\Studyrecord\Controller;
use Think\ManageBaseController;

class StudyrecordController extends ManageBaseController{
    function querystudyrecord() {
		//$openid=$_POST['openid'];
		$regname=$_POST['regname'];
		$idnum=$_POST['idnum'];
		//$idtype=$_POST['picker_idtype'];
	
		$map['regname']=$regname;
	    $map['idnum']=$idnum;
		
		if($regname!=''&&$idnum!=''){
	       $data=M('studyrecord')->where($map)->Order('proname,classbegin desc')->select();
		//   $data=M('studyrecord')->select();
	   //var_dump($data);
	    print json_encode($data);  
		}
		
	}

	
	  /**
   * 上传Excel文件
   */
  public function uploadEXCEL() {
  	$config=array(
		'maxSize'=>70000000,
		'replace'=>'true',  //存在同名文件是否是覆盖，默认为false
		'exts'=>array('xls', 'xlsx', 'csv'),
		'rootPath'=>'./Uploads/',
		//保存的文件名
		'saveName'=>$filename,
		//开启子目录
		//'subName'=>array('date','Ymd'),
		//subName=>$examdate,
	);
	$upload=new \Think\Upload($config);
		
 /*    if (!$upload->upload()) {  //如果上传失败,提示错误信息
      $this->error($upload->getErrorMsg());
    } else {  }*/
	
	//上传成功		  
		$info=$upload->upload();
		if(!$info){
			$this->error('打开表格错误！');
			exit();
		} else{
			//根目录 
			$rootPath=substr($config['rootPath'],1);	
			$saveName=$info['file']['savename'];
			//文件保存路径 		
			$savepath=$info['file']['savepath'];
			$data['name']=$saveName;
			$data['savename']=$saveName;
			$data['savepath']=$savepath;
			//文件后缀名
			$data['ext']=substr(strrchr($saveName, '.'), 1);			
	      /*此段代码是将上传文件名及路径保存在数据库file表中	
	        $file = M("file"); // 实例化User对象	
			$file->add($data);
			$lastid=$file->getLastInsID();	//获取到插入相片表后自动增长的ID
			*/	
			$fileUrl=SITE_PATH.$rootPath.$savepath.$saveName;
			
		} 
		vendor ( 'PHPExcel' );
		vendor ( 'PHPExcel.PHPExcel_IOFactory' );
		vendor ( 'PHPExcel.Reader.Excel5' );
		
		switch (strtolower ( $ext )) {
			case 'csv' :
				$format = 'CSV';
				$objReader = \PHPExcel_IOFactory::createReader ( $format )->setDelimiter ( ',' )->setInputEncoding ( 'GBK' )->setEnclosure ( '"' )->setLineEnding ( "\r\n" )->setSheetIndex ( 0 );
				break;
			case 'xls' :
				$format = 'Excel5';
				$objReader = \PHPExcel_IOFactory::createReader ( $format );
				break;
			default :
				$format = 'Excel2007';
				$objReader = \PHPExcel_IOFactory::createReader ( $format );
		}
		
		$objPHPExcel = $objReader->load ( $fileUrl );
		$objPHPExcel->setActiveSheetIndex ( 0 );
		$sheet = $objPHPExcel->getSheet ( 0 );
		$highestRow = $sheet->getHighestRow (); // 取得总行数
		//表格的列名
		$column = array (
					'A' => 'regname',
					'B' => 'sex',
					'C' => 'idnum',
					'D'=>'classbegin',
					'E'=>'idtype',
					'F'=>'examtype',
					'G'=>'proname',
					'H'=>'classname',
					'I'=>'regid',
					'J'=>'classend',
					'K'=>'pxbid'		
				);
		//此处设定日期型字段为哪几列，用于特殊处理（以时间戳保存）		
		$dateColumn = array ("D","J");	
		for($j = 2; $j <= $highestRow; $j ++) {
			$addData = array ();
			foreach ( $column as $k => $v ) {
				if ($dateColumn) {				
					foreach ( $dateColumn as $d ) {
						if ($k == $d) {						
						  // $addData [$v] = gmdate( "Y-m-d H:i:s",\PHPExcel_Shared_Date::ExcelToPHP ($objPHPExcel->getActiveSheet()->getCell ("$k$j")->getValue()));
						  //以时间戳存入数据库
						  $addData [$v] = strtotime(trim ( ( string ) $objPHPExcel->getActiveSheet ()->getCell ( $k . $j )->getValue ()) );
							break;

						} else {
							$addData [$v] = trim ( ( string ) $objPHPExcel->getActiveSheet ()->getCell ( $k . $j )->getValue () );
						}
					}
				} else {
					$addData [$v] = trim ( ( string ) $objPHPExcel->getActiveSheet ()->getCell ( $k . $j )->getValue () );
				}
			}
			$isempty = true;
			foreach ( $column as $v ) {
				$isempty && $isempty = empty ( $addData [$v] );
			}		
			if (! $isempty)
				$result [$j] = $addData;
			
		}
		$res ['status'] = 1;
		$res ['data'] = $result;
		//return $res; 
		
		 foreach ($result as $v){
			   $studyrecord=M('studyrecord')->add($v);
		 }
		 $this->success('导入表格完成！');
       
    } 
}
