<?php
/**
 * Feedback数据模型
 */
class FeedbackTable {
	// 数据表模型配置
	public $config = [
			'name' => 'feedback',
			'title' => '意见反馈',
			'search_key' => '',
			'add_button' => 0,
			'del_button' => 0,
			'search_button' => 0,
			'check_all' => 0,
			'list_row' => 20,
			'addon' => ''
	];
	
	// 列表定义
	public $list_grid = [
			'openid' => [
					'title' => '用户ID',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'openid',
					'function' => '',
					'href' => [ ]
			],
			'stuname' => [
					'title' => '学员姓名',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'stuname',
					'function' => '',
					'href' => [ ]
			],
			'classid' => [
					'title' => '班级编号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classid',
					'function' => '',
					'href' => [ ]
			],
			'classname' => [
					'title' => '班级名称',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classname',
					'function' => '',
					'href' => [ ]
			],
			'att' => [
					'title' => '教学态度',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'att',
					'function' => '',
					'href' => [ ]
			],
			'meth' => [
					'title' => '教学方法',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'meth',
					'function' => '',
					'href' => [ ]
			],
			'effe' => [
					'title' => '教学效果',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'effe',
					'function' => '',
					'href' => [ ]
			],
			'arra' => [
					'title' => '教学安排',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'arra',
					'function' => '',
					'href' => [ ]
			],
			'dev' => [
					'title' => '教学设施',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'dev',
					'function' => '',
					'href' => [ ]
			],
			'env' => [
					'title' => '环境后勤',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'env',
					'function' => '',
					'href' => [ ]
			],
			'serv' => [
					'title' => '服务态度',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'serv',
					'function' => '',
					'href' => [ ]
			],
			'advise' => [
					'title' => '意见或建议',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'advise',
					'function' => '',
					'href' => [ ]
			],
			'ctime' => [
					'title' => '发布日期',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'ctime',
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
			'openid' => [
					'title' => '用户ID',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'classid' => [
					'title' => '班级编号',
					'type' => 'string',
					'field' => 'varchar(30) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'classname' => [
					'title' => '班级名称',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'att' => [
					'title' => '教学态度',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'meth' => [
					'title' => '教学方法',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'effe' => [
					'title' => '教学效果',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'arra' => [
					'title' => '教学安排',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'dev' => [
					'title' => '教学设施',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'env' => [
					'title' => '环境后勤',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'serv' => [
					'title' => '服务态度',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'advise' => [
					'title' => '意见或建议',
					'type' => 'textarea',
					'field' => 'text NULL',
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