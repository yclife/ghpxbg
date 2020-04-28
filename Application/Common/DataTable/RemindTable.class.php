<?php
/**
 * Remind数据模型
 */
class RemindTable {
	// 数据表模型配置
	public $config = [
			'name' => 'remind',
			'title' => '温馨提醒',
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
			'examtype' => [
					'title' => '培训类别',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'examtype',
					'function' => '',
					'href' => [ ]
			],
			'proname' => [
					'title' => '培训项目',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'proname',
					'function' => '',
					'href' => [ ]
			],
			'rcontent' => [
					'title' => '内容',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'rcontent',
					'function' => '',
					'href' => [ ]
			],
			'urls' => [
					'title' => '培训类别',
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
			'examtype' => [
					'title' => '培训类别',
					'type' => 'radio',
					'field' => 'varchar(10) NOT NULL',
					'extra' => '初次培训
再培训',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'proname' => [
					'title' => '培训项目',
					'type' => 'radio',
					'field' => 'varchar(10) NULL',
					'extra' => '生产经营单位主要负责人
生产经营单位安全管理人员
危化品经营单位主要负责人
危化品经营单位安全管理人员
危化品生产单位主要负责人
危化品生产单位安全管理人员',
					'is_show' => 1,
					'is_must' => 0
			],
			'rcontent' => [
					'title' => '内容',
					'type' => 'editor',
					'field' => 'text  NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			]
	];
}	