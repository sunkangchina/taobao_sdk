<?php

/**
 * 请求组装
 * @author auto create
 */
class TopRequest
{
	
	/** 
	 * 创建供品关系开始时间
	 **/
	public $begin_time;
	
	/** 
	 * 当前页
	 **/
	public $current_page;
	
	/** 
	 * 创建供品关系结束时间
	 **/
	public $end_time;
	
	/** 
	 * 每页条数，最大不超过200
	 **/
	public $page_size;
	
	/** 
	 * 供应商ID
	 **/
	public $supplier_id;	
}
?>