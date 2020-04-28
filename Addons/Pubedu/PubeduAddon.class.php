<?php

namespace Addons\Pubedu;
use Common\Controller\Addon;

/**
 * 宣传教育插件
 * @author 无名
 */

    class PubeduAddon extends Addon{

        public $info = array(
            'name'=>'Pubedu',
            'title'=>'宣传教育',
            'description'=>'宣传教育',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

	public function install() {
		$install_sql = './Addons/Pubedu/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Pubedu/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }