<?php
        	
namespace Addons\Classes\Model;
use Home\Model\WeixinModel;
        	
/**
 * Classes的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Classes' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	