<?php
        	
namespace Addons\Duties\Model;
use Home\Model\WeixinModel;
        	
/**
 * Duties的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Duties' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	