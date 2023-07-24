<?php

/**
 * 分页数据
 * @author auto create
 */
class PagedResult
{
	
	/** 
	 * 当前页条数
	 **/
	public $data_count;
	
	/** 
	 * 分页数据
	 **/
	public $data_list;
	
	/** 
	 * 是否空页
	 **/
	public $empty;
	
	/** 
	 * 页码
	 **/
	public $page_index;
	
	/** 
	 * 分页大小
	 **/
	public $page_size;
	
	/** 
	 * 总条数
	 **/
	public $total_count;
	
	/** 
	 * 总页数
	 **/
	public $total_page_count;	
}
?>