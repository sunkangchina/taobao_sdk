<?php

/**
 * 返回值包装,result为返回具体消息内容
 * @author auto create
 */
class ResultWrapper
{
	
	/** 
	 * 返回内容
	 **/
	public $data_list;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_message;
	
	/** 
	 * 返回是否成功
	 **/
	public $success;	
}
?>