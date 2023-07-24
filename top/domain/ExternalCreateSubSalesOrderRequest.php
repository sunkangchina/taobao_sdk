<?php

/**
 * 子订单列表
 * @author auto create
 */
class ExternalCreateSubSalesOrderRequest
{
	
	/** 
	 * 扩展字段
	 **/
	public $attributes;
	
	/** 
	 * 外部前端宝贝id
	 **/
	public $out_item_id;
	
	/** 
	 * 外部前端sku id
	 **/
	public $out_sku_id;
	
	/** 
	 * 外部子订单号, 外部一定要设置,如果外部没有,则设置为outOrderNo+productId+productSkuId
	 **/
	public $out_sub_order_no;
	
	/** 
	 * 产品id
	 **/
	public $product_id;
	
	/** 
	 * 购买数量
	 **/
	public $quantity;
	
	/** 
	 * 产品skuId
	 **/
	public $sku_id;	
}
?>