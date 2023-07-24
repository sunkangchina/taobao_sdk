<?php

/**
 * 结果
 * @author auto create
 */
class ListResult
{
	
	/** 
	 * 错误编码，通常用于success为false时的页面错误类型判定
	 **/
	public $error_code;
	
	/** 
	 * 错误原因，通常用于success字段值为false时
	 **/
	public $error_msg;
	
	/** 
	 * 通常用于success为true时的页面提示
	 **/
	public $msg;
	
	/** 
	 * 库存返回模型
	 **/
	public $result;
	
	/** 
	 * 结果是否正确   true：成功  false：失败
	 **/
	public $success;	
}
?>