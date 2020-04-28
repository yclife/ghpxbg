<?php
/**
 * Classes数据模型
 */
class ClassesTable {
	// 数据表模型配置
	public $config = [
			'name' => 'classes',
			'title' => '班级信息',
			'search_key' => 'classid',
			'add_button' => 1,
			'del_button' => 0,
			'search_button' => 1,
			'check_all' => 0,
			'list_row' => 20,
			'addon' => ''
	];
	
	// 列表定义
	public $list_grid = [
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
			'classdetail' => [
					'title' => '开班内容',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classdetail',
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
			'pid' => [
					'title' => '培训项目编号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'pid',
					'function' => '',
					'href' => [ ]
			],
			'did' => [
					'title' => '职务编号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'did',
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
			'classimg' => [
					'title' => '图标',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classimg',
					'function' => '',
					'href' => [ ]
			],
			'trainnewsid' => [
					'title' => '培训通知ID',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'trainnewsid',
					'function' => '',
					'href' => [ ]
			],
			'remindid' => [
					'title' => '漫馨提示ID',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'remindid',
					'function' => '',
					'href' => [ ]
			],
			'reglimit' => [
					'title' => '班级人数限制',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'reglimit',
					'function' => '',
					'href' => [ ]
			],
			'classclose' => [
					'title' => '结束报名',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'classclose',
					'function' => '',
					'href' => [ ]
			],
			'regcount' => [
					'title' => '当前报名人数',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0,
					'name' => 'regcount',
					'function' => '',
					'href' => [ ]
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
					],
					'name' => 'urls',
					'function' => ''
			]
	];
	
	// 字段定义
	public $fields = [
			'classid' => [
					'title' => '班级编号',
					'type' => 'string',
					'field' => 'varchar(50) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'classname' => [
					'title' => '班级名称',
					'type' => 'string',
					'field' => 'varchar(255) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'classdetail' => [
					'title' => '开班内容',
					'type' => 'textarea',
					'field' => 'text NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'examtype' => [
					'title' => '培训类别',
					'type' => 'radio',
					'field' => 'varchar(10) NOT NULL',
					'extra' => '初次培训
再培训',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'pid' => [
					'title' => '培训项目编号',
					'type' => 'num',
					'field' => 'varchar(30) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'did' => [
					'title' => '职务编号',
					'type' => 'num',
					'field' => 'int(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'trainnewsid' => [
					'title' => '培训通知ID',
					'type' => 'num',
					'field' => 'int(10) NULL',
					'remark' => '填写培训通知ID',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'remindid' => [
					'title' => '漫馨提示ID',
					'type' => 'num',
					'field' => 'int(10) NULL',
					'remark' => '用于学员报名成功后的提示',
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
			'classimg' => [
					'title' => '图标',
					'type' => 'picture',
					'field' => 'int(10) unsigned NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'ctime' => [
					'title' => '创建日期',
					'field' => 'int(10) NULL',
					'type' => 'string',
					'placeholder' => '请输入内容'
			],
			'reglimit' => [
					'title' => '班级人数限制',
					'type' => 'num',
					'field' => 'int(10) NOT NULL',
					'value' => 100,
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'classclose' => [
					'title' => '结束报名',
					'type' => 'bool',
					'field' => 'char(10) NULL',
					'extra' => '否
是',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'regcount' => [
					'title' => '当前报名人数',
					'type' => 'num',
					'field' => 'int(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			]
	];
}	