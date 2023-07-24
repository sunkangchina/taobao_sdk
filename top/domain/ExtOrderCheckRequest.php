<?php

/**
 * 请求参数
 * @author auto create
 */
class ExtOrderCheckRequest
{
	
	/** 
	 * 外部订单号
	 **/
	public $out_order_no;
	
	/** 
	 * 子订单列表
	 **/
	public $out_sub_orders;
	
	/** 
	 * 收货人信息
	 **/
	public $receiver;	
}
?>