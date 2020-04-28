<?php

namespace Addons\Studyreg;
use Common\Controller\Addon;

/**
 * 报名信息插件
 * @author 无名
 */

    class StudyregAddon extends Addon{

        public $info = array(
            'name'=>'Studyreg',
            'title'=>'报名信息',
            'description'=>'这是一个临时描述',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

	public function install() {
		$install_sql = './Addons/Studyreg/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Studyreg/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }