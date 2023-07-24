<?php

/**
 * 返回的评论的信息，仅返回tid和created字段
 * @author auto create
 */
class TradeRateRequest
{
	
	/** 
	 * 评价创建时间,格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 子订单ID
	 **/
	public $oid;
	
	/** 
	 * 交易ID
	 **/
	public $tid;	
}
?>