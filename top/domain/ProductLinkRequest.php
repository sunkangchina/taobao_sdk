<?php

/**
 * 选品请求
 * @author auto create
 */
class ProductLinkRequest
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 分销商商品 ID
	 **/
	public $out_item_id;
	
	/** 
	 * 供应商产品 id
	 **/
	public $product_id;
	
	/** 
	 * 经营模式
	 **/
	public $sales_mode;
	
	/** 
	 * sku 列表
	 **/
	public $sku_list;
	
	/** 
	 * 二级渠道编码
	 **/
	public $sub_channel_code;	
}
?>