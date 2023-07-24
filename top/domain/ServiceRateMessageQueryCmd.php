<?php

/**
 * 请求
 * @author auto create
 */
class ServiceRateMessageQueryCmd
{
	
	/** 
	 * 单据类型：工单0 服务单1
	 **/
	public $order_type;
	
	/** 
	 * 评价单id
	 **/
	public $rate_id;
	
	/** 
	 * 服务编码
	 **/
	public $service_code;
	
	/** 
	 * 单据id
	 **/
	public $work_order_id;	
}
?>