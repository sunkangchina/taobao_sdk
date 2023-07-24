<?php

/**
 * 入参
 * @author auto create
 */
class ProductDetailQueryRequestForSupplier
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 渠道产品 id
	 **/
	public $channel_product_id;
	
	/** 
	 * 是否查询 sku 信息
	 **/
	public $include_sku;
	
	/** 
	 * 二级渠道编码
	 **/
	public $sub_channel_code;	
}
?>