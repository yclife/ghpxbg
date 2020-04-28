<?php
        	
namespace Addons\Studyrecord\Model;
use Home\Model\WeixinModel;
        	
/**
 * Studyrecord的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Studyrecord' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	