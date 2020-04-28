<?php

namespace Addons\Downloadfile\Controller;
use Think\ManageBaseController;

class DownloadfileController extends ManageBaseController{
 
    function downloadlist() {

	//查询视图downloadfilelist
		$data=M('downloadfilelist')->select();
		//var_dump($data);
	    print json_encode($data);  
	
		
	}
}
