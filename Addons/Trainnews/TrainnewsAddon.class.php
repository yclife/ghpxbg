<?php

namespace Addons\Trainnews;
use Common\Controller\Addon;

/**
 * 培训动态插件
 * @author 无名
 */

    class TrainnewsAddon extends Addon{

        public $info = array(
            'name'=>'Trainnews',
            'title'=>'培训动态',
            'description'=>'发布培训动态',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

	public function install() {
		$install_sql = './Addons/Trainnews/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Trainnews/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }