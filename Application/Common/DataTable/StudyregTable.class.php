<?php
/**
 * Studyreg数据模型
 */
class StudyregTable {
	// 数据表模型配置
	public $config = [
			'name' => 'studyreg',
			'title' => '报名信息',
			'search_key' => 'classid',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => 20,
			'addon' => ''
	];
	
	// 列表定义
	public $list_grid = [
			'classid' => [
					'title' => '培训项目',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'classname' => [
					'title' => '班级名称',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'regname' => [
					'title' => '姓名',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'sex' => [
					'title' => '性别',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'idtype' => [
					'title' => '证件类型',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'idnum' => [
					'title' => '证件号',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'tel' => [
					'title' => '联系电话',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'company' => [
					'title' => '公司（发票头）名称',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'ccode' => [
					'title' => '报名人单位统一信用代码',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'area' => [
					'title' => '所属区',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'graduate' => [
					'title' => '学历',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'duties' => [
					'title' => '职务',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'invoice_company' => [
					'title' => '开发票单位',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'invoice_ccode' => [
					'title' => '开发票统一信用代码',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'receiver' => [
					'title' => '收件人',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'recetel' => [
					'title' => '收件人电话',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'receaddress' => [
					'title' => '邮寄地址',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'regdate' => [
					'title' => '报名日期',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'fed' => [
					'title' => '是否反馈意见',
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
			'classid' => [
					'title' => '班级编号',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'regname' => [
					'title' => '姓名',
					'type' => 'string',
					'field' => 'varchar(50) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'sex' => [
					'title' => '性别',
					'type' => 'string',
					'field' => 'char(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'idtype' => [
					'title' => '证件类型',
					'type' => 'string',
					'field' => 'varchar(30) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'idnum' => [
					'title' => '证件号',
					'type' => 'string',
					'field' => 'varchar(100) NOT NULL',
					'is_show' => 1,
					'is_must' => 1,
					'placeholder' => '请输入内容'
			],
			'tel' => [
					'title' => '联系电话',
					'type' => 'string',
					'field' => 'varchar(30) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'company' => [
					'title' => '公司（发票头）名称',
					'type' => 'string',
					'field' => 'varchar(100) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'ccode' => [
					'title' => '报名人单位统一信用代码',
					'type' => 'string',
					'field' => 'varchar(100) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'area' => [
					'title' => '所属区',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'classname' => [
					'title' => '班级名称',
					'type' => 'string',
					'field' => 'varchar(100) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'graduate' => [
					'title' => '学历',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'duties' => [
					'title' => '职务',
					'type' => 'string',
					'field' => 'varchar(30) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'invoice_company' => [
					'title' => '开发票单位',
					'type' => 'string',
					'field' => 'varchar(100) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'invoice_ccode' => [
					'title' => '开发票统一信用代码',
					'type' => 'string',
					'field' => 'varchar(200) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'receiver' => [
					'title' => '收件人',
					'type' => 'string',
					'field' => 'varchar(30) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'recetel' => [
					'title' => '收件人电话',
					'type' => 'string',
					'field' => 'varchar(30) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'receaddress' => [
					'title' => '收件地址',
					'type' => 'string',
					'field' => 'varchar(200) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'postage' => [
					'title' => '邮资是否到付',
					'type' => 'string',
					'field' => 'varchar(20) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'openid' => [
					'field' => 'varchar(50) NULL',
					'type' => 'string',
					'placeholder' => '请输入内容'
			],
			'regdate' => [
					'title' => '报名日期',
					'type' => 'date',
					'field' => 'int(10) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'email' => [
					'title' => '电子邮箱',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'classdetail' => [
					'title' => '开班内容',
					'type' => 'textarea',
					'field' => 'text NULL',
					'placeholder' => '请输入内容'
			],
			'classbegin' => [
					'title' => '开班日期',
					'type' => 'date',
					'field' => 'int(10) NULL',
					'placeholder' => '请输入内容'
			],
			'fed' => [
					'title' => '是否反馈意见',
					'type' => 'radio',
					'field' => 'char(10) NULL',
					'extra' => '否
昌',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			]
	];
}	