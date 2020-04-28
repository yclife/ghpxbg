<?php
        	
namespace Addons\Proname\Model;
use Home\Model\WeixinModel;
        	
/**
 * Proname的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Proname' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	