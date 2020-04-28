<?php
/**
 * Duties数据模型
 */
class DutiesTable {
	// 数据表模型配置
	public $config = [
			'name' => 'duties',
			'title' => '职务',
			'search_key' => '',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => 20,
			'addon' => ''
	];
	
	// 列表定义
	public $list_grid = [
			'did' => [
					'title' => '职务编号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'did',
					'function' => '',
					'href' => [ ]
			],
			'dname' => [
					'title' => '职务名称',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'dname',
					'function' => '',
					'href' => [ ]
			],
			'proname' => [
					'title' => '包含的培训项目',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'proname',
					'function' => '',
					'href' => [ ]
			],
			'urls' => [
					'title' => '管理',
					'come_from' => 1,
					'width' => '',
					'is_sort' => 0,
					'href' => [
							'0' => [
									'title' => '编辑',
									'url' => '[EDIT]'
							],
							'1' => [
									'title' => '删除',
									'url' => '[DELETE]'
							]
					],
					'name' => 'urls',
					'function' => ''
			]
	];
	
	// 字段定义
	public $fields = [
			'did' => [
					'title' => '职务编号',
					'type' => 'num',
					'field' => 'int(10) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'dname' => [
					'title' => '职务名称',
					'type' => 'string',
					'field' => 'varchar(30) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'pname' => [
					'title' => '包含的培训项目',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'is_must' => 0
			]
	];
}	