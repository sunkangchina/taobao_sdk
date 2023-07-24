<?php

/**
 * 实物子订单信息
 * @author auto create
 */
class MasterTradeOrderDTO
{
	
	/** 
	 * 商品属性(json格式)
	 **/
	public $attribute;
	
	/** 
	 * 商品id
	 **/
	public $auction_id;
	
	/** 
	 * 商品名称
	 **/
	public $auction_title;
	
	/** 
	 * 品牌id
	 **/
	public $brand_id;
	
	/** 
	 * 购买数量
	 **/
	public $buy_amount;
	
	/** 
	 * 类目id
	 **/
	public $category_id;
	
	/** 
	 * 实物子订单id
	 **/
	public $order_id;
	
	/** 
	 * 商家编码
	 **/
	public $outer_id_sku;
	
	/** 
	 * 实物主订单id
	 **/
	public $parent_biz_order_id;
	
	/** 
	 * 商家价格
	 **/
	public $price;
	
	/** 
	 * 卖家名称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家店铺名称
	 **/
	public $shop_name;
	
	/** 
	 * sku描述
	 **/
	public $sku_desc;
	
	/** 
	 * sku_id
	 **/
	public $sku_id;
	
	/** 
	 * spu_id
	 **/
	public $spu_id;	
}
?>