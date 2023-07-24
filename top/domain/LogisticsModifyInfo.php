<?php

/**
 * 发货时效修改记录
 * @author auto create
 */
class LogisticsModifyInfo
{
	
	/** 
	 * 成分品的组合id
	 **/
	public $comb_id;
	
	/** 
	 * 修改后的发货时效
	 **/
	public $consign_time;
	
	/** 
	 * 成分品的商品id
	 **/
	public $item_id;
	
	/** 
	 * 修改原因
	 **/
	public $modify_reason;
	
	/** 
	 * 修改时间
	 **/
	public $modify_time;
	
	/** 
	 * 修改前的发货时效
	 **/
	public $origin_consign_time;
	
	/** 
	 * 修改关联的订单好
	 **/
	public $related_id;
	
	/** 
	 * 成分品的skuId
	 **/
	public $sku_id;	
}
?>