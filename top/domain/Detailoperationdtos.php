<?php

/**
 * 子单操作明细列表
 * @author auto create
 */
class Detailoperationdtos
{
	
	/** 
	 * 附加数据信息
	 **/
	public $additional_info_dto;
	
	/** 
	 * 计划需要发布的渠道
	 **/
	public $channel_code;
	
	/** 
	 * 操作子单
	 **/
	public $detail_order_dto;
	
	/** 
	 * 期货计划信息
	 **/
	public $future_plan_info_dto;
	
	/** 
	 * 库存类型，默认2001
	 **/
	public $inventory_type;
	
	/** 
	 * 货品信息
	 **/
	public $item_dto;
	
	/** 
	 * 位置信息
	 **/
	public $location_dto;
	
	/** 
	 * 货主信息
	 **/
	public $owner_dto;
	
	/** 
	 * 库存数量(增量)
	 **/
	public $quantity;
	
	/** 
	 * 库存操作策略
	 **/
	public $strategy_dto;	
}
?>