<?php

/**
 * 请求参数
 * @author auto create
 */
class TopPriceApplyCreateRequest
{
	
	/** 
	 * 建议零售价
	 **/
	public $advise_sale_price_high;
	
	/** 
	 * 最低限价
	 **/
	public $advise_sale_price_low;
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 操作人id
	 **/
	public $creator_id;
	
	/** 
	 * 操作人名称
	 **/
	public $creator_nick;
	
	/** 
	 * 渠道价格(含税)
	 **/
	public $distribute_price;
	
	/** 
	 * 分销商名称，设置专享价填写
	 **/
	public $distributor_nick;
	
	/** 
	 * 渠道产品id
	 **/
	public $product_id;
	
	/** 
	 * 渠道价格(未税)
	 **/
	public $product_price;
	
	/** 
	 * SKU渠道价
	 **/
	public $sku_price_map;
	
	/** 
	 * 二级渠道编码
	 **/
	public $sub_channel_code;	
}
?>