<?php
/**
 * Trainnews数据模型
 */
class TrainnewsTable {
	// 数据表模型配置
	public $config = [
			'name' => 'trainnews',
			'title' => '培训动态',
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
			'id' => [
					'title' => 'ID主键',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'title' => [
					'title' => '标题 ',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'img' => [
					'title' => '图片',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'publisher' => [
					'title' => '发布者',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'ctime' => [
					'title' => '发布日期',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'urls' => [
					'title' => '管理操作',
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
					]
			]
	];
	
	// 字段定义
	public $fields = [
			'title' => [
					'title' => '标题 ',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'img' => [
					'title' => '图片',
					'type' => 'picture',
					'field' => 'int(10) unsigned NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'content' => [
					'title' => '内容',
					'type' => 'editor',
					'field' => 'text NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'publisher' => [
					'title' => '发布者',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'ctime' => [
					'title' => '发布日期',
					'type' => 'date',
					'field' => 'int(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			]
	];
}	