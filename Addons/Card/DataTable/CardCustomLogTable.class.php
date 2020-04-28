<?php
/**
 * CardCustomLog数据模型
 */
class CardCustomLogTable {
	// 数据表模型配置
	public $config = [
			'name' => 'card_custom_log',
			'title' => '客户关怀赠送记录',
			'search_key' => '',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => 10,
			'addon' => 'Card'
	];
	
	// 列表定义
	public $list_grid = [ ];
	
	// 字段定义
	public $fields = [
			'custom_id' => [
					'title' => '关怀id',
					'field' => 'int(10) NULL',
					'type' => 'string'
			],
			'uid' => [
					'title' => '用户id',
					'field' => 'int(10) NULL',
					'type' => 'string'
			],
			'token' => [
					'title' => 'token',
					'field' => 'varchar(255) NULL',
					'type' => 'string'
			],
			'cTime' => [
					'title' => '赠送时间',
					'field' => 'int(10) NULL',
					'type' => 'string'
			],
			'score' => [
					'title' => '赠送积分',
					'field' => 'varchar(50) NULL',
					'type' => 'string'
			],
			'coupon_id' => [
					'title' => '赠送券id',
					'field' => 'int(10) NULL',
					'type' => 'string'
			],
			'is_send' => [
					'title' => '是否已经赠送',
					'field' => 'int(10) NULL',
					'type' => 'string'
			],
			'is_birthday' => [
					'title' => '是否生日赠送',
					'field' => 'int(10) NULL',
					'type' => 'string'
			]
	];
}	