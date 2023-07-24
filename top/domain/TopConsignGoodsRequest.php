<?php

/**
 * 包裹中商品信息
 * @author auto create
 */
class TopConsignGoodsRequest
{
	
	/** 
	 * 成分品itemId
	 **/
	public $comp_item_id;
	
	/** 
	 * 成分品skuId
	 **/
	public $comp_sku_id;
	
	/** 
	 * 品类型 0：标品/平台赠品，1：ERP线下赠品、2：成分品，默认为0
	 **/
	public $item_type;
	
	/** 
	 * 商品数量，不传默认为子单上的商品数量；支持不传，但不能传0或负值
	 **/
	public $num;
	
	/** 
	 * 子订单id
	 **/
	public $sub_tid;	
}
?>