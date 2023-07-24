<?php

/**
 * 库存操作策略
 * @author auto create
 */
class Strategydto
{
	
	/** 
	 * 传入4 ：销售计划(考拉JIT业务必传)
	 **/
	public $aic_inventory_strategy;
	
	/** 
	 *  ['1','4']必传项
	 **/
	public $aic_inventory_strategy_available_list;
	
	/** 
	 * 渠道出货规则
	 **/
	public $channel_policy;
	
	/** 
	 * 渠道策略参数
	 **/
	public $channel_policy_param;	
}
?>