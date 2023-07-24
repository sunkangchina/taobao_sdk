<?php

/**
 * 卖家账单查询
 * @author auto create
 */
class SellerBillQueryRequest
{
	
	/** 
	 * 账单时间
	 **/
	public $biz_date;
	
	/** 
	 * 页号，从1开始
	 **/
	public $page_no;
	
	/** 
	 * 页大小，不得超过1000
	 **/
	public $page_size;	
}
?>