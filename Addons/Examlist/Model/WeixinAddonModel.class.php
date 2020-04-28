<?php
        	
namespace Addons\Examlist\Model;
use Home\Model\WeixinModel;
        	
/**
 * Examlist的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Examlist' ); // 获取后台插件的配置参数	
		//dump($config);
	}
}
        	