<?php
        	
namespace Addons\Downloadfile\Model;
use Home\Model\WeixinModel;
        	
/**
 * Downloadfile的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Downloadfile' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	