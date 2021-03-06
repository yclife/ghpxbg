<?php

// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
namespace Home\Controller;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class UserTagController extends HomeController {
	var $model = '';
	function _initialize() {
		$this->model = $this->getModel ( 'user_tag' );
	}
	// 通用插件的列表模型
	public function lists() {
		$map ['token'] = get_token ();
		session ( 'common_condition', $map );
		$this->assign ( 'search_url', U ( 'lists' ) );
		parent::common_lists ( $this->model, 0, 'Addons/lists' );
	}
	
	// 通用插件的编辑模型
	public function edit() {
		if (IS_POST) {
			$tagMap ['tag_id'] = $_POST ['id'];
			$uids = M ( 'user_tag_link' )->where ( $tagMap )->getFields ( 'uid' );
			if (! empty ( $uids )) {
				foreach ( $uids as $uid ) {
					$key = 'getUserInfo_' . $uid;
					S ( $key, null );
				}
			}
		}
		parent::common_edit ( $this->model, 0, 'Addons/edit' );
	}
	
	// 通用插件的增加模型
	public function add() {
		parent::common_add ( $this->model, 'Addons/add' );
	}
	
	// 通用插件的删除模型
	public function del() {
		parent::common_del ( $this->model );
	}
}