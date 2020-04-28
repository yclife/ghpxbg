<?php
/**
 * Downloadfile数据模型
 */
class DownloadfileTable {
	// 数据表模型配置
	public $config = [
			'name' => 'downloadfile',
			'title' => '下载表格',
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
			'filename' => [
					'title' => '文件名',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'uploadfile' => [
					'title' => '上传文件',
					'come_from' => 0,
					'width' => '',
					'is_sort' => 0
			],
			'fileinfo' => [
					'title' => '下载说明',
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
							],
							'2' => [
									'title' => '预览',
									'url' => 'preview?id=[\'id\']'
							]
					]
			]
	];
	
	// 字段定义
	public $fields = [
			'filename' => [
					'title' => '文件名',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			],
			'uploadfile' => [
					'title' => '上传文件',
					'type' => 'file',
					'field' => 'int(10) UNSIGNED NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容',
					'validate_file_size' => 10485760
			],
			'fileinfo' => [
					'title' => '下载说明',
					'type' => 'textarea',
					'field' => 'text NULL',
					'is_show' => 1,
					'placeholder' => '请输入内容'
			]
	];
}	