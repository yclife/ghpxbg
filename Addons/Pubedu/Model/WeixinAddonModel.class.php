<?php
        	
namespace Addons\Pubedu\Model;
use Home\Model\WeixinModel;
        	
/**
 * Pubedu的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Pubedu' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	