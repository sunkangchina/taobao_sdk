<?php

/**
 * 请求参数
 * @author auto create
 */
class ExternalCreateSalesOrderRequest
{
	
	/** 
	 * 扩展字段
	 **/
	public $attributes;
	
	/** 
	 * 授权渠道(市场)
	 **/
	public $channel_code;
	
	/** 
	 * 币种
	 **/
	public $currency_type;
	
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
	
	/** 
	 * 经销、代销、寄售
	 **/
	public $sales_mode;
	
	/** 
	 * 发货人
	 **/
	public $sender;
	
	/** 
	 * 二级渠道
	 **/
	public $sub_channel_code;	
}
?>