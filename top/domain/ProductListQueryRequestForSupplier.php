<?php

/**
 * 请求参数
 * @author auto create
 */
class ProductListQueryRequestForSupplier
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 页号，从1开始
	 **/
	public $page_no;
	
	/** 
	 * 页大小
	 **/
	public $page_size;
	
	/** 
	 * 经营模式,agent 表示代销，dealer 表示经销
	 **/
	public $sales_mode;
	
	/** 
	 * 二级渠道编码
	 **/
	public $sub_channel_code;	
}
?>