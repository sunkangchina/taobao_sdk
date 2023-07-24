<?php

/**
 * 子订单列表
 * @author auto create
 */
class Struct
{
	
	/** 
	 * 发货物流公司编码
	 **/
	public $logistics_company_code;
	
	/** 
	 * 发货物流公司
	 **/
	public $logistics_company_name;
	
	/** 
	 * 快递运单号,部分场景可能有多个运单号情况，分隔符(,)获取使用
	 **/
	public $logistics_waybill_no;
	
	/** 
	 * 外部前端宝贝id
	 **/
	public $out_item_id;
	
	/** 
	 * 外部前端sku id
	 **/
	public $out_sku_id;
	
	/** 
	 * 外部子订单
	 **/
	public $out_sub_order_no;
	
	/** 
	 * 产品id
	 **/
	public $product_id;
	
	/** 
	 * 产品skuId
	 **/
	public $sku_id;
	
	/** 
	 * 销售子订单
	 **/
	public $sub_sale_order_no;	
}
?>