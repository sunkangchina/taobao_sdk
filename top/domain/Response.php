<?php

/**
 * 返回值
 * @author auto create
 */
class Response
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 是否需要重试
	 **/
	public $retry;
	
	/** 
	 * 调用是否成功
	 **/
	public $success;	
}
?>