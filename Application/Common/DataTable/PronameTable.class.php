<?php
/**
 * Proname数据模型
 */
class PronameTable {
	// 数据表模型配置
	public $config = [
			'name' => 'proname',
			'title' => '培训项目',
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
			'pid' => [
					'title' => '项目编号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'pname' => [
					'title' => '项目名称',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'examtype' => [
					'title' => '考试类别',
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
			'proclose' => [
					'title' => '是否关闭',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
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
					]
			]
	];
	
	// 字段定义
	public $fields = [
			'pid' => [
					'title' => '项目编号',
					'type' => 'num',
					'field' => 'int(10) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'pname' => [
					'title' => '项目名称',
					'type' => 'string',
					'field' => 'varchar(30) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'examtype' => [
					'title' => '考试类别',
					'type' => 'radio',
					'field' => 'char(10) NULL',
					'extra' => '初训
再培训',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'img' => [
					'title' => '图片',
					'type' => 'picture',
					'field' => 'int(10) UNSIGNED NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'proclose' => [
					'title' => '是否关闭',
					'type' => 'radio',
					'field' => 'char(10) NULL',
					'extra' => '是
否',
					'value' => 1,
					'is_show' => 1,
					'placeholder' => '请输入内容'
			]
	];
}	