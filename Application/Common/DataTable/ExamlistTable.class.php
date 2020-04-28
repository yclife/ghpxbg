<?php
/**
 * Examlist数据模型
 */
class ExamlistTable {
	// 数据表模型配置
	public $config = [
			'name' => 'examlist',
			'title' => '考试安排',
			'search_key' => '',
			'add_button' => 1,
			'del_button' => 1,
			'search_button' => 1,
			'check_all' => 1,
			'list_row' => '',
			'addon' => ''
	];
	
	// 列表定义
	public $list_grid = [ ];
	
	// 字段定义
	public $fields = [
			'examdate' => [
					'title' => '考试日期',
					'type' => 'string',
					'field' => 'varchar(255) NULL',
					'is_show' => 1,
					'is_must' => 0
			]
	];
}	