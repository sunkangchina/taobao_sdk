<?php

/**
 * 返回详情
 * @author auto create
 */
class ProductDetailQueryResponseForSupplier
{
	
	/** 
	 * 品牌
	 **/
	public $brand;
	
	/** 
	 * 类目
	 **/
	public $category;
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 商家编码
	 **/
	public $out_no;
	
	/** 
	 * 图片链接列表
	 **/
	public $picture_list;
	
	/** 
	 * 产品 id
	 **/
	public $product_id;
	
	/** 
	 * 渠道产品名称
	 **/
	public $product_title;
	
	/** 
	 * 销售属性，格式[k1:v2,k2:v2]
	 **/
	public $property_list;
	
	/** 
	 * 经营模式,agent:代销，dealer经销
	 **/
	public $sales_mode_list;
	
	/** 
	 * 产品货品 id
	 **/
	public $sc_item_id;
	
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