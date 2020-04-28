<?php
        	
namespace Addons\Trainnews\Model;
use Home\Model\WeixinModel;
        	
/**
 * Trainnews的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Trainnews' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	