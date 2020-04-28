<?php
        	
namespace Addons\Studyreg\Model;
use Home\Model\WeixinModel;
        	
/**
 * Studyreg的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Studyreg' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	