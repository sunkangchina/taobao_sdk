<?php

/**
 * 退款跟踪列表
 * @author auto create
 */
class RefundTrace
{
	
	/** 
	 * 动作发生的时间
	 **/
	public $action_time;
	
	/** 
	 * 应用标题
	 **/
	public $app_title;
	
	/** 
	 * 退款编号
	 **/
	public $refund_id;
	
	/** 
	 * 备注字段
	 **/
	public $remark;
	
	/** 
	 * 回流的订单状态
	 **/
	public $status;
	
	/** 
	 * 交易tid
	 **/
	public $tid;	
}
?>