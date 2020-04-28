<?php

namespace Addons\Remind;
use Common\Controller\Addon;

/**
 * 温馨提醒插件
 * @author 无名
 */

    class RemindAddon extends Addon{

        public $info = array(
            'name'=>'Remind',
            'title'=>'温馨提醒',
            'description'=>'温馨提醒',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

	public function install() {
		$install_sql = './Addons/Remind/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Remind/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }