<?php

/**
 * 返回参数
 * @author auto create
 */
class FulfilplatformResult
{
	
	/** 
	 * 展示信息，如：服务单不存在
	 **/
	public $display_msg;
	
	/** 
	 * 错误名称
	 **/
	public $error_name;
	
	/** 
	 * 错误类型
	 **/
	public $error_type;
	
	/** 
	 * 错误信息，如：服务不可用
	 **/
	public $msg_info;
	
	/** 
	 * 服务单列表数据
	 **/
	public $result_list;
	
	/** 
	 * 是否成功
	 **/
	public $success;	
}
?>