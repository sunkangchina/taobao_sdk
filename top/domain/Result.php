<?php

/**
 * 接口返回model
 * @author auto create
 */
class Result
{
	
	/** 
	 * 对外展示的错误信息
	 **/
	public $display_msg;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * json字符串。key是时间片，格式为yyyy-MM-dd或yyyy-MM-dd HH:mm-HH:mm，value是当前库存值
	 **/
	public $value;	
}
?>