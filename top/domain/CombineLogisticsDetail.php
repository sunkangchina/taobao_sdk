<?php

/**
 * 子订单组合品物流详情（仅支持拆单发货）
 * @author auto create
 */
class CombineLogisticsDetail
{
	
	/** 
	 * 运单号
	 **/
	public $invoice_no;
	
	/** 
	 * 物流公司
	 **/
	public $logistics_company;
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * 包裹详情（仅支持成分品）
	 **/
	public $send_goods_details;
	
	/** 
	 * sku_id
	 **/
	public $sku_id;
	
	/** 
	 * 子订单id
	 **/
	public $sub_order_id;	
}
?>