<?php
/**
 * Studyrecord数据模型
 */
class StudyrecordTable {
	// 数据表模型配置
	public $config = [
			'name' => 'studyrecord',
			'title' => '培训记录',
			'search_key' => '',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => 0,
			'addon' => ''
	];
	
	// 列表定义
	public $list_grid = [
			'regid' => [
					'title' => '学号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'regid',
					'function' => '',
					'href' => [ ]
			],
			'regname' => [
					'title' => '姓名',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'regname',
					'function' => '',
					'href' => [ ]
			],
			'sex' => [
					'title' => '性别',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'sex',
					'function' => '',
					'href' => [ ]
			],
			'idnum' => [
					'title' => '证件号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'idnum',
					'function' => '',
					'href' => [ ]
			],
			'classbegin' => [
					'title' => '开班日期',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classbegin',
					'function' => '',
					'href' => [ ]
			],
			'classend' => [
					'title' => '结班日期',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classend',
					'function' => '',
					'href' => [ ]
			],
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
			'pxbid' => [
					'title' => '班级编号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'pxbid',
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
			'regid' => [
					'title' => '学号',
					'type' => 'string',
					'field' => 'varchar(50) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'regname' => [
					'title' => '姓名',
					'type' => 'string',
					'field' => 'varchar(50) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'sex' => [
					'title' => '性别',
					'type' => 'string',
					'field' => 'varchar(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'idnum' => [
					'title' => '证件号',
					'type' => 'string',
					'field' => 'varchar(50) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'idtype' => [
					'title' => '证件类型',
					'type' => 'string',
					'field' => 'varchar(50) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'examtype' => [
					'title' => '培训类别',
					'type' => 'string',
					'field' => 'varchar(50) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'proname' => [
					'title' => '培训项目',
					'type' => 'string',
					'field' => 'varchar(50) NULL',
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
			'classbegin' => [
					'title' => '开班日期',
					'type' => 'date',
					'field' => 'int(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'classend' => [
					'title' => '结班日期',
					'type' => 'date',
					'field' => 'int(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'pxbid' => [
					'title' => '班级编号',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'feedback' => [
					'title' => '意见反馈',
					'type' => 'radio',
					'field' => 'char(10) NULL',
					'extra' => '未提交
已提交',
					'value' => 0,
					'is_show' => 1,
					'is_must' => 0
			]
	];
}	