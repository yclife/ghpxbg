<?php

namespace Addons\Examlist;
use Common\Controller\Addon;

/**
 * 考试安排插件
 * @author 无名
 */

    class ExamlistAddon extends Addon{

        public $info = array(
            'name'=>'Examlist',
            'title'=>'考试安排',
            'description'=>'考试安排',
            'status'=>1,
            'author'=>'无名',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

	public function install() {
		$install_sql = './Addons/Examlist/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Examlist/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }