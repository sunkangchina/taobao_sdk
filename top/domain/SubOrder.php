<?php

/**
 * 子采购单
 * @author auto create
 */
class SubOrder
{
	
	/** 
	 * 购买数量
	 **/
	public $buy_amount;
	
	/** 
	 * 仓内货品外部编码
	 **/
	public $goods_outer_id;
	
	/** 
	 * 商家编码
	 **/
	public $merchant_code;
	
	/** 
	 * 产品id
	 **/
	public $product_id;
	
	/** 
	 * 产品编码
	 **/
	public $product_number;
	
	/** 
	 * 产品价格(单位：分)
	 **/
	public $product_price;
	
	/** 
	 * 产品标题
	 **/
	public $product_title;
	
	/** 
	 * 产品SKU ID
	 **/
	public $sku_id;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;
	
	/** 
	 * 仓库名称
	 **/
	public $store_name;
	
	/** 
	 * 子采购单单号
	 **/
	public $sub_purchase_order_no;	
}
?>