<?php

/**
 * 产品详情查询入参
 * @author auto create
 */
class ProductDetailQueryRequestForDistributor
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 是否查询sku信息
	 **/
	public $include_sku;
	
	/** 
	 * 商家编码
	 **/
	public $merchant_code;
	
	/** 
	 * 产品 id
	 **/
	public $product_id;
	
	/** 
	 * 二级渠道编码
	 **/
	public $sub_channel_code;	
}
?>