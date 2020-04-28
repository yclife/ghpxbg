<?php

namespace Addons\Downloadfile;
use Common\Controller\Addon;

/**
 * 下载表格插件
 * @author 无名
 */

    class DownloadfileAddon extends Addon{

        public $info = array(
            'name'=>'Downloadfile',
            'title'=>'下载表格',
            'description'=>'这是一个临时描述',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

	public function install() {
		$install_sql = './Addons/Downloadfile/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Downloadfile/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }