<?php

/**
 * 面单对应的订单列
 * @author auto create
 */
class TradeOrderInfo
{
	
	/** 
	 * 收货人地址
	 **/
	public $consignee_address;
	
	/** 
	 * 收货人
	 **/
	public $consignee_name;
	
	/** 
	 * 收货人联系方式
	 **/
	public $consignee_phone;
	
	/** 
	 * 物流服务能力集合
	 **/
	public $logistics_service_list;
	
	/** 
	 * 订单渠道
	 **/
	public $order_channels_type;
	
	/** 
	 * 包裹号(或者ERP订单号)
	 **/
	public $package_id;
	
	/** 
	 * 包裹中的商品类型
	 **/
	public $package_items;
	
	/** 
	 * 快递服务产品类型编码
	 **/
	public $product_type;
	
	/** 
	 * 使用者ID
	 **/
	public $real_user_id;
	
	/** 
	 * 发货人姓名
	 **/
	public $send_name;
	
	/** 
	 * 发货人联系方式
	 **/
	public $send_phone;
	
	/** 
	 * 交易订单列表
	 **/
	public $trade_order_list;
	
	/** 
	 * 包裹体积（立方厘米）
	 **/
	public $volume;
	
	/** 
	 * 包裹重量（克）
	 **/
	public $weight;	
}
?>